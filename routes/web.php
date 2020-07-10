<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('frontend\FrontendController@index');
// });

Route::middleware('role:admin')->group( function() {

	Route::resource('categories', 'backend\CategoryController');

	Route::resource('subcategories', 'backend\SubcategoryController');

	Route::resource('facilities', 'backend\FacilityController');

	Route::resource('rooms', 'backend\RoomController');

	Route::resource('users', 'backend\UserController');

});

Route::resource('bookings', 'backend\BookingController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::middleware('auth')->group(function() {
Route::get('bookingform/{id}', 'frontend\FrontendController@bookingform')->name('bookingform');
});


Route::get('accomodation', 'frontend\FrontendController@accomodation')->name('accomodation');

Route::get('resort', 'frontend\FrontendController@resort')->name('resort');

Route::get('spafittness', 'frontend\FrontendController@spafittness')->name('spafittness');

Route::get('wedding', 'frontend\FrontendController@wedding')->name('wedding');

Route::get('roomdetail/{id}', 'frontend\FrontendController@roomdetail')->name('roomdetail');

Route::get('/', 'frontend\FrontendController@index')->name('index');

Route::get('bookingsuccess', 'frontend\FrontendController@bookingsuccess')->name('bookingsuccess');

Route::get('meetingevent', 'frontend\FrontendController@meetingevent')->name('meetingevent');

