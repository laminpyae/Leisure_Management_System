@extends('backend/master')

@section('content')
	
	  <!-- Page Heading -->
          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-2 text-gray-800">Subcategory</h1>
            <a href="{{route('subcategories.index')}}" class="d-none d-sm-inline-block btn btn-sm bg-gold text-white shadow-sm">Back</a>
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
              <h6 class="m-0 font-weight-bold text-success">Edit Subcategory</h6>
            </div>
            <div class="card-body">
			<form action="{{route('subcategories.update', $subcategory->id)}}" method="POST">
				@csrf
				@method('PUT')
				<div class="form-group row">
					<label for="name" class="col-form-label col-sm-2">Type:</label>
					<div class="col-sm-10">
						<input type="text" name="type" id="name" class="form-control" value="{{$subcategory->type}}">
					</div>
				</div>
				<div class="form-group row">
					<label for="price" class="col-form-label col-sm-2">Price:</label>
					<div class="col-sm-10">
						<input type="number" name="price" id="price" class="form-control" value="{{$subcategory->price}}">
					</div>
				</div>
				<div class="form-group row">
					<label class="col-form-label col-sm-2">Category Id</label>
					<div class="col-sm-10">
						<select name="category_id" class="form-control">
							@foreach($categories as $row)
							<option value="{{$row->id}}">{{$row->name}}</option>
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