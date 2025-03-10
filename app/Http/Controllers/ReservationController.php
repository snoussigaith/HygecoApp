<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\Option;
use Carbon\Carbon;
use App\Models\Reservation;
use App\Models\Booking;
use App\Models\Client;
use App\Models\notifications;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Http\Integrations\GlobalPayments\Requests\GetTokenRequest;
use App\Http\Integrations\GlobalPayments\Requests\MakePaymentRequest;
use Illuminate\Support\Facades\Log;
use Saloon\Exceptions\SaloonException;






class ReservationController extends Controller
{
    public function confirm($id)
{
    $reservation = Reservation::findOrFail($id);
    $reservation->status = '1';
    $reservation->save();

    // Get the client email from the reservation
    $clientEmail = $reservation->client->email;

    // Find the user with the same email
    $user = User::where('email', $clientEmail)->first();

    // Notify the user if found
    if ($user) {
        $user->notify(new \App\Notifications\ReservationConfirmed($reservation));
    }

    // Send confirmation email to the client
    Mail::to($clientEmail)->send(new \App\Mail\ReservationConfirmed($reservation));

    return redirect()->route('reservation')->with('success', 'Reservation confirmed and email sent to client.');
}


    public function index()
    {
        $reservations = Reservation::orderBy('id', 'desc')->get();
            foreach ($reservations as $reservation) {
            $reservation->options = json_decode($reservation->options, true);
        }
            return view('reservation.index', compact('reservations'));
    }

    public function indexResClient() 
    {
        $userEmail = Auth::user()->email;
        $reservations = Reservation::whereHas('client', function($query) use ($userEmail) {
            $query->where('email', $userEmail);
        })->orderBy('date')->orderBy('time')->get();

        return view('client.dashboard', compact('reservations'));
    }


    public function indexClient() 
    {
        $userEmail = Auth::user()->email;
        $reservations = Reservation::whereHas('client', function($query) use ($userEmail) {
            $query->where('email', $userEmail);
        })->get();

        return view('client.reservations', compact('reservations'));
    }

    public function customize($id)
    {
        $reservation = Reservation::findOrFail($id);

        // Display a form to update the reservation time
        return view('reservation.customize', compact('reservation'));
    }

    public function updateCustomization(Request $request, $id)
    {
        $request->validate([
            'time' => 'required|string',
            'date' => 'required|date|date_format:Y-m-d',
        ]);

        $reservation = Reservation::findOrFail($id);
        $reservation->time = $request->input('time');
        $reservation->time = $request->input('date');
        $reservation->save();
        
        // Get the client email from the reservation
        $clientEmail = $reservation->client->email;

        // Find the user with the same email
        $user = User::where('email', $clientEmail)->first();

        // Notify the user if found
        if ($user) {
            $user->notify(new \App\Notifications\ReservationCustomized($reservation));
        }
        Mail::to($reservation->client->email)->send(new \App\Mail\ReservationCustomized($reservation));

            

        return redirect()->route('reservation')->with('success', 'Reservation time updated and email sent to client.');
    }

    public function create()
    {
        $bookings = Booking::all();
        $services = Service::all();
        $options = Option::all();

        return view('reservation', compact('services', 'options','bookings'));
    }

