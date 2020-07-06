<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Userinfo extends Model
{
    use SoftDeletes;

    protected $fillable = 
    [
    	'profile', 'phone', 'nric', 'user_id'
    ];

      public function User()
    {
    	return $this->belongsTo('App\User');
    }
}
