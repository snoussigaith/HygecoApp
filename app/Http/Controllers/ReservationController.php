<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\Option;
use Carbon\Carbon;
use App\Models\Reservation;
use App\Models\Booking;

class ReservationController extends Controller
{

 public function index()
    {
        $bookings = Booking::all();
        return view('reservation', compact('bookings'));
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
    // Validate the request
    $validatedData = $request->validate([
        'service_id' => 'required|integer',
        'chambre_count' => 'required|integer|min:1|max:6',
        'bain_count' => 'required|integer|min:1|max:6',
        'cuisine_count' => 'required|integer|min:1|max:6',
        'selected_options' => 'array',
    ]);

    // Log the input data for debugging
    \Log::info('Request Data:', $validatedData);

    // Create a new reservation
    $reservation = new Reservation();
    $reservation->service_id = $validatedData['service_id'];
    $reservation->chambre_count = $validatedData['chambre_count'];
    $reservation->bain_count = $validatedData['bain_count'];
    $reservation->cuisine_count = $validatedData['cuisine_count'];

    // Calculate the total price
    $service = Service::find($validatedData['service_id']);
    $totalPrice = $service->price;
    if ($validatedData['chambre_count'] > 1) {
        $totalPrice += ($validatedData['chambre_count'] - 1) * 15; // Price per chambre
    }
    if ($validatedData['bain_count'] > 1) {
        $totalPrice += ($validatedData['bain_count'] - 1) * 30; // Price per salle de bain
    }
    if ($validatedData['cuisine_count'] > 1) {
        $totalPrice += ($validatedData['cuisine_count'] - 1) * 40; // Price per cuisine
    }
    if (isset($validatedData['selected_options'])) {
        foreach ($validatedData['selected_options'] as $optionId) {
            $option = Option::find($optionId);
            if ($option) {
                $totalPrice += $option->price;
            }
        }
    }
    $reservation->total_price = $totalPrice;

    // Save the reservation
    $reservation->save();

    // Associate the selected options with the reservation
    if (isset($validatedData['selected_options'])) {
        $reservation->options()->sync($validatedData['selected_options']);
    }

    // Redirect or return a response
    return redirect()->route('reservation.create')->with('status', 'Reservation created successfully.');
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
