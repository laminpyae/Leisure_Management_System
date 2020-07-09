@extends('frontend.indexmaster')

@section('content')
<div class="accomodation-banner">
	<div class="container">
  <div class="row justify-content-center">
    <div class="col-10">
      <h1 class="text-on-banner text-center display-3" id="headertitle">Luxury Hotel Singapore</h1>
    </div>
      <div class="col-8 text-center">
          <p class="headertitle2 d-lg-block d-none ">HOTEL RESERVATION SYSTEM</p>
          <div class="d-lg-block d-none">
            <button class="btn" id="order">Book Now</button>
          </div>
        </div>
    </div>
  </div>
</div>
<div class="detail-singleroom">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-6">
				<img src="{{asset($category->image)}}" class="img-thumbnail">
			</div>
			<div class="col-md-6">
				<h3>{{$category->name}}(Features)</h3>
				<div class="row">
				@foreach($category->subcategories as $row)
				<div class="col-md-12">
					<span>{{$row->type}} --></span>
					<span>{{$row->price}} MMK</span>
				</div>
				@endforeach
				</div>
				<h5>{{$category->description}}</h5>
				<!-- <span class="fa-stack fa-2x pt-2">
					<i class="fas fa-tv"><p class="pt-3">TV</p></i>
				</span>
				<span class="fa-stack fa-2x pt-2">
					<i class="fas fa-wifi"><p class="pt-3">WIFI</p></i>
				</span> -->
				<a href="{{route('bookingform', $category->id)}}" class="btn">Book Now</a>
			</div>
		</div>
	</div>
</div>

	@endsection