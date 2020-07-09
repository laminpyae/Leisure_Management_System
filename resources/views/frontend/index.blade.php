@extends('frontend.indexmaster')

@section('content')

<div class="home-banner">
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

<!-- review -->
<div class="review1">
  <div class="container">
  <div class="row">
    <div class="col-12 text-center">
      <div class="title">
        <h1 class="secTitle">Luxury Hotel</h1>
        <h4>HoteL Reservation Review</h4>
      </div>
    </div>
  </div>
  <div class="col-12">
   <div class="content">
      <h6>Welcome to Luxury Singapore City Centre, a luxury hotel set in the heart of the central business district. Amidst the historic shophouses and tall skyscrapers of Tanjong Pagar and directly above the MRT station, discover our singular blend of French art de vivre and local sophistication.

      With elegant function rooms, a restaurant serving authentic French and refined Local Chinese cuisine, a tea lounge and bar and coffee bar, multiple fitness options and an outdoor pool, Sofitel Singapore City Centre is a magnifique setting for work, play and relaxation in the Garden City.</h6>
   </div>
  </div>
</div>
</div>

<div class="review2">
  <div class="container pt-5">
    <div class="row pt-5">
      <div class="col-lg-4 col-md-12 col-sm-12 order-lg-1 order-sm-1" id="column">
        <img src="{{asset('frontendtemplate/img/standardroom.jpg')}}" class="image ">
        <div class="cardtext text-center pt-4">
          <h4>Standard Room</h4>
          <h6>A standard room comes in the category of the hotel’s cheapest room. It is a type of single room or as two beds — this room is decorated with two queen-size beds. A standard room includes all kinds of basic facilities such as a dressing table and a private bathroom.</h6>
        </div>
      </div><!-- col -->
      <div class="col-lg-4 col-md-12 col-sm-12 order-lg-1 order-sm-1" id="column">
        <img src="{{asset('frontendtemplate/img/superior.jpg')}}" class="image pt-sm-5 pt-lg-0 pt-md-5" >
        <div class="cardtext text-center pt-4">
          <h4>Superior Room</h4>
          <h6>With facilities including free high speed WiFi, satellite/cable TV, a working area, safety deposit box, Multimedia hub and blackout curtain, our stylish Superior room offers everything you could possibly need for convenience, security, .</h6>
        </div>
      </div><!-- col -->
      <div class="col-lg-4 col-md-12 col-sm-12 order-lg-1 order-sm-1" id="column">
        <img src="{{asset('frontendtemplate/img/family4bed.jpg')}}" class="image pt-sm-5 pt-lg-0 pt-md-5">
        <div class="cardtext text-center pt-4">
          <h4>Family Room</h4>
          <h6>Our Family Suite rooms will fix you and your family if you always prefer the best of all. As the suites are second largest rooms in our hotel you could feel like you are home in the heart of Yangon with full of facilities from a three star rated boutique hotel.</h6>
        </div>
      </div><!-- col -->
    </div>
  </div>
</div>

<div class="margin"></div>
<section class="parallex">
  <div class="parallex-inner">
    <h1 class="parallex-text pl-4">FULL SERVICE SPA</h1>
    <h4 class="parallex-text2 pt-4 pl-4">Based on the theory that zones of the feet <br>correspond  to different areas of the body, <br> this treatment begins with a relaxing foot massage <br>  followed by a careful stimulation of the zones of the foot <br> to address your needs..Day spas offer the same beauty and <br> wellness services as pricier destination spas and resorts  <br> but don't require the same time commitment. According to the <br> ISPA 2002 Spa Industry Study from the International SPA Association (ISPA)</h4>
  </div>
</section>
<div class="margin"></div>


<div class="review2">
  <div class="container pt-5">
    <div class="row pt-5">
      <div class="col-lg-4 col-md-12 col-sm-12 order-lg-1 order-sm-1" id="column">
        <img src="{{asset('frontendtemplate/img/poolbar.jpg')}}" class="image ">
        <div class="cardtext text-center pt-4">
          <h4>Pool bar</h4>
          <h6>The pool bar at panpacific hotel. The place is cool. I like the newly renovated swimming pools and cavanas. The service is fantastic and highly </h6>
        </div>
      </div><!-- col -->
      <div class="col-lg-4 col-md-12 col-sm-12 order-lg-1 order-sm-1" id="column">
        <img src="{{asset('frontendtemplate/img/food.jpg')}}" class="image pt-sm-5 pt-lg-0 pt-md-5" width="300px" height="233px" >
        <div class="cardtext text-center pt-4">
          <h4>In Room Dining </h4>
          <h6>Local cuisine, International, Vegan Options, Gluten Free OptionsRoasted lamb very yummy with red wine sauce.Roast section only had lamb.</h6>
        </div>
      </div><!-- col -->
      <div class="col-lg-4 col-md-12 col-sm-12 order-lg-1 order-sm-1" id="column">
        <img src="{{asset('frontendtemplate/img/resort.jpg')}}" class="image pt-sm-5 pt-lg-0 pt-md-5">
        <div class="cardtext text-center pt-4">
          <h4>Resort</h4>
          <h6>A Resort Hotel is a is a full service lodging facility, intended primarily for vacationers and usually located in places frequented for relaxation or recreation</h6>
        </div>
      </div>
    </div>
  </div>
</div>


<div class="dining-title">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <h2>Restaurant View In Luxury Hotel</h2>
      </div>
     
      <div class="col-lg-12">
        <p  class="text-center">Offering fresh perspectives on indigenous cuisine in Singapore restaurants.</p>
        <h3 class="text-center">Cheer up at home and check out our online shop for our latest delivery options</h3>
      </div>
    </div>
  </div>
</div>

<div class="container">
  <div class="row">
    <div class="col-lg-12">
      <video class="video-player-video " width="100%" muted="muted" playsinline="playsinline" webkit-playsinline="webkit-playsinline" x-webkit-airplay="allow" poster="data:image/gif,AAAA" autoplay="autoplay" loop="loop" preload="auto" height="356.625px" style="width: 100%; height: 356.625px; margin-top: 50px;" data-width="2000" data-height="1080">
            <source src="https://videos.hyatt.com/andaz_singapore_dining.mp4" data-src="https://videos.hyatt.com/andaz_singapore_dining.mp4" type="video/mp4">
        </video>
    </div>
  </div>
</div>

@endsection