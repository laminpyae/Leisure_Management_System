<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Subcategory;
use App\Category;
use App\Facility;

class SubcategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subcategories = Subcategory::all();
        $facilities = Facility::all();
        return view('backend.subcategories.index', compact('subcategories', 'facilities'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        $facilities = Facility::all();
        return view('backend.subcategories.create', compact('categories', 'facilities'));
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
            'type' => 'required',
            'price' => 'required'
        ]);

        $facilities=$request->facilities;
        // Data Insert
        $subcategory = new Subcategory;
        $subcategory->type = $request->type;
        $subcategory->price = $request->price;
        $subcategory->category_id = $request->category_id;
        $subcategory->save();

        // Pivot Looping and selecting data
        foreach ($facilities as  $value) {
            $subcategory->facilities()->attach($value);
        }

        flash('Successfully Added!')->success();
        return redirect()->route('subcategories.index');
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
        $subcategory = Subcategory::find($id);
        $categories = Category::all();
        return view('backend.subcategories.edit', compact('subcategory', 'categories'));
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
         // Validation
        $request->validate([
            'type' => 'required',
            'price' => 'required'
        ]);

        // dd($request);
        // Data Insert
        $subcategory = Subcategory::find($id);
        $subcategory->type = $request->type;
        $subcategory->price = $request->price;
        $subcategory->category_id = $request->category_id;
        $subcategory->save();

        return redirect()->route('subcategories.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $subcategory = Subcategory::find($id);
        $subcategory->delete();
        return redirect()->route('subcategories.index');
    }
}
