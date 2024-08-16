<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AvailableTime;

class AvailableTimeController extends Controller
{
   
   
    public function index()
    {
        $availableTimes = AvailableTime::orderBy('date')->orderBy('start_time')->get()->groupBy('date');

        $years = AvailableTime::selectRaw('YEAR(date) as year')->distinct()->orderBy('year', 'desc')->pluck('year');
        $months = AvailableTime::selectRaw('MONTH(date) as month')->distinct()->orderBy('month')->pluck('month');


        return view('availableTime.available-times', compact('availableTimes', 'years', 'months'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'date' => 'required|date',
            'start_time' => 'required|date_format:H:i',
            'end_time' => 'required|date_format:H:i|after:start_time',
        ]);

        AvailableTime::create([
            'date' => $request->date,
            'start_time' => $request->start_time,
            'end_time' => $request->end_time,
        ]);

        return redirect()->back()->with('success', 'Time slot added successfully!');
    }

     public function getAvailableTimesByDate(Request $request)
    {
        $request->validate([
            'date' => 'required|date',
        ]);

        $availableTimes = AvailableTime::where('date', $request->date)
            ->where('is_booked', false)
            ->get();

        return response()->json($availableTimes);
    }

     public function toggleBooking(Request $request)
    {
        $request->validate([
            'id' => 'required|exists:available_times,id',
            'is_booked' => 'required|boolean',
        ]);

        $availableTime = AvailableTime::find($request->id);
        $availableTime->is_booked = $request->is_booked;
        $availableTime->save();

        return response()->json(['success' => true]);
    }


}
