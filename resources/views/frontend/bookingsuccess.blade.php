@extends('frontend.master')

@section('content')

<div class="card-body">
    <h1 class="headerTitle text-center text-white p-2">Hotel Reservation System</h1>
    <h3 class="secTitle text-center p-2 mt-3">Booking Success</h3>
    <h1 class="secTitle text-center p-2 mt-3">Thank you for your booking</h1>
    <div class="text-center">
    	<a href="{{route('index')}}" class="btn btn-gold mt-5">Back to Index</a>
    </div>
</div>

@endsection