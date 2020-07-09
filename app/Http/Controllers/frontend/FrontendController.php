<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Category;
use App\Subcategory;
use App\User;

class FrontendController extends Controller
{
	public function accomodation($value='')
	{
        $categories = Category::all();
		return view('frontend.accomodation', compact('categories'));
	}

    public function roomdetail($id)
    {
        $category = Category::find($id);
        // dd($category);
        return view('frontend.roomdetail', compact('category'));
    }

    public function bookingform($id)
    {  
        $user = User::find($id);
        $category = Category::find($id);
        $subcategories = Subcategory::where('category_id', $id)->get();
    	return view('frontend.bookingform', compact('category', 'subcategories', 'user'));
    }

    public function resort($value='')
    {
    	return view('frontend.resort');
    }

    public function spafittness($value='')
    {
    	return view('frontend.spa_fittness');
    }

    public function wedding($value='')
    {
    	return view('frontend.wedding');
    }

    public function index($value='')
    {
        return view('frontend.index');
    }

}
