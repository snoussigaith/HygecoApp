@extends('layouts.app')

@section('content')
<div class="page-wrapper">
    <div class="content container-fluid">
        <div class="page-header">
            <div class="row align-items-center">
                <div class="col">
                    <div class="mt-5">
                        <h4 class="card-title float-left mt-2">Option</h4>
                        <a href="{{ url('option/create') }}" class="btn btn-primary float-right veiwbutton">Add Option</a>
                       
                    </div>
                </div>
            </div>
            @if (session('status'))
            <div class="alert alert-success">{{ session('status') }}</div>
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
                                        <th>option ID</th>
                                        <th>Name</th>
                                        <th >Price</th>
                                        <th class="text-right" > Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($options as $option)
                                    <tr>
                                        <td>{{ $option->id }}</td>
                                        <td>{{ $option->name }}</td>
                                        <td>{{ $option->price }}</td>

                                      <td class="text-right">
                                          
                                               
                                                    <a href="{{ url('option/'.$option->id.'/edit') }}">
                                                        <i class="fas fa-pencil-alt m-r-5"></i> 
                                                    </a>
                                               
                                                   
                                                    <a href="{{ url('option/'.$option->id.'/delete') }}" >
                                                        <i class="fas fa-trash-alt m-r-5"></i>
                                                    </a>
                                                  

                                           
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
                    <h3 class="delete_class">Are you sure want to delete this Permission?</h3>
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


