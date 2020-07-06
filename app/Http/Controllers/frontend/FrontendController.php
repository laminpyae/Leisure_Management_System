<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function bookingform($value='')
    {
        // $subcategory = Subcategory::where('category_id', $id)->get();
    	return view('frontend.bookingform');
    }
}
