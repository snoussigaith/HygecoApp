@extends('layouts.app')

@section('content')
<div class="page-wrapper">
    <div class="content container-fluid">
        <div class="page-header">
            <div class="row align-items-center">
                <div class="col">
                    <div class="mt-5">
                        <h4 class="card-title float-left mt-2">Reservations Buanderies</h4>
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
                                        <th>Client Name</th>
                                        <th>Client Email</th>
                                        <th>Phone</th>
                                        <th>Date collecte</th>
                                        <th>Date livraison</th>
                                        <th>Ville</th>
                                        <th>Adresse</th>
                                        <th>Code Postal</th>
                                        <th>Total Price</th>
                                        <th>Instruction</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($buanderies as $buanderie)
                                    <tr>
                                        <td>RES-00{{ $buanderie->id }}</td>
                                        <td>{{ $buanderie->name }}</td>
                                        <td>{{ $buanderie->email }}</td>
                                        <td>{{ $buanderie->phone }}</td>
                                        <td>{{ $buanderie->collecte }}</td>
                                        <td>{{ $buanderie->livraison }}</td>
                                        <td>{{ $buanderie->ville }}</td>
                                        <td>{{ $buanderie->adresse }}</td>
                                        <td>{{ $buanderie->zip }}</td>
                                        <td>{{ $buanderie->summary }}</td>
                                        <td>{{ $buanderie->instruction }}</td>
                                       
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
