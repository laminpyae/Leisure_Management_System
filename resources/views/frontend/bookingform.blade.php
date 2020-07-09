@extends('frontend.master')

@section('content')

<h1 class="headerTitle text-center text-white p-2">Hotel Reservation System</h1>
			<h3 class="secTitle text-center p-2 mt-3">Booking Form</h3>
				<div class="row justify-content-center">
						<form action="{{route('bookings.store')}}" method="POST" class="mt-3 col-sm-8">
							@csrf
							<div class="form-group row">
								<div class="col-sm-6">
									<span></span>
								</div>
							</div>
							<div class="form-group row">	
								<div class="col-sm-6">
									<span>Checkin Date</span>
									<!-- <div class='input-group date' id='checkinDate'>
										<input type='text' name="checkinDate" class="form-control" />
										<span class="input-group-addon">
											<span class="glyphicon glyphicon-calendar btnhover"></span>
										</span>
									</div> -->
									<input type="text" name="checkinDate" id="checkinDate" class="form-control">
								</div>
								<div class="col-sm-6">
									<span>Checkout Date</span>
									<!-- <div class='input-group date' id='checkoutDate'>
										<input type='text' name="checkoutDate" class="form-control"/>
										<span class="input-group-addon">
											<span class="glyphicon glyphicon-calendar btnhover"></span>
										</span>
									</div> -->
									<input type="text" name="checkoutDate" id="checkoutDate" class="form-control">
								</div>
							</div>
							<div class="form-group row">
								<div class="col-sm-6">
									<span>Room</span>
									<input type="text" name="category" id="category" value="{{$category->name}}" class="form-control" disabled="disabled">
								</div>
								<div class="col-sm-6">
									<span>Room Type</span>
									<select name="subcategory" class="form-control getsub" >
										@foreach($subcategories as $row)
										<option value="{{$row->id}}" data-price="{{$row->price}}">{{$row->type}}</option>
										@endforeach
									</select>
								</div>
							</div>
							<div class="form-group row">
								<div class="col-sm-6">
									<span>Total Price (MMK)</span>
									<input type="text" name="totalprice" id="price" value="" class="form-control" readonly="readonly">
								</div>
								<div class="col-sm-6">
									<span>Customer Name</span>
									<input type="text" value="{{Auth::user()->name}}" class="form-control" disabled="disabled">
									<input type="hidden" name="customer_id" value="{{Auth::user()->id}}">
								</div>
							</div>
							<div class="form-group row">
								<div class="col-sm-12">
									<span>Comment</span>
									<textarea name="note" cols="30" rows="5" class="form-control"></textarea>
								</div>
							</div>
							<div class="form-group row">
								<div class="col-sm-4"></div>
								<div class="col-sm-8">
									<input type="submit" value="Book Now" class="btn btn-gold px-4">
								</div>
							</div>
						</form>
					</div>

@endsection
@section('script')

<script>
	$(document).ready(function() {
		$("#checkinDate").datepicker({
			minDate: 0,
			maxDate: '+1Y+6M',
			onSelect: function(dateStr) {
		    var min = $(this).datepicker('getDate'); // Get selected date
		    $("#checkoutDate").datepicker('option', 'minDate', min || '0'); // Set other min, default to today
		}
		});

		$("#checkoutDate").datepicker({
			minDate: '0',
			maxDate: '+1Y+6M',
			onSelect: function(dateStr) {
		    var max = $(this).datepicker('getDate'); // Get selected date
		    $('#datepicker').datepicker('option', 'maxDate', max || '+1Y+6M'); // Set other max, default to +18 months
		    var start = $("#checkinDate").datepicker("getDate");
		    var end = $("#checkoutDate").datepicker("getDate");
		    var days = (end - start) / (1000 * 60 * 60 * 24);
		    // alert(days);

		    $('.getsub').change(function(){
			var price=$(this).children('option:selected').data('price');
			// alert(price);
			if(days > 0) {
				var total = price * days;
				// alert(total);
				$('#price').val(total);
			} else {
				$('#price').val(price);
			}
			})
		}
		});


		// Price Change
		// $('.getsub').change(function(){
		// 	var price=$(this).children('option:selected').data('price');
		// 	// alert(price)
		// 	$('#price').val(price+' MMK ');
		// })

	})

</script>
@endsection