<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function index()
    {
        $bookings = Booking::all();
        return view('bookings.index', compact('bookings'));
    }

    public function create()
    {
        return view('bookings.create');
    }

    public function store(Request $request)
    {
        $booking = new Booking();
        $booking->date = $request->input('date');
        $booking->start_time = $request->input('start_time');
        $booking->end_time = $request->input('end_time');
        $booking->is_available = true;
        $booking->save();
        return redirect()->route('bookings.index');
    }

    public function update(Request $request, $id)
    {
        $booking = Booking::find($id);
        $booking->is_available = $request->input('is_available');
        $booking->save();
        return redirect()->route('bookings.index');
    }
}