    public function stores(Request $request)
    {
        // Validate input
        $request->validate([
            'name' => 'required|string|filled',
            'last_name' => 'required|string|filled',
            'phone' => 'required|string|filled',
            'address' => 'required|string|filled',
            'apt_suite' => 'required|string|filled',
            'city' => 'required|string|filled',
            'zip' => 'required|string|filled',
            'email' => 'required|email',
            'service_id' => 'required|integer',
            'service_name' => 'required|string',
            'chambre_count' => 'required|integer',
            'bain_count' => 'required|integer',
            'cuisine_count' => 'required|integer',
            'carpet_count' => 'required|integer',
            'selected_options' => 'required|array',
            'frequency' => 'required|string',
            'etat' => 'required|string',
            'total_price' => 'required|numeric',
            'date' => 'required|date|date_format:Y-m-d',
            'time' => 'required|string',
        ]);

        try {
            // Save client
            $client = new Client();
            $client->name = $request->input('name');
            $client->email = $request->input('email');
            $client->phone = $request->input('phone');
            $client->address = $request->input('address');
            $client->apt_suite = $request->input('apt_suite');
            $client->city = $request->input('city');
            $client->zip = $request->input('zip');
            $client->last_name = $request->input('last_name');
            $client->save();

            // Save reservation
            $reservation = new Reservation();
            $reservation->service_id = $request->input('service_id');
            $reservation->service_name = $request->input('service_name');
            $reservation->chambre_count = $request->input('chambre_count');
            $reservation->bain_count = $request->input('bain_count');
            $reservation->cuisine_count = $request->input('cuisine_count');
            $reservation->carpet_count = $request->input('carpet_count');
            $reservation->options = json_encode($request->input('selected_options'));
            $reservation->frequency = $request->input('frequency');
            $reservation->etat = $request->input('etat');
            $reservation->time = $request->input('time');
            $reservation->date = $request->input('date');
            $reservation->total_price = $request->input('total_price');
            $reservation->client_id = $client->id; // Assuming you have a client_id field in your reservations table
            $reservation->save();

            // Create user if not exists and generate random password
            $user = User::where('email', $request->input('email'))->first();
            $generatedPassword = null;
            if (!$user) {
                $generatedPassword = Str::random(16);
                // Create a new user without a password
                $user = User::create([
                    'name' => $request->input('name'),
                    'email' => $request->input('email'),
                    'password' => Hash::make($generatedPassword),
                ]);

                // Assign "staff" role to the new user
                $user->assignRole('staff');

                // Notify the user with the generated password
                $user->notify(new \App\Notifications\UserCreated($generatedPassword));
            }

            // Notify the admin
            $admin = User::role('super-admin')->first(); // Adjust this line according to your admin identification logic
            if ($admin) {
                $admin->notify(new \App\Notifications\ReservationCreated($reservation, $client->name));
            }

            // Process payment
            // $tokenRequest = new GetTokenRequest();
            // $tokenResponse = $tokenRequest->send();

            // if ($tokenResponse->failed()) {
            //     throw new SaloonException('Failed to obtain access token');
            // }

            // $accessToken = $tokenResponse->json('access_token');

            // $paymentRequest = new MakePaymentRequest(
            //     token: $accessToken,
            //     amount: $reservation->total_price,
            //     currency: 'USD',
            // );

            // $paymentResponse = $paymentRequest->send();

            // if ($paymentResponse->failed()) {
            //     throw new SaloonException('Payment processing failed');
            // }

            return redirect()->route('reservation.success')->with('message', 'Reservation created successfully and payment processed');
        } catch (\Exception $e) {
            // Log the error
            Log::error($e->getMessage());

            return response()->json(['error' => 'Something went wrong. Please try again later.'], 500);
        }
    }

   public function store(Request $request)
{
    // Validate input
    $request->validate([
        'name' => 'required|string|filled',
        'last_name' => 'required|string|filled',
        'phone' => 'required|string|filled',
        'address' => 'required|string|filled',
        'apt_suite' => 'required|string|filled',
        'city' => 'required|string|filled',
        'zip' => 'required|string|filled',
        'email' => 'required|email',
        'service_id' => 'required|integer',
        'service_name' => 'required|string',
        'chambre_count' => 'required|integer',
        'bain_count' => 'required|integer',
        'cuisine_count' => 'required|integer',
        'carpet_count' => 'required|integer',
        'selected_options' => 'required|array',
        'frequency' => 'required|string',
        'etat' => 'required|string',
        'total_price' => 'required|numeric',
        'date' => 'required|date|date_format:Y-m-d',
        'time' => 'required|string',
        'payment_method_id' => 'required|string',
    ]);

    try {
        // Save client
        $client = new Client();
        $client->name = $request->input('name');
        $client->email = $request->input('email');
        $client->phone = $request->input('phone');
        $client->address = $request->input('address');
        $client->apt_suite = $request->input('apt_suite');
        $client->city = $request->input('city');
        $client->zip = $request->input('zip');
        $client->last_name = $request->input('last_name');
        $client->save();

        // Save reservation
        $reservation = new Reservation();
        $reservation->service_id = $request->input('service_id');
        $reservation->service_name = $request->input('service_name');
        $reservation->chambre_count = $request->input('chambre_count');
        $reservation->bain_count = $request->input('bain_count');
        $reservation->cuisine_count = $request->input('cuisine_count');
        $reservation->carpet_count = $request->input('carpet_count');
        $reservation->options = json_encode($request->input('selected_options'));
        $reservation->frequency = $request->input('frequency');
        $reservation->etat = $request->input('etat');
        $reservation->time = $request->input('time');
        $reservation->date = $request->input('date');
        $reservation->total_price = $request->input('total_price');
        $reservation->client_id = $client->id;
        $reservation->save();

        // Authorize payment using Stripe
        \Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));

