@extends('layouts.app')

@section('content')
<div class="page-wrapper">
    <div class="content container-fluid">
        <div class="page-header">
            <div class="row align-items-center">
                <div class="col">
                    <div class="mt-5">
                        <h4 class="card-title float-left mt-2">Reservations</h4>
                    </div>
                </div>
            </div>
          @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
            @endif
        </div>
        
        <div class="row">
            
            <div class="col-sm-12">
                <div class="card card-table">
                    <div class="card-body booking_card">
                        <div class="table-responsive">
                            <table class="datatable table table-stripped table-hover table-center mb-0">
                                <thead>
                                    <tr>
                                        <th>Reservation ID</th>
                                        <th>Service Name</th>
                                        <!-- <th>Options</th> -->
                                        <th>Client Email</th>
                                        <th>Date</th>
                                        <th>Time</th>
                                        <th>Total Price</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($reservations as $reservation)
                                    <tr>
                                        <td>RES-00{{ $reservation->id }}</td>
                                        <td>{{ $reservation->service_name }}</td>
                                        <!-- <td class="text-left">
                                            @php
                                                // Decode the options if it's stored as a JSON string
                                                $options = is_string($reservation->options) ? json_decode($reservation->options, true) : $reservation->options;
                                            @endphp

                                            @if(is_array($options))
                                                @foreach ($options as $option)
                                                    <span class="badge badge-pill bg-success inv-badge">{{$option}}
                                        </span>
                                                @endforeach
                                            @endif
                                        </td> -->
                                        <td>{{ $reservation->client->email }}</td>
                                        <td>{{ $reservation->date }}</td>
                                        <td>{{ $reservation->time }}</td>
                                        <td>{{ $reservation->total_price }} $</td>
                                        <td class="text-right">
                                            @if ($reservation->status == '1')
                                                <span class="badge badge-pill bg-success inv-badge">Confirmé</span>
                                            @else
                                                <a href="{{ route('reservation.confirm', $reservation->id) }}" class="btn btn-sm bg-success-light mr-2">
                                                    <span >Confirmer</span>
                                                </a>
                                            @endif
                                            <a href="{{ route('reservation.customize', $reservation->id) }}"><span class="badge badge-pill bg-success inv-badge">Personnaliser</span></a>

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
    </div>
    <div id="delete_asset" class="modal fade delete-modal" role="dialog">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body text-center">
                    <img src="" alt="" width="50" height="46">
                    <h3 class="delete_class">Are you sure want to delete this service?</h3>
                    <div class="m-t-20">
                        <a href="#" class="btn btn-white" data-dismiss="modal">Close</a>
                        <a href="">
                        <button type="submit" class="btn btn-danger">Delete</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
