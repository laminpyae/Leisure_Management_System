<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Subcategory extends Model
{
    use SoftDeletes;

    protected $fillable = 
    [
    	'type', 'price', 'category_id'
    ];

      public function category()
    {
    	return $this->belongsTo('App\Category');
    }

    public function facilities()
	{
		return $this->belongsToMany('App\Facility','subcategory_facility','subcategory_id','facility_id')
			->withTimestamps();
	}

     public function rooms() 
    {
    	return $this->hasMany('App\Room');
    }
}
