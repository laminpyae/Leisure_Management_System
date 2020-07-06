@extends('backend/master')

@section('content')
	
	  <!-- Page Heading -->
          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-2 text-gray-800">Category</h1>
            <a href="{{route('categories.index')}}" class="d-none d-sm-inline-block btn btn-sm bg-gold text-white shadow-sm">Back</a>
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
              <h6 class="m-0 font-weight-bold text-success">Edit Category</h6>
            </div>
            <div class="card-body">
			<form action="{{route('categories.update', $category->id)}}" method="POST">
				@csrf
				@method('PUT')
			<div class="form-group row">
				<label for="photo" class="col-sm-2">Photo:</label>
				<div class="col-sm-10">
					<ul class="nav nav-tabs">
						<li class="nav-item">
							<a href="#old" class="nav-link active" data-toggle="tab">Old Photo</a>
						</li>
						<li class="nav-item">
							<a href="#new" class="nav-link" data-toggle="tab">New Photo</a>
						</li>
					</ul>

					<div class="tab-content">
						<div class="tab-pane fade show active mt-3" id="old" role="tabpanel">
							<img src="{{asset($category->image)}}" class="img-fluid w-25">
							<input type="hidden" name="oldphoto" value="{{$category->image}}">
						</div>

						<div class="tab-pane fade mt-3" id="new" role="tabpanel">
						<input type="file" name="image" id="photo" accept="images/*">
					</div>
					</div>
				</div>
			</div>
				<div class="form-group row">
					<label for="name" class="col-form-label col-sm-2">Name:</label>
					<div class="col-sm-10">
						<input type="text" name="name" id="name" class="form-control" value="{{$category->name}}">
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