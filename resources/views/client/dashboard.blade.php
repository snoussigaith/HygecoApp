@extends('layouts.app')

@section('content')
<div class="page-wrapper">
    <div class="content container-fluid">
        <div class="page-header">
            <div class="row align-items-center">
                <div class="col">
                    <div class="mt-5">
                        <h4 class="card-title float-left mt-2">Votre prochaine réservation</h4>
                    </div>
                </div>
            </div>
          @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
          @endif
        </div>
        
        <div class="row">
            @forelse($reservations as $reservation)
                   
    <div class="col-xl-3 col-sm-6 col-12">
        <div class="card board1 fill">
            <div class="card-body">
                <div class="dash-widget-header">
                    <div>
                        <h3 class="card_widget_header" id="days-{{ $reservation->id }}">0</h3>
                        <h6 class="text-muted">Days</h6>
                    </div>
                    <div class="ml-auto mt-md-3 mt-lg-0">
                        <span class="opacity-7 text-muted">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none" stroke="#009688" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar">
                                <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                                <line x1="16" y1="2" x2="16" y2="6"></line>
                                <line x1="8" y1="2" x2="8" y2="6"></line>
                                <line x1="3" y1="10" x2="21" y2="10"></line>
                            </svg>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-sm-6 col-12">
        <div class="card board1 fill">
            <div class="card-body">
                <div class="dash-widget-header">
                    <div>
                        <h3 class="card_widget_header" id="hours-{{ $reservation->id }}">0</h3>
                        <h6 class="text-muted">Hours</h6>
                    </div>
                    <div class="ml-auto mt-md-3 mt-lg-0">
                        <span class="opacity-7 text-muted">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none" stroke="#009688" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-clock">
                                <circle cx="12" cy="12" r="10"></circle>
                                <polyline points="12 6 12 12 16 14"></polyline>
                            </svg>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-sm-6 col-12">
        <div class="card board1 fill">
            <div class="card-body">
                <div class="dash-widget-header">
                    <div>
                        <h3 class="card_widget_header" id="minutes-{{ $reservation->id }}">0</h3>
                        <h6 class="text-muted">Minutes</h6>
                    </div>
                    <div class="ml-auto mt-md-3 mt-lg-0">
                        <span class="opacity-7 text-muted">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none" stroke="#009688" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-clock">
                                <circle cx="12" cy="12" r="10"></circle>
                                <polyline points="12 6 12 12 16 14"></polyline>
                            </svg>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-sm-6 col-12">
        <div class="card board1 fill">
            <div class="card-body">
                <div class="dash-widget-header">
                    <div>
                        <h3 class="card_widget_header" id="seconds-{{ $reservation->id }}">0</h3>
                        <h6 class="text-muted">Seconds</h6>
                    </div>
                    <div class="ml-auto mt-md-3 mt-lg-0">
                        <span class="opacity-7 text-muted">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none" stroke="#009688" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-clock">
                                <circle cx="12" cy="12" r="10"></circle>
                                <polyline points="12 6 12 12 16 14"></polyline>
                            </svg>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @empty
                <div class="col-12">
                    <p>No reservations found.</p>
                </div>
            @endforelse
</div>

<script>
    function countdownTimer() {
        @foreach($reservations as $reservation)
            var countDownDate{{ $reservation->id }} = new Date("{{ $reservation->date }} {{ $reservation->time }}").getTime();
            var x{{ $reservation->id }} = setInterval(function() {
                var now = new Date().getTime();
                var distance = countDownDate{{ $reservation->id }} - now;
                var days = Math.floor(distance / (1000 * 60 * 60 * 24));
                var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                var seconds = Math.floor((distance % (1000 * 60)) / 1000);
                document.getElementById("days-{{ $reservation->id }}").innerHTML = days;
                document.getElementById("hours-{{ $reservation->id }}").innerHTML = hours;
                document.getElementById("minutes-{{ $reservation->id }}").innerHTML = minutes;
                document.getElementById("seconds-{{ $reservation->id }}").innerHTML = seconds;
                if (distance < 0) {
                    clearInterval(x{{ $reservation->id }});
                    document.getElementById("days-{{ $reservation->id }}").innerHTML = "0";
                    document.getElementById("hours-{{ $reservation->id }}").innerHTML = "0";
                    document.getElementById("minutes-{{ $reservation->id }}").innerHTML = "0";
                    document.getElementById("seconds-{{ $reservation->id }}").innerHTML = "0";
                }
            }, 1000);
        @endforeach
    }
    countdownTimer();
</script>

    </div>
</div>
@endsection
