<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Booking;
use App\Subcategory;
use App\User;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    // Customer cannot go into booking index
    public function __construct()
    {
        $this->middleware('role:admin')->only('index');

    }

    public function index()
    {
        $bookings = Booking::orderBy('id', 'desc')->get();

        $users = User::all();
        return view('backend.bookings.index', compact('bookings', 'users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        // Validation
        $request->validate([
            'checkinDate' => 'required',
            'checkoutDate' => 'required',
            'subcategory' => 'required',
            'totalprice' => 'required'
        ]);
        // dd($request);
        $subcategory=$request->subcategory;
        // Data Insert
        $bookings = new Booking;
        $bookings->reservation_no = uniqid();
        $bookings->checkin_date = $request->checkinDate;
        $bookings->checkout_date = $request->checkoutDate;
        $bookings->total_charges = $request->totalprice;
        $bookings->customer_id = $request->customer_id;
        $bookings->save();

        // return Response()->json([
        //     'status'=>'Booking Successful!'
        // ]);
        return view('frontend.bookingsuccess');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $booking = Booking::find($id);
        $booking->delete();
        return redirect()->route('bookings.index');
    }
}
