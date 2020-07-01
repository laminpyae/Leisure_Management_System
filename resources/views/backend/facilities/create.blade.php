@extends('backend/master')

@section('content')
	
	  <!-- Page Heading -->
          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-2 text-gray-800">Facility</h1>
            <a href="{{route('facilities.index')}}" class="d-none d-sm-inline-block btn btn-sm bg-gold text-white shadow-sm">Back</a>
          </div>
          <!-- Error Validation -->
		@if ($errors->any())
		 <div class="alert alert-danger">
		 	<ul>
		 		@foreach ($errors->all() as $error)
		 		<li>{{ $error }}</li>
		 		@endforeach
		 	</ul>
		 </div>
		 @endif
		 <!-- End Validation -->
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-success">Add New Facility</h6>
            </div>
            <div class="card-body">
			<form action="{{route('facilities.store')}}" method="POST">
				@csrf
				<div class="form-group row">
					<label for="service" class="col-form-label col-sm-2">Services:</label>
					<div class="col-sm-10">
						<input type="text" name="service" id="service" class="form-control" placeholder="Enter Service Names">
					</div>
				</div>
				<div class="form-group row">
					<label for="extra" class="col-form-label col-sm-2">Extra Services:</label>
					<div class="col-sm-10">
						<input type="text" name="extra" id="extra" class="form-control" placeholder="Enter Extra Services">
					</div>
				</div>
				<div class="form-group row">
					<label class="col-form-label col-sm-2">Subcategory</label>
					<div class="col-sm-10">
						<select name="subcategory_id" class="form-control">
							@foreach($subcategories as $row)
							<option value="{{$row->id}}">{{$row->type}}</option>
							@endforeach
						</select>
					</div>
				</div>
				<div class="form-group row">
					<div class="col-sm-2"></div>
					<div class="col-sm-10">
						<input type="submit" value="Add" class="btn bg-gold text-white shadow-sm">
					</div>
				</div>
			</form>
            </div>
          </div>

@endsection