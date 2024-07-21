@extends('layouts.app')

@section('content')
<div class="page-wrapper">
					<div class="content container-fluid">
						<div class="page-header">
							<div class="row align-items-center">
								<div class="col">
    <h1>Create Booking</h1>
    <form method="POST" action="{{ route('bookings.store') }}">
        @csrf
        <div>
            <label for="date">Date:</label>
            <input type="date" id="date" name="date" required>
        </div>
        <div>
            <label for="start_time">Start Time:</label>
            <input type="time" id="start_time" name="start_time" required>
        </div>
        <div>
            <label for="end_time">End Time:</label>
            <input type="time" id="end_time" name="end_time" required>
        </div>
        <div>
            <button type="submit">Create Booking</button>
        </div>
    </form>
    </div>
    </div>
    </div>
    </div>
    </div>
    
@endsection