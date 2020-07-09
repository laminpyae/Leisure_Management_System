<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        return view('backend.categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend/categories/create');
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
            'name' => 'required',
            'image' => 'required|image',
            'description' => 'required'
        ]);

        // dd(gettype($request->image));
        // File Upload (photo = name from input)
        $imageName = time().'.'.$request->image->extension();

        $request->image->move(public_path('images'), $imageName);

        $filepath = 'images/'.$imageName;
        // dd($request);

        // Data Insert
        $category = new Category;
        $category->name = $request->name;
        $category->description = $request->description;
        $category->image = $filepath;
        $category->save();
        flash('Successfully Added!')->success();
        return redirect()->route('categories.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $category = Category::find($id);
        return view('backend.categories.detail', compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::find($id);
        // dd($category);
        return view('backend.categories.edit', compact('category'));
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
            'name' => 'required',
            'image' => 'required'
        ]);

        // dd($request);
          // File Upload (photo = name from input)
        if ($request->hasFile('image')) {
        
           $imageName = time().'.'.$request->image->extension();

           $request->image->move(public_path('images'), $imageName);

           $filepath = 'images/'.$imageName;

           // Delete Old Photo
           unlink($request->oldphoto);

        } else {
            $filepath = $request->oldphoto;
        }
        // Data Insert
        $category = Category::find($id);
        $category->name = $request->name;
        $category->image = $filepath;
        $category->save();

        return redirect()->route('categories.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Category::find($id);
        $category->delete();
        return redirect()->route('categories.index');
    }
}
