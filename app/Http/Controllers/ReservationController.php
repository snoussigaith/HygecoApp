<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\Option;
use Carbon\Carbon;
use App\Models\Reservation;
use App\Models\Booking;
use App\Models\Client;
use Illuminate\Support\Facades\Log; // Add this line


class ReservationController extends Controller
{

 public function index()
    {
        $reservations = Reservation::all();
         foreach ($reservations as $reservation) {
        $reservation->options = json_decode($reservation->options, true);
    }
        return view('reservation.index', compact('reservations'));
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
        $reservation->total_price = $request->input('total_price');
        $reservation->client_id = $client->id; // Assuming you have a client_id field in your reservations table
        $reservation->save();

        return response()->json(['message' => 'Reservation created successfully with options']);
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


}
