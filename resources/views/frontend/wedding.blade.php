@extends('frontend.indexmaster')

@section('content')

<div class="wedding-banner">
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
<div class="weddingtitle">
  <div class="container">
  <div class="row">
    <div class="col-lg-12">
      <h2 class="text-center pb-2">Wedding</h2>
    </div>
    <div class="col-sm-12">
      <img src="{{asset('frontendtemplate/img/so-logo.png')}}" alt="" class="mx-auto d-block">
    </div>
    <div class="col-lg-12">
      <h4>Dream weddings in Singapore</h4>
      <h5> Our Wedding Specialists will walk with you every step of the way to realize your dream wedding, while our Culinary Team present you with personalized menus designed to delight your guests..</h5>
    </div>
  </div>
</div>

</div>


<div class="wedding-theme pt-4">
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <div class="card" style="width: 31rem;">
          <div class="inner">
            <img src="{{asset('frontendtemplate/img/weddingtheme1.jpg')}}" class="card-img-top" alt="...">
          </div>
          <div class="card-body">
           <div class="card-text">
             <p>For an intimate banquet, the Atrium Ballroom offers a seating capacity of 450 people.   <br> <span id="dots"></span><span id="more">Price Range (per table): $1,164 - $1,986 <br> Number of Tables: 45 - 320Rectangular <br>Pillar-less <br>Average ceiling height (Atrium Ballroom) and high ceiling (Fairmont and Stamford Ballroom)</span></p>
             <button onclick="myFunction()" id="myBtn" class="">Read more</button>
           </div>
          </div>
        </div>
      </div>
       <div class="col-lg-6">
        <div class="card" style="width: 31rem;">
          <div class="inner">
            <img src="{{asset('frontendtemplate/img/weddingtheme4.jpg')}}" class="card-img-top" alt="...">
          </div>
          <div class="card-body">
           <div class="card-text">
             <p> For an experience like no other, the Windows East and Windows West ballrooms.. <span id="dots"></span><span id="more">Price Range (per table): $1,481 - $1,751 <br> Number of Tables: 15 - 32Rectangular <br>Pillar-less <br>Average ceiling height (Atrium Ballroom) and high ceiling (Fairmont and Stamford Ballroom)</span></p>
             <button onclick="myFunction()" id="myBtn" class="">Read more</button>
           </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="wedding-theme">
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <div class="card" style="width: 31rem;">
          <div class="inner">
            <img src="{{asset('frontendtemplate/img/weddingtheme3.jpg')}}" class="card-img-top" alt="...">
          </div>
          <div class="card-body">
           <div class="card-text">
             <p>The elegant John Jacob Ballroom is the ideal venue for your wedding because of its column-free structure .. <span id="dots">...</span><span id="more">PPrice Range (per table): $1,624 - $2,340 <br> Number of Tables: 42<br> Rectangular <br>Pillar-less <br>High ceiling</span></p>
             <button onclick="myFunction()" id="myBtn" class="">Read more</button>
           </div>
          </div>
        </div>
      </div>
       <div class="col-lg-6">
        <div class="card" style="width: 31rem;">
          <div class="inner">
            <img src="{{asset('frontendtemplate/img/weddingtheme2.jpg')}}" class="card-img-top" alt="...">
          </div>
          <div class="card-body">
           <div class="card-text">
             <p>The Village Hotel Albert Court has always been a unique wedding venue for its restored pre-war shop house ..<span id="dots">...</span><span id="more">Price Range (per person): from $68<br> Number of Tables: 12 <br>Rectangular <br>Pillar-less <br>Average ceiling height</span></p>
             <button onclick="myFunction()" id="myBtn" class="">Read more</button>
           </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="weddingtitle mt-5">
  <div class="container">
  <div class="row">
    <div class="col-lg-12">
      <h2 class="text-center pt-5">BATTERIES AND MEMORY CARDS</h2>
    </div>
    <div class="col-lg-12 pt-3">
      <h5>Weddings are a once in a lifetime (hopefully!) occasion, and a day that the bride and groom will cherish forever. Wedding photos play a large part of this, but this can also put a huge amount of pressure on the photographer - missing a shot simply isn't an option..</h5>
    </div>
  </div>
