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
              <h6 class="m-0 font-weight-bold text-success">Edit Facility</h6>
            </div>
            <div class="card-body">
			<form action="{{route('facilities.update', $facility->id)}}" method="POST">
				@csrf
				@method('PUT')
				<div class="form-group row">
					<label for="services" class="col-form-label col-sm-2">Services:</label>
					<div class="col-sm-10">
						<input type="text" name="services" id="services" class="form-control" value="{{$facility->services}}">
					</div>
				</div>
				<div class="form-group row">
					<label for="extra" class="col-form-label col-sm-2">Extra Services:</label>
					<div class="col-sm-10">
						<input type="text" name="extra" id="extra" class="form-control" value="{{$facility->extraservices}}">
					</div>
				</div>
				<div class="form-group row">
					<label class="col-form-label col-sm-2">Subcategory</label>
					<div class="col-sm-10">
						<select name="category_id" class="form-control">
							@foreach($subcategories as $row)
							<option value="{{$row->id}}">{{$row->type}}</option>
							@endforeach
						</select>
					</div>
				</div>
				<div class="form-group row">
					<div class="col-sm-2"></div>
					<div class="col-sm-10">
						<input type="submit" value="Update" class="btn bg-gold text-white shadow-sm">
					</div>
				</div>
			</form>
            </div>
          </div>

@endsection