@extends('frontend.master')

@section('content')

	<h1 class="headerTitle text-center text-white p-2">Hotel Reservation System</h1>
					<h3 class="secTitle text-center p-2 mt-3">Booking Form</h3>
					<div class="row justify-content-center">
						<form action="#" class="mt-3 col-sm-8">
							<div class="form-group row">	
								<div class="col-sm-6">
									<span>Check-in-Date</span>
									<div class='input-group date' id='checkinDate'>
										<input type='text' name="checkinDate" class="form-control" />
										<span class="input-group-addon">
											<span class="glyphicon glyphicon-calendar btnhover"></span>
										</span>
									</div>
								</div>
								<div class="col-sm-6">
									<span>Check-out-Date</span>
									<div class='input-group date' id='checkoutDate'>
										<input type='text' name="checkoutDate" class="form-control"/>
										<span class="input-group-addon">
											<span class="glyphicon glyphicon-calendar btnhover"></span>
										</span>
									</div>
								</div>
							</div>
							<div class="form-group row">
								<div class="col-sm-6">
									<span>Room</span>
									<select name="category" class="form-control">
										<option value="">Standard Room</option>
										<option value="">Family Room</option>
										<option value="">Superior Room</option>
									</select>
								</div>
								<div class="col-sm-6">
									<span>Room Type</span>
									<select name="subcategory" class="form-control">
										<option value="">Double</option>
										<option value="">Single</option>
									</select>
								</div>
							</div>
							<div class="form-group row">
								<div class="col-sm-6">
									<span>Total Price</span>
									<input type="text" name="price" value="128000 MMK" class="form-control" disabled="disabled">
								</div>
								<div class="col-sm-6">
									<span>Phone</span>
									<input type="text" name="phone" class="form-control">
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