<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Booking extends Model
{
    use SoftDeletes;

    protected $fillable = [
    	'reservation_no', 'checkin_date', 'checkout_date', 'total_charges', 'customer_id'
    ];

      public function rooms()
	{
		return $this->belongsToMany('App\Room','booking_details','booking_id','room_id')
			->withPivot('qty')
			->withTimestamps();
	}

	public function user()
	{

		return $this->belongsTo('App\User', 'customer_id');

	}
}
