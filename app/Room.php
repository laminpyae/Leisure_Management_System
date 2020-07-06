<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Room extends Model
{
    use SoftDeletes;

    protected $fillable = 
    [
    	'room_no', 'status', 'subcategory_id'
    ];

       public function subcategory()
    {
    	return $this->belongsTo('App\Subcategory');
    }

        public function bookings()
    {
    	return $this->belongsTo('App\Booking');
    }
}
