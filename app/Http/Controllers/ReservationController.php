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




use Illuminate\Support\Facades\Log; // Add this line


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
        ]);

        $reservation = Reservation::findOrFail($id);
        $reservation->time = $request->input('time');
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
                // Other fields as needed
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

        return redirect()->route('reservation.success')->with('message', 'Reservation created successfully');
    } catch (\Exception $e) {
        // Log the error
        Log::error($e->getMessage());

        return response()->json(['error' => 'Something went wrong. Please try again later.'], 500);
    }
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