</div>
</div>

<div class="wedding-slider mt-5">
  <div class="container">
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="row">
            <div class="col-3"> <img src="{{asset('frontendtemplate/img/wedding1.jpg')}}" class="d-block w-100" alt="..."></div>
            <div class="col-3"> <img src="{{asset('frontendtemplate/img/wedding2.jpg')}}" class="d-block w-100" alt="..."></div>
            <div class="col-3"> <img src="{{asset('frontendtemplate/img/wedding7.jpg')}}" class="d-block w-100" alt="..."></div>
            <div class="col-3"> <img src="{{asset('frontendtemplate/img/wedding4.jpg')}}" class="d-block w-100" alt="..."  ></div>
            </div>
         </div>
       <div class="carousel-item">
            <div class="row">
            <div class="col-3"> <img src="{{asset('frontendtemplate/img/wedding5.jpg')}}" class="d-block w-100" alt="..." ></div>
            <div class="col-3"> <img src="{{asset('frontendtemplate/img/wedding6.jpg')}}" class="d-block w-100" alt="..." ></div>
            <div class="col-3"> <img src="{{asset('frontendtemplate/img/wedding3.jpg')}}" class="d-block w-100" alt="..."></div>
            <div class="col-3"> <img src="{{asset('frontendtemplate/img/wedding8.jpg')}}" class="d-block w-100" alt="..." ></div>
        </div>
      </div>
    </div>

      <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon bg-dark" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon bg-dark" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>
</div>

<div class="weddingtitle pt-5">
  <div class="container">
  <div class="row">
    <div class="col-lg-12">
      <h2 class="text-center py-5">Wedding Table Set Up Design</h2>
    </div>
  </div>
</div>
</div>

<div class="Dinner-design mt-5">
  <div class="container">
    <div class="row">
      <div class="col-lg-3 col-md-6 col-sm-12 order-lg-1 order-md-1 order-sm-1">
        <img src="{{asset('frontendtemplate/img/dinner.jpg')}}" alt="" class="img-fluid">
      </div>
      <div class="col-lg-3 col-md-6 col-sm-12 order-lg-1 order-md-1 order-sm-1">
        <h6>When choosing your reception menu, it's tempting to offer only your favorite foods for appetizers, entrées, and dessert. In reality, though, a handful of wedding guests</h6>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-12 order-lg-1 order-md-1 order-sm-1">
        <img src="{{asset('frontendtemplate/img/dinner2.jpg')}}" alt="" class="img-fluid">
      </div>
      <div class="col-lg-3 col-md-6 col-sm-12 order-lg-1 order-md-1 order-sm-1">
        <h6>When it became clear that we were doing a small wedding, I knew that a winter dinner party wedding was exactly what I wanted. </h6>
      </div>
    </div>
    <div class="row py-5">
      <div class="col-lg-3 col-md-6 col-sm-12 order-lg-1 order-md-1 order-sm-1">
        <img src="{{asset('frontendtemplate/img/dinner3.jpg')}}" alt="" class="img-fluid">
      </div>
      <div class="col-lg-3 col-md-6 col-sm-12 order-lg-1 order-md-1 order-sm-1">
        <h6>Picking your wedding menu can be an overwhelming task, especially when there are so many tasty options to choose from. </h6>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-12 order-lg-1 order-md-1 order-sm-1 mt-2">
        <img src="{{asset('frontendtemplate/img/dinner4.jpg')}}" alt="" class="img-fluid">
      </div>
      <div class="col-lg-3 col-md-6 col-sm-12 order-lg-1 order-md-1 order-sm-1">
        <h6>For anyone who has ever attended a wedding or plan party of their own, an appetizing wedding menu is arguably the most critical detail to any successful reception. </h6>
      </div>
    </div>
  </div>
</div>

@endsection