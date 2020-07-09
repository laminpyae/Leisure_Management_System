@extends('frontend.indexmaster')

@section('content')
<div class="accomodation-banner">
  <div class="container">
  <div class="row justify-content-center">
    <div class="col-10">
      <h1 class="text-on-banner text-center display-3" id="headertitle">Luxury Hotel Singapore</h1>
    </div>
      <div class="col-8 text-center">
          <p class="headertitle2 d-lg-block d-none">HOTEL RESERVATION SYSTEM</p>
         <!--  <div class="d-lg-block d-none">
            <a class="btn" id="order" href="#">Book Now</button>
          </div> -->
        </div>
    </div>
  </div>
</div>

<div class="Content2 py-5">
  <div class="container">
  <div class="row">
    <div class="col-12 text-center pb-3">
      <h2>ROOMS & SUITES</h2>
    </div>
     <div class="col-12">
      <img src="{{asset('frontendtemplate/img/so-logo.png')}}" alt="" class="mx-auto d-block">
      </div>
     <div class="col-12">
     <h6>Housed in a neo-classical heritage building in the heart of the city, unique experiences in design and gastronomy that blends French elegance and local cultures await you. Stay in comfort and style at our 134 bespoke rooms and suites, consisting of - 78 So Cosy rooms, 40 So Urban rooms, 7 So Studio rooms, 6 So Lofty suites and 3 So VIP suites, each offering its unique design and living space with state-of-the-art technology.</h6>
    </div>
  </div>
</div>
</div>

<div class="icon py-5">
  <div class="container">
    <div class="row pb-5">
      <div class="col-lg-1" >
        <span class="fa-stack fa-2x">
          <i class=" fa-stack-2x"></i>
          <i class="fas fa-book-reader fa-stack-1x"></i>
        </span>
      </div>
       <div class="col-lg-3 col-md-6 col-sm-12 ">
        <p>Book a room</p>
       <h6>Use our platform to book your perfect accomodation - choose from thousands of globel hotel room and hotel retals of every style!</h6>
      </div>
       <div class="col-lg-1 ">
        <span class="fa-stack fa-2x">
          <i class=" fa-stack-2x"></i>
          <i class="fas fa-hand-holding-heart fa-stack-1x"></i>
        </span>
      </div>
       <div class="col-lg-3 col-md-6 col-sm-12 ">
        <p>Contribute</p>
       <h6>We are non-profit booking site.100% of your booking commission goes directly towards creating travel scholarships</h6>
      </div>
       <div class="col-lg-1 ">
        <span class="fa-stack fa-2x">
          <i class=" fa-stack-3x"></i>
          <i class=" fas fa-piggy-bank fa-stack-1x "></i>
        </span>
      </div>
       <div class="col-lg-3 col-md-6 col-sm-12 ">
        <p>Make a change</p>
       <h6>your booking gives a gift travel to disadvantaged youth and seniors.life chnaging trips for them.No extra cost to you.</h6>
      </div>
    </div>
  </div> 
</div>

<div class="Content2 py-5">
  <div class="container">
  <div class="row">
    <div class="col-12 text-center pb-3">
      <h2>Accommodation</h2>
    </div>
  </div>
</div>
</div>

<div class="room-type">
  <div class="container">
      @foreach ($categories as $row)
    <div class="row">
      <div class="col-lg-6 col-md-12 col-sm-12 mt-5">
        <img src="{{$row->image}}" alt="" class="img-fluid">
      </div>
      <div class="col-lg-6 col-md-12 col-sm-12 pl-5 pt-3 mt-5">
        <h3 class="txt">{{$row->name}}</h3>
        <p class="text-dark">{{$row->description}}</p>
        <button type="button" class="btn mt-3"><a href="{{route('roomdetail', $row->id)}}" class="text-decoration-none">Show Details</a></button>
      </div>
    </div>      
      @endforeach
  </div>
</div>



@endsection