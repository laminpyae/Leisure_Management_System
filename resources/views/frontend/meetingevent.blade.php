@extends('frontend.indexmaster')

@section('content')
<div class="Meeting-banner">
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

<!-- card1 -->
<div class="container">
  <div class="row">
    <div class="col-12"> 
      <div class="Meeting-title text-center py-3">
        <h3>Meeting &Events</h3>
      </div>
    </div><!-- col -->
    <div class="col-12">
        <img src="{{asset('frontendtemplate/img/so-logo.png ')}}" alt="" class="mx-auto d-block">
    </div>
    <div class="col-lg-4 col-md-6 col-sm-12 pt-5">
     <div class="inner">
        <img src="{{asset('frontendtemplate/img/meeting4.jpg')}}" alt="" class="card-img-top">
     </div>
      <div class="card-body">
        <h4>PLANNER REWARDS</h4>
        <h6>Our latest offers can help you get ahead on planning your next meeting.</h6>
      </div><!-- card-body -->
    </div><!-- col -->
       <div class="col-lg-4 col-md-6 col-sm-12 pt-sm-5 pt-lg-5 pt-md-5">
      <div class="inner">
        <img src="{{asset('frontendtemplate/img/meeting5.jpg')}}" alt="" class="card-img-top">
      </div>
      <div class="card-body">
        <h4>PLANNER TOOLS</h4>
        <h6>LWe believe in the power of planning, that's why we offer exclusive rewards for meeting planners.</h6>
      </div><!-- card-body -->
    </div><!-- col -->
       <div class="col-lg-4 col-md-12 col-sm-12 pt-sm-5 pt-lg-5 pt-md-5">
        <div class="inner">
            <img src="{{asset('frontendtemplate/img/meeting6.jpg')}}" alt="" class="card-img-top">
        </div>
      <div class="card-body">
        <h4>CURRENT OFFERS</h4>
        <h6>We equip you with all of the tools you need to plan a successful meeting.</h6>
      </div><!-- card-body -->
    </div><!-- col -->
  </div><!-- row -->
</div>  <!-- container -->


<div class="meeting-slider">
  <div class="container">
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="row">
            <div class="col-lg-7">
              <img src="{{asset('frontendtemplate/img/meeting1.jpg')}}" alt="" style="">
            </div>
            <div class="col-lg-5">
              <div class="meeting-text mt-5 d-sm-none d-lg-block " >
                <span class="text-center d-block pb-2">One-Of-The-Kind-Hotels</span>
                <h4>Signature Events for successful Meetings</h4>
                <h6>Break away from the ordinary and delight attendees with the ultimate Monaco beach party or test their resourcefulness with a scavenger hunt in historic Boston.</h6>
              </div><!-- text -->
            </div><!-- col -->
         </div><!-- row -->
      </div><!-- carousel-item -->
       <div class="carousel-item">
          <div class="row">
             <div class="col-lg-7">
              <img src="{{asset('frontendtemplate/img/meeting2.jpg')}}" alt="" >
            </div>
            <div class="col-lg-5">
              <div class="meeting-text mt-5 d-sm-none d-lg-block" >
                <span class="text-center d-block pb-2">Eco-Friendly-Meetings</span>
                <h4>ustainable Meetings Make a Difference</h4>
                <h6>Our Eco-Meet option helps you save the planet while conducting business and creating unforgettable experiences for your guests.</h6>
              </div><!-- text -->
            </div><!-- col -->
         </div><!-- row -->
        </div><!-- carousel-item -->
        <div class="carousel-item">
          <div class="row">
            <div class="col-lg-7">
              <img src="{{asset('frontendtemplate/img/meeting3.jpg')}}" alt="" >
            </div>
            <div class="col-lg-5">
              <div class="meeting-text mt-5 d-sm-none d-lg-block" >
                <span class="text-center d-block pb-2">Delight-the-Senses</span>
                <h4>Breaks, Dinners and Social Hours</h4>
               <h6>Treat attendees to healthy snacks, a customized menu for working lunches or a celebratory social hour and Our catering team offers</h6>
              </div><!-- text -->
            </div><!-- col -->
          </div><!-- row -->
        </div><!-- carousel-item -->
      </div><!-- inner --> 
      <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
       <i class="fas fa-angle-left text-dark fa-3x"></i>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
       <i class="fas fa-angle-right text-dark fa-3x"></i>
        <span class="sr-only">Next</span>
      </a>
    </div><!-- carouselExampleControls -->
  </div><!-- container -->
</div><!-- meeting-slider -->

<div class="about-meeting">
  <div class="container">
   <div class="row pt-3">
        <div class="col-12-5 text-center">
          <h3>Effortless Planning for Attendees - Group Reservations</h3>
          <h6>Invite everyone to your ceremony and reception and enjoy stress-free planning with our GroupMAX™ by Passkey reservation tool. Complimentary and convenient, you can customize the tool for your event. Your guests can reserve their rooms online with an easy-to-use portal. And you'll receive up-to-the-minute information and reminders.</h6>
        </div><!-- col -->
      </div><!-- row -->
  </div><!-- container -->
</div><!-- about-meeting -->
<div class="margin1"></div>
<section class="parallex1">
  <div class="parallex-inner1">
    <h1 class="parallex-text3 pl-4">Effortless Meeting Planning</h1>
    <h4 class="parallex-text4 pt-4 pl-4">Successful meetings, whether you’re inking a deal or staging <br> an international conference, begin with an easy-to-use reservation system. <br> Experienced meeting planners value the ability to monitor reservations and<br> manage room lists from their phone. GroupMAX™ is a customized tool for <br> stress-free planning. This interactive system takes the worry out of getting the right <br> information to the right people on time. From reviewing reports <br>to email alerts for crucial event milestones, you’ll wonder how you ever managed without it.</h4>
  </div>
</section>
<div class="margin1"></div>

<div class="container">
  <div class="row">
     <div class="col-12"> 
    <div class="Meeting-title text-center pb-3 ">
      <h3>Events &Planner</h3>
    </div>
  </div><!-- col -->
   <div class="col-12">
      <img src="{{asset('frontendtemplate/img/so-logo.png ')}}" alt="" class="mx-auto d-block">
  </div>
    <div class="col-lg-6 pt-5">
      <div class="card" style="width: 31rem;">
        <div class="inner">
          <img src="{{asset('frontendtemplate/img/meeting7.jpg')}}" class="card-img-top" alt="...">
        </div><!-- inner -->
        <div class="card-body">
          <h4>Rewards for the planner</h4>
          <h6>OReceive special benefits for bringing people together—earn points toward free nights, room upgrades and future events.</h6>
        </div><!-- card-body -->
      </div><!-- card -->
    </div><!-- col -->
    <div class="col-lg-6 pt-5">
      <div class="card" style="width: 31rem;">
        <div class="inner">
          <img src="{{asset('frontendtemplate/img/meeting8.jpg')}}" class="card-img-top" alt="...">
        </div><!-- inner -->
        <div class="card-body">
         <h4>Event Planner Tools</h4>
         <h6>Our specialized tools help you plan every detail of your next event.</h6>
        </div><!-- card-body -->
      </div><!-- card -->
    </div><!-- col -->
  </div><!-- row -->
</div><!-- container -->

@endsection