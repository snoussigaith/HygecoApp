@extends('layouts.app')

@section('content')
<div class="page-wrapper">
    <div class="content container-fluid">
        <div class="page-header">
            <div class="row align-items-center">
                <div class="col">
                    <div class="mt-5">
                        <h4 class="card-title float-left mt-2">Manage Available Times</h4>
                    </div>
                </div>
            </div>

            <!-- Display success message -->
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <!-- Form for adding new available time slots -->
            <form action="{{ route('available-times.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="date">Date:</label>
                    <input type="date" id="date" name="date" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="start_time">Start Time:</label>
                    <input type="time" id="start_time" name="start_time" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="end_time">End Time:</label>
                    <input type="time" id="end_time" name="end_time" class="form-control" required>
                </div>

                <button type="submit" class="btn btn-primary">Add Time Slot</button>
            </form>

           <div class="form-group">
                <label for="year">Year:</label>
                <select id="year" class="form-control">
                    <option value="">Select Year</option>
                    @foreach($years as $year)
                        <option value="{{ $year }}">{{ $year }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="month">Month:</label>
                <select id="month" class="form-control" disabled>
                    <option value="">Select Month</option>
                    @foreach($months as $month)
                        <option value="{{ $month }}">{{ \Carbon\Carbon::create()->month($month)->format('F') }}</option>
                    @endforeach
                </select>
            </div>

            <!-- List of existing time slots grouped by date -->
            <h3 class="mt-4">Existing Time Slots</h3>
            <ul class="list-group" id="time-slots">
                @forelse($availableTimes as $date => $times)
                    <li class="list-group-item time-slot" data-year="{{ \Carbon\Carbon::parse($date)->year }}" data-month="{{ \Carbon\Carbon::parse($date)->month }}">
                        <strong>{{ $date }}</strong>
                        <ul class="list-group mt-2">
                            @foreach($times as $time)
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    {{ $time->start_time }} - {{ $time->end_time }}
                                    <div class="custom-control custom-switch">
                                        <input type="checkbox" class="custom-control-input toggle-booking" id="toggle-{{ $time->id }}" 
                                               data-id="{{ $time->id }}" {{ $time->is_booked ? 'checked' : '' }}>
                                        <label class="custom-control-label" for="toggle-{{ $time->id }}"></label>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </li>
                @empty
                    <li class="list-group-item">No available time slots found.</li>
                @endforelse
            </ul>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        // Enable the month dropdown when a year is selected
        $('#year').change(function() {
            var selectedYear = $(this).val();
            if (selectedYear) {
                $('#month').prop('disabled', false);
            } else {
                $('#month').prop('disabled', true);
            }
            filterTimeSlots();
        });

        // Filter the time slots when the month is selected
        $('#month').change(function() {
            filterTimeSlots();
        });

        function filterTimeSlots() {
            var selectedYear = $('#year').val();
            var selectedMonth = $('#month').val();

            $('.time-slot').each(function() {
                var slotYear = $(this).data('year');
                var slotMonth = $(this).data('month');

                if ((selectedYear == slotYear || !selectedYear) && (selectedMonth == slotMonth || !selectedMonth)) {
                    $(this).show();
                } else {
                    $(this).hide();
                }
            });
        }

        // Existing toggle booking functionality
        $('.toggle-booking').change(function() {
            var isBooked = $(this).is(':checked') ? 1 : 0;
            var timeSlotId = $(this).data('id');

            $.ajax({
                url: "{{ route('available-times.toggle-booking') }}",
                type: 'POST',
                data: {
                    _token: '{{ csrf_token() }}',
                    id: timeSlotId,
                    is_booked: isBooked
                },
                success: function(response) {
                    console.log('Booking status updated successfully');
                },
                error: function(xhr) {
                    console.error('Error updating booking status:', xhr.responseText);
                }
            });
        });
    });
</script>
@endsection
