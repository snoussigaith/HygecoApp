@extends('layouts.app')

@section('content')
<div class="page-wrapper">
					<div class="content container-fluid">
						<div class="page-header">
							<div class="row align-items-center">
								<div class="col">
    <h1>Bookings</h1>
    <table>
        <thead>
            <tr>
                <th>Date</th>
                <th>Start Time</th>
                <th>End Time</th>
                <th>Available</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($bookings as $booking)
                <tr>
                    <td>{{ $booking->date }}</td>
                    <td>{{ $booking->start_time }}</td>
                    <td>{{ $booking->end_time }}</td>
                    <td>{{ $booking->is_available ? 'Yes' : 'No' }}</td>
                    <td>
                        <a href="{{ route('bookings.update', $booking->id) }}">Update</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
     </div>
    </div>
    </div>
    </div>
    </div>
@endsection