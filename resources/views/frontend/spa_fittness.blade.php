@extends('frontend.indexmaster')

@section('content')

<div class="sapandfitness-banner">
  <div class="container">
  <div class="row justify-content-center">
    <div class="col-10">
      <h1 class="text-on-banner text-center display-3" id="headertitle">Luxury Hotel Singapore</h1>
    </div>
      <div class="col-8 text-center">
          <p class="headertitle2 d-lg-block d-none ">HOTEL RESERVATION SYSTEM</p>
          <div class="d-lg-block d-none">
            <a class="btn" href="{{route('bookingform', 1)}}" id="order">Book Now</a>
          </div>
        </div>
    </div>
  </div>
</div>

<div class="content4 py-5">
  <div class="container">
  <div class="row">
    <div class="col-12 text-center pb-3">
      <h4>Spa & Fittness</h4>
    </div>
     <div class="col-sm-12">
      <img src="{{asset('frontendtemplate/img/so-logo.png')}}" alt="" class="mx-auto d-block">
    </div>
     <div class="col-12 py-3">
      <h6>A body spa is as simple and as useful in your skin care routine as it can get! The most important thing that a body spa does is remove dead skin cells and increase the blood circulation in the body. A body spa has an exfoliating agent that restores your skin's health and gives you glowing and supple looking skin! Full service hotels maximize offerings to the guest to provide an all-in-one experience, albeit at a higher price point.</h6>
    </div><!-- col -->
  </div>
</div>
</div>

<div class="popular-service">
  <div class="container">
    <div class="row">
      <div class="col-12 text-center py-5">
        <h3>The Most Popular Spa Treatments</h3>
      </div>
    </div>

    <div class="row p-2" ><!-- tre1 -->
      <div class="col-lg-4 col-md-8 col-sm-12">
        <div class="inner">
          <img src="{{asset('frontendtemplate/img/populartre1.jpg')}}" alt="" >
        </div>
        <div class="card" style="">
          <h6>"body treatment" could involve all sorts of things. You might be: massaged or scrubbed with a particular oil, cream or mineral. </h6>
          <button type="submit" class="btn mt-3">Body Treatment</button>
        </div>
      </div>
        <div class="col-lg-4 col-md-4 col-sm-12 ml-md-0 ml-lg-0">
        <div class="inner">
          <img src="{{asset('frontendtemplate/img/populartre2.jpg')}}" alt="" >
        </div>
              <div class="card" style="">
          <h6>"body treatment" could involve all sorts of things. You might be: massaged or scrubbed with a particular oil, cream or mineral. </h6>
          <button type="submit" class="btn mt-3">Oil Massage</button>
        </div>
      </div>
        <div class="col-lg-4 col-md-4 col-sm-12 ml-md-0 ml-lg-0">
        <div class="inner">
          <img src="{{asset('frontendtemplate/img/populartre3.jpg')}}" alt="" >
        </div>
        <div class="card" style="">
          <h6>"body treatment" could involve all sorts of things. You might be: massaged or scrubbed with a particular oil, cream or mineral. </h6>
          <button type="submit" class="btn mt-3 p-2">Traditional Massage</button>
        </div>
      </div>
    </div>


     <div class="row p-2 py-5" ><!-- tre2   -->
      <div class="col-lg-4 col-md-8 col-sm-12">
        <div class="inner">
          <img src="{{asset('frontendtemplate/img/populartre4.jpg')}}" alt="" >
        </div>
        <div class="card " style="">
          <h6>"body treatment" could involve all sorts of things. You might be: massaged or scrubbed with a particular oil, cream or mineral. </h6>
          <button type="submit" class="btn my-3">Aromatherapy </button>
        </div>
      </div>
        <div class="col-lg-4 col-md-4 col-sm-12 ml-md-0 ml-lg-0">
        <div class="inner">
          <img src="{{asset('frontendtemplate/img/populartre5.jpg')}}" alt="" >
        </div>
          <div class="card" style="">
          <h6>"body treatment" could involve all sorts of things. You might be: massaged or scrubbed with a particular oil, cream or mineral. </h6>
          <button type="submit" class="btn my-3">Swedish Massage</button>
        </div>
      </div>
        <div class="col-lg-4 col-md-4 col-sm-12 ml-md-0 ml-lg-0">
        <div class="inner">
          <img src="{{asset('frontendtemplate/img/populartre6.jpg')}}" alt="" >
        </div>
        <div class="card" style="">
          <h6>"body treatment" could involve all sorts of things. You might be: massaged or scrubbed with a particular oil, cream or mineral. </h6>
          <button type="submit" class="btn my-3">Hot stone Massage</button>
        </div>
      </div>
    </div>
    </div>
  </div><!-- popular-service -->
 