        $totalAmount = ($request->input('total_price') + 100) * 100; // Convert to cents and add $100 buffer
        $paymentMethodId = $request->input('payment_method_id'); 

        // Create PaymentIntent with manual capture
        $paymentIntent = \Stripe\PaymentIntent::create([
            'amount' => $totalAmount,
            'currency' => 'usd',
            'payment_method' => $paymentMethodId, // Use payment method ID from frontend
            'capture_method' => 'manual', // Authorize only
            'confirm' => true,
            'return_url' => route('reservation.success'), // Add return URL
        ]);

        // Log the PaymentIntent ID
        Log::info('PaymentIntent created: ' . $paymentIntent->id);

        // Save payment intent ID for later capturing
        $reservation->payment_intent_id = $paymentIntent->id;
        $reservation->save();

        return redirect()->route('reservation.success')->with('message', 'Reservation created successfully and payment authorized.');
    } catch (\Stripe\Exception\ApiErrorException $e) {
        // Log the Stripe error
        Log::error('Stripe API error: ' . $e->getMessage());
        Log::error('Stripe Error Details: ', $e->getJsonBody());

        return response()->json(['error' => 'Payment authorization failed. Please try again later.'], 500);
    } catch (\Exception $e) {
        // Log general errors
        Log::error('Error: ' . $e->getMessage());

        return response()->json(['error' => 'Something went wrong. Please try again later.'], 500);
    }
}
public function capturePayment($reservationId)
{
    $reservation = Reservation::findOrFail($reservationId);

    try {
        \Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));

        $paymentIntent = \Stripe\PaymentIntent::retrieve($reservation->payment_intent_id);

        $finalAmount = $reservation->total_price + 100; // Final amount in cents

        $paymentIntent->capture(['amount_to_capture' => $finalAmount]);

        return response()->json(['success' => 'Payment captured successfully.']);
    } catch (\Exception $e) {
        Log::error($e->getMessage());

        return response()->json(['error' => 'Failed to capture payment.'], 500);
    }
}

    public function getToken()
    {
        $getTokenRequest = new GetTokenRequest();
        $response = $getTokenRequest->send();
        
        if ($response->failed()) { 
            Log::error('Failed to obtain access token: ' . $response->body());

            return response()->json(['error' => 'Failed to obtain access token'], 500);
        }
      
        $accessToken = $response->json();
        dd($response);

        // You can now use the access token to make subsequent API requests
        return response()->json(['access_token' => $accessToken]);
    }


    public function getOptions(Request $request, $serviceId)
    {
                // Get the options for the selected service
                $service = Service::findOrFail($serviceId);
                $options = $service->options()->get();

                // Return the options as a JSON response
                return response()->json($options);
    }


    public function notifications()
    {
            $notifications = notifications::all();
            return view('layouts.header', compact('notifications'));
    }

    public function markAsRead()
    {
        // Check if the user is authenticated
        if (Auth::check()) {
            // Get the authenticated user
            $user = Auth::user();

            // Mark all notifications as read
            $user->unreadNotifications->markAsRead();

            return redirect()->back()->with('success', 'All notifications marked as read.');
        }

        return redirect()->route('login')->with('error', 'You need to be logged in to mark notifications as read.');
    }


}
