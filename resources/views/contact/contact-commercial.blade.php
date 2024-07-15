@extends('layouts.app')

@section('content')
<div class="page-wrapper">
    <div class="content container-fluid">
        <div class="page-header">
            <div class="row align-items-center">
                <div class="col">
                    <div class="mt-5">
                        <h4 class="card-title float-left mt-2">Contact</h4>
                       
                    </div>
                </div>
            </div>
        
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="card card-table">
                    <div class="card-body booking_card">
                        <div class="table-responsive">
                            <table class="datatable table table-stripped table-hover table-center mb-0">
                                <thead>
                                    <tr>
                                        <th>Contact ID</th>
                                        <th>Entreprise</th>
                                        <th>Email</th>
                                        <th>Telephone</th>
                                        <th>Responsable</th>
                                        <th>Rue</th>
                                        <th>Unite</th>
                                        <th>Ville</th>
                                        <th>Province</th>
                                        <th>Zip</th>

                                        <th class="text-right">Actions</th>
                                    </tr>
        
                                </thead>
                                <tbody>
                                    @foreach ($contacts as $contact)
                                    <tr>
                                        <td>{{ $contact->id }}</td>
                                        <td>{{ $contact->nom_entreprise }}</td>
                                        <td>{{ $contact->email }}</td>
                                        <td>{{ $contact->telephone }}</td>
                                        <td>{{ $contact->nom_responsable }}</td>
                                        <td>{{ $contact->rue }}</td>
                                        <td>{{ $contact->unite }}</td>
                                        <td>{{ $contact->ville }}</td>
                                        <td>{{ $contact->province }}</td>
                                        <td>{{ $contact->code_postal }}</td>

                                        <td class="text-right" >
                                         
                                            
                                            
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
                    <img src="assets/img/sent.png" alt="" width="50" height="46">
                    <h3 class="delete_class">Are you sure want to delete this User?</h3>
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