<div class="container py-5">
  <div class="row">
    <div class="workout1">
      <div class="col-lg-6">
      </div>
    </div>

     <div class="workout2">
      <div class="col-lg-6">
      </div>
    </div>
  </div>
   <div class="row">
    <div class="workout3">
      <div class="col-lg-6">
      </div>
    </div>

     <div class="workout4">
      <div class="col-lg-6">
      </div>
    </div>
  </div>
</div>

 <div class="fitness-icon py-5">
    <div class="container py-5">
      <div class="row">
        <div class="col-lg-4 col-md-6 col-sm-12">
         <span class="fa-stack fa-2x">
          <i class="fas fa-circle fa-stack-2x"></i>
          <i class="fas fa-dumbbell fa-stack-1x fa-inverse"></i>
        </span>
        <h4>ANALYSING FITNESS</h4>
          <h5>A SWOT analysis involves laying out your organization's strengths, weaknesses, opportunities and threats; it can be used to help make sensible, thoughtful business decisions</h5>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12">
         <span class="fa-stack fa-2x">
          <i class="fas fa-circle fa-stack-2x"></i>
          <i class="fas fa-network-wired fa-stack-1x fa-inverse"></i>
        </span>
        <h4 class="pl-5">WORK HARDER</h4><i class=""></i>
          <h5>When it comes to getting motivated, there are things that work and things that don’t. When I look at fitness models on IG, I wind up feeling kind of bad about myself</h5>
        </div>
         <div class="col-lg-4 col-md-6 col-sm-12">
         <span class="fa-stack fa-2x">
          <i class="fas fa-circle fa-stack-2x"></i>
          <i class="fas fa-biking fa-stack-1x fa-inverse"></i>
        </span>
        <h4>ACHIEVE YOUR DESTINY</h4>
          <h5>Destiny is the concept that each one of us has a purpose. If that's true, then we have to make moves down a path to get there. When was the last time you were on a hike and didn't make any choices or put any work in</h5>
        </div>
    </div>
    </div>
  </div>
<div class="gym-club py-5">
  <div class="container py-5">
  <div class="row pb-5">
    <div class="col-lg-6">
      <div class="inner">
        <img src="{{asset('frontendtemplate/img/gymclub.jpg')}}" alt="" class="img-fluid ">
      </div>
    </div>
    <div class="col-lg-6">
      <h4>VIRGIN ACTIVE FITNESS CLUB</h4>
      <h6>Our partnership with the neighbouring fitness giant, Virgin Active Fitness Club – Tanjong Pagar, means that even more innovative fitness options are available to guests staying in a Luxury Premium room, Luxury Club room or a suite. Train in Singapore’s only altitude studio, discover anti-gravity yoga, join a Bodypump session and try out ultra-modern equipment including the Powerplate, Krankcycle, Wattbike or Skillmill.</h6>
    </div>
  </div>
    <div class="row">
    <div class="col-lg-6">
      <div class="inner">
              <img src="{{asset('frontendtemplate/img/gymclub2.jpg')}}" alt="">
      </div>
    </div>
    <div class="col-lg-6">
      <h4>SOFIT</h4>
      <h6>Rejuvenate your energy with an invigorating workout in SoFit Gym decked with state-of-the-art Technogym equipment for a total body workout, complemented with a city skyline view. The gym is open 24 hours.The Fitness Center at Chatrium Hotel Royal Lake Yangon offers pristine views of the hotel pool and gardens and also provides fitness instructors who will help put together an effective workout session.</h6>
    </div>
  </div>
</div>
</div>

<div class="gymsecbanner">
<div class="container-fluid">
  <div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12">
      
      </div>
    </div>
  </div>
</div>

@endsection('content')