@extends('layouts.app')

@section('content')
<div class="page-wrapper">
    <div class="content container-fluid">
        <div class="page-header">
            <div class="row align-items-center">
                <div class="col">
                    <div class="mt-5">
                        <h4 class="card-title float-left mt-2">Customize Reservation</h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('reservation.updateCustomization', $reservation->id) }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="time">New Time</label>
                                <input type="text" name="time" id="time" class="form-control" value="{{ $reservation->time }}">
                            </div>
                            <div class="form-group">
                                <label for="date">New Date</label>
                                <input type="date" name="date" id="date" class="form-control" value="{{ $reservation->date }}">
                            </div>
                            <button type="submit" class="btn btn-primary">Update Time</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
