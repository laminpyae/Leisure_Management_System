<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Facility extends Model
{
    use SoftDeletes;

    protected $fillable = 
    [
    	'name'
    ];

      public function subcategories()
    {
    	return $this->belongsTo('App\Subcategory');
    }
}
