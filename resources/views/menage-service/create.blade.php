@extends('layouts.app')

@section('content')
<div class="page-wrapper">
    <div class="content container-fluid">
        <div class="page-header">
            <div class="row align-items-center">
                <div class="col">
                    <h3 class="page-title mt-5">Add Service</h3>
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="col-lg-8">
                <form action="{{ url('/service/add') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label>Service Name <span class="text-danger">*</span></label>
                        <input class="form-control" type="text" name="name">
                    </div>
                    <div class="form-group">
                        <label>Price <span class="text-danger">*</span></label>
                        <input class="form-control" type="number" step="0.01" name="price" id="servicePrice" oninput="calculateTotal()">
                    </div>
                    <div class="form-group">
                        <label>Options</label>
                        <div>
                            @foreach($options as $option)
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="options[]" value="{{ $option->id }}" id="option{{ $option->id }}" data-price="{{ $option->price }}" onclick="calculateTotal()">
                                    <label class="form-check-label" for="option{{ $option->id }}">
                                        {{ $option->name }} : <span style="color:#009688;">{{ $option->price }} $</span>
                                    </label>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Has Frequency</label>
                        <div class="custom-control custom-switch">

                            <input type="checkbox" class="custom-control-input" id="hasFrequency" name="has_frequency">
                            <label class="custom-control-label" for="hasFrequency"></label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Has Base</label>
                        <div class="custom-control custom-switch">

                            <input type="checkbox" class="custom-control-input" id="hasBase" name="has_base">
                            <label class="custom-control-label" for="hasBase"></label>
                        </div>
                    </div>
                    <div class="m-t-20">
                        <button class="btn btn-primary submit-btn">Create Service</button>
                    </div>
                </form>
            </div>
            <div class="col-xl-3 col-sm-6 col-12">
                <div class="card board1 fill">
                    <div class="card-body">
                        <div class="dash-widget-header">
                            <div>
                                <h3 class="card_widget_header" id="totalPrice">0.00</h3>
                                <h6 class="text-muted">Prix Total</h6>
                            </div>
                            <div class="ml-auto mt-md-3 mt-lg-0">
                                <span class="opacity-7 text-muted">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#009688" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-dollar-sign">
                                        <line x1="12" y1="1" x2="12" y2="23"></line>
                                        <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path>
                                    </svg>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
function calculateTotal() {
    let servicePrice = parseFloat(document.getElementById('servicePrice').value) || 0;
    let totalPrice = servicePrice;
    let checkboxes = document.querySelectorAll('input[type="checkbox"]:checked');

    checkboxes.forEach(function(checkbox) {
        totalPrice += parseFloat(checkbox.getAttribute('data-price'));
    });

    document.getElementById('totalPrice').innerText = totalPrice.toFixed(2);
}
</script>
@endsection
