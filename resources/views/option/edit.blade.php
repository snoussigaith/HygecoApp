@extends('layouts.app')

@section('content')
		
    <div class="page-wrapper">
			<div class="content container-fluid">
				<div class="page-header">
					<div class="row align-items-center">
						<div class="col">
							<h3 class="page-title mt-5">Edit option</h3> </div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-8">
						<form  action="{{ url('option/'.$option->id) }}"
                         method="POST">
                            @csrf
                            @method('PUT')

							<div class="form-group">
								<label>option Name <span class="text-danger">*</span></label>
								<input class="form-control" type="text" name="name" value="{{ $option->name }}"> </div>
                                <div class="form-group">
								<label>Price <span class="text-danger">*</span></label>
								<input class="form-control" type="text" name="price" value="{{ $option->price }}"> </div>
							
							<div class="m-t-20">
								<button class="btn btn-primary submit-btn">update option</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>



</div>
@endsection


	