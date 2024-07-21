@extends('layouts.app')

@section('content')
<div class="page-wrapper">
    <div class="content container-fluid">
        <div class="page-header">
            <div class="row align-items-center">
                <div class="col">
                    <h3 class="page-title mt-5">Edit Service</h3> 
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8">
                <form  action="{{ url('service/'.$service->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label>Service Name <span class="text-danger">*</span></label>
                        <input class="form-control" type="text" name="name" value="{{ $service->name }}"> 
                    </div>
                    <div class="form-group">
                        <label>Price <span class="text-danger">*</span></label>
                        <input class="form-control" type="text" name="price" value="{{ $service->price }}"> 
                    </div>
                    <div class="form-group">
    <label>Options</label>
    <div>
        @foreach($options as $option)
            <div class="form-check">
                <input 
                    class="form-check-input" 
                    type="checkbox" 
                    name="options[]" 
                    value="{{ $option->id }}" 
                    id="option{{ $option->id }}"
                    {{ isset($service->options) && in_array($option->id, array_column($service->options, 'id')) ? 'checked' : '' }}>
                <label class="form-check-label" for="option{{ $option->id }}">
                    {{ $option->name }}
                </label>
            </div>
        @endforeach
    </div>
</div>
                    <div class="m-t-20">
                        <button class="btn btn-primary submit-btn">Update Service</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection