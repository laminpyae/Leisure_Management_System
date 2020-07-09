<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Luxury Hotel</title>
  <!-- CSS -->
  <link rel="stylesheet" href="{{asset('frontendtemplate/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('frontendtemplate/style.css')}}">
  <link rel="stylesheet" href="{{asset('frontendtemplate/font.css')}}">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('frontendtemplate/fontawsome/css/all.min.css')}}">
  <!-- JS -->
   <script type="text/javascript" src="{{asset('frontendtemplate/js/jquery.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('frontendtemplate/js/bootstrap.bundle.min.js')}}"></script>
  
  <style type="text/css" media="screen">
    nav.scrolled {
      background-color: #FFFFE0;
    }

    nav.scrolled #navigation-item a {
      color: #000;
    }

    nav.scrolled #navigation-item a:hover {
      color: #ffff;
    }
  </style>
  
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light fixed-top">
    <a href="{{route('index')}}"><img src="{{asset('frontendtemplate/img/logo.png')}}" alt="" width="80px" height="50px"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto" id="myNav">
       <li class="nav-item" id="navigation-item">
        <a class="nav-link linkcolor" href="{{route('accomodation')}}">Accommodation </a>
      </li>
       <li class="nav-item" id="navigation-item">
        <a class="nav-link linkcolor" href="{{route('wedding')}}">Wedding </span></a>
      </li>
       <li class="nav-item " id="navigation-item">
        <a class="nav-link linkcolor" href="{{route('spafittness')}}">Spa&fitness</a>
      </li> 
      <li class="nav-item" id="navigation-item">
        <a class="nav-link linkcolor" href="{{route('resort')}}">Resort</a>
      </li>
      <!-- Login/Logout -->
     <?php if (Auth::user()): ?>
        <li class="nav-item" id="navigation-item">
        <a class="nav-link linkcolor" href="{{route('logout')}}" onclick="event.preventDefault();
        document.getElementById('logout-form').submit();">Logout</a>
      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
             @csrf
        </form>
      </li>
      <?php else: ?>
       <li class="nav-item" id="navigation-item">
        <a class="nav-link linkcolor" href="{{route('login')}}">Login </a>
      </li>
     <?php endif ?>
    </ul>
  </div>
</nav>
    @yield('content')

<!-- footer -->
<footer class="mainfooter" role="contentinfo">
  <div class="footer-middle">
    <a href="#top" class="d-block text-center"><i class="fas fa-sort-up fa-2x"></i></a>
  <div class="container">
     <div class="row">
      <div class="col-md-3 col-sm-6">
        <!--Column1-->
        <div class="footer-pad py-5">
          <h4>About</h4>
          <hr>
          <ul class="list-unstyled">
            <li><a href="#">Become a Member Hotel </a></li>
            <li><a href="#">partners</a></li>
            <li><a href="#">Sign Up</a></li>
            <li><a href="#">News and Updates</a></li>
            <li><a href="#">Member Portal</a></li>
          </ul>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <!--Column1-->
        <div class="footer-pad py-5">
          <h4>Contact</h4>
          <hr>
          <ul class="list-unstyled">
            <li><a href="#">Call Us</a></li>
            <li><a href="#">Email Us</a></li>
            <li><a href="#">Manage Booking</a></li>
            <li><a href="#">Global Offices</a></li>
          </ul>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <!--Column1-->
        <div class="footer-pad py-5">
          <h4>Quick Links</h4>
          <hr>
          <ul class="list-unstyled">
            <li><a href="{{route('accomodation')}}">Accomodation</a></li>
            <li><a href="{{route('wedding')}}">Wedding</a></li>
            <li><a href="{{route('spafittness')}}">Spa&Fitness</a></li>
            <li><a href="{{route('resort')}}">Resorts</a></li>
            <li>
              <a href="#"></a>
            </li>
          </ul>
        </div>
      </div>
      <div class="col-md-3 py-5 ">
        <h4>Follow Us</h4>
        <hr>
            <ul class="social-network social-circle ">
              <div class="icon pt-4">
                 <li><a href="#" class="icoLinkedin" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                 <li><a href="#" class="icoLinkedin" title="google"><i class="fab fa-pinterest"></i></a></li>
                 <li><a href="#" class="icoLinkedin" title="youtube"><i class="fab fa-youtube"></i></i></a></li>
              </div>
            </ul>       
    </div>
    </div>
  <div class="row">
    <div class="col-md-12 copy">
      <p class="text-center">&copy; Copyright 2020 - LUXURY HOTEL.  All rights reserved.</p>
    </div>
  </div>
  </div>
  </div>
</footer>
<!-- footer end -->

<script type="text/javascript">
  
  // Scroll Change Nav Background
  $(window).scroll(function() {
    $('nav').toggleClass('scrolled', $(this).scrollTop()>0);
  });

// Get the container element
var btnContainer = document.getElementById("navbarSupportedContent");

// Get all buttons with class="btn" inside the container
var btns = btnContainer.getElementsByClassName("nav-item");

// Loop through the buttons and add the active class to the current/clicked button
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function() {
    var current = document.getElementsByClassName("active");

    // If there's no active class
    if (current.length > 0) {
      current[0].className = current[0].className.replace(" active", "");
    }

    // Add the active class to the current/clicked button
    this.className += " active";
  });
}

</script>

</body>
</html>

