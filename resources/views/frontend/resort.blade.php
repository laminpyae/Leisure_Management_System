@extends('frontend.indexmaster')

@section('content')
<div class="resort-banner">
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

	<div class="Content5 py-3">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<p class="text-dark text-center"> LUXURY SINGAPPORE CITY CENTRE</p>
				</div>
				<div class="col-12">
					<img src="{{asset('frontendtemplate/img/so-logo.png')}}" alt="" class="mx-auto d-block">
				</div>
				<div class="col-12">
					<h6>“Welcome to Luxury Singapore City Centre, a luxury hotel set in the heart of the central business district. Amidst the historic shophouses and tall skyscrapers of Tanjong Pagar and directly above the MRT station, discover our singular blend of French art de vivre and local sophistication.With elegant function rooms, a restaurant serving authentic French and refined Local Chinese cuisine, a tea lounge and bar and coffee bar, multiple fitness options and an outdoor pool, Luxury Singapore City Centre is a magnifique setting for work, play and relaxation in the Garden City.The sumptuous interiors are inspired by the formal gardens of France and the rich flora of Singapore. A striking whirlwind of sculpted crystal leaves, Singapour Je T’aime, celebrates your arrival while botanical motifs adorn every luxurious room and suite.„</h6>
				</div>
			</div>
		</div>
	</div><!-- Content -->
	<div class="about-resort py-5 d-sm-none d-lg-block">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-12 col-sm-12 order-sm-2 order-lg-1">
					<a href="resort1.jpg"><img src="{{asset('frontendtemplate/img/resort1.jpg')}}" alt=""></a>
				</div><!-- col -->
				<div class="col-lg-6 col-md-12 col-sm-12 order-sm-1 order-lg-2">
					<div class="resort-title px-5">
						<h3>SPREAD THE WORD</h3>
						<p>A joy that’s shared is a joy made double. Share your photos with us and tell the world about your stay @Sofitel.</p>
					</div>
				</div><!-- col -->
				<div class="col-lg-3 col-md-12 col-sm-12 order-sm-3 order-lg-3 ">
					<a href="resort5.jpg"><img src="{{asset('frontendtemplate/img/resort5.jpg')}}" alt=""></a>
				</div><!-- col -->
			</div><!-- row -->

			<div class="row py-3">
				<div class="col-lg-3 col-md-12 col-sm-12">
					<a href="resort3.jpg"><img src="{{asset('frontendtemplate/img/resort3.jpg')}}" alt="" ></a>
				</div><!-- col -->
				<div class="col-lg-3 col-md-12 col-sm-12">
					<a href="resort4.jpg"><img src="{{asset('frontendtemplate/img/resort4.jpg')}}" alt="" ></a>
				</div><!-- col -->
				<div class="col-lg-3 col-md-12 col-sm-12">
					<a href="resort2.jpg"><img src="{{asset('frontendtemplate/img/resort2.jpg')}}" alt="" ></a>
				</div><!-- col -->
				<div class="col-lg-3 col-md-12 col-sm-12">
					<a href="resort6.jpg"><img src="{{asset('frontendtemplate/img/resort6.jpg')}}" alt=""></a>			
				</div><!-- col -->
			</div><!-- row -->
		</div><!-- container -->
	</div><!-- about-resort -->


	<div class="restaurant">	
		<div class="container py-5">
			<div class="row">
				<div class="col-lg-1 col-md-1 col-sm-1 offest-md-1"></div>
				<div class="col-lg-5">
					<div class="inner">
						<img src="{{asset('frontendtemplate/img/restaurant1.jpg')}}" alt="" >
					</div>
				</div>	
				<div class="col-lg-5 pt-3">
					<h3>The Ambiance of Le Beaulieu </h3>
					<span>Restaurant</span>
					<h6>The historic charm of the Sofitel Metropole Hotel building is felt throughout the whole hotel. In sync with the purpose, each part differs a little from the other. At the Le Beaulieu Restaurant dominates the friendly feel and ageless appeal. </h6>
					<a href="">Read more<i class="fas fa-caret-right pl-3 pt-lg-5 pt-sm-2 pt-md-2"></i></a>
				</div>	
				<div class="col-lg-1 col-md-1 col-sm-1 offest-md-1"></div>

			</div>

			<div class="row pt-5">
				<div class="col-lg-1 col-md-1 col-sm-1 offest-md-1"></div>
				<div class="col-lg-5">
					<div class="inner">
						<img src="{{asset('frontendtemplate/img/restaurant2.jpg')}}" alt="" class="img-fluid">
					</div>
				</div>	
				<div class="col-lg-5 pt-1">
					<h3>Metis Restaurant, Lounge| Seminyak</h3>
					<span>Resturant</span>
					<h6>METIS promises diners something a little different, “an entirely sensory dining experience”. What this means is classic French cuisine at its best, in a stunning Balinese setting...</h6>
					<a href="">Read more<i class="fas fa-caret-right pl-3 pt-lg-5 pt-sm-2 pt-md-2"></i></a>
				</div>	
				<div class="col-lg-1 col-md-1 col-sm-1 offest-md-1"></div>

			</div><!-- row -->

			<div class="row py-5">
				<div class="col-lg-1 col-md-1 col-sm-1 offest-md-1"></div>
				<div class="col-lg-5">
					<div class="inner">
						<img src="{{asset('frontendtemplate/img/restaurant3.jpg')}}" alt=""  class="img-fluid">
					</div>
				</div>	
				<div class="col-lg-5 pt-2">
					<h3>Sardine| Jalan Petitinget</h3>
					<span>Resturant(Seafood)</span>
					<h6>A visual feast, Sardine promises an incredibly individual fine-dining experience. The expansive bamboo dining hall and al fresco dining areas look out to stunning rice paddies which are still working fields. The fresh, modern design features,</h6>
					<a href="">Read more<i class="fas fa-caret-right pl-3 pt-lg-5 pt-sm-2 pt-md-2"></i></a>
				</div>	
				<div class="col-lg-1 col-md-1 col-sm-1 offest-md-1"></div>
			</div><!-- row -->
		</div><!-- container -->
	</div>


	<div class="resort-location text-center pt-5">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<p>LOCATION</p>
				</div>
				<div class="col-12">
					<img src="{{asset('frontendtemplate/img/so-logo.png')}}" alt="" class="mx-auto d-block">
				</div>
				<div class="col-12">
					<p>Luxury Singapore City Centre rises above the Tanjong Pagar MRT station, a prime location from which to contemplate and explore the Garden City.</p>
					<h6>Chinatown – 7 minutes walk</h6>
					<h6>Raffles Place – 1 stop via MRT East-West Line</h6>
					<h6>Changi Airport – 14 stops via MRT East-West Line</h6>
					<h6>Orchard Road – 5 stops via MRT North-South Line</h6>
					<h6>Malay Heritage Village (Bugis) – 3 stops via MRT East-West Line</h6>
					<h6>Sentosa Island – 7 stops by public bus</h6>
					<h6>Gardens By The Bay- 3 stops by public bus</h6>
					<h6>Parking facilities are available at Guoco Tower at prevailing car park fees, surcharge may apply for selected dates.
					</h6>
				</div>
			</div>
		</div>
	</div>

@endsection