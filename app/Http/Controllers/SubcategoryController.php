<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Subcategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class SubcategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $subcategories = Subcategory::all();
        $categories = Category::all();

        return view('dashboard.category-subcategory', compact('subcategories' ,'categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|unique:users|max:50|max:50|regex:/^[^0-9]*$/',
            'category_id' => 'required|numeric|exists:categories,id'
        ]);

        if($validator->fails()){
            toastr()->error('Category or subcategory are not valid!');
            return Redirect::back();
        }

        $validatedData = $validator->validated();

        Subcategory::create($validatedData + ['slug' => Str::slug($validatedData['name'])]);

        return Redirect::route('create.category')->with('addSubcategory', 'Subcategory added successfully!');

    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
//    public function show(Subcategory $subcategory)
//    {
//        $subcategory = Subcategory::find($subcategory);
//
//        return $subcategory;
//
//    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Subcategory $subcategory)
    {
        return view('dashboard.edit-subcategory', ['subcategory' => $subcategory]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Subcategory $subcategory)
    {
        $validator = Validator::make($request->all(),[
            'name' => 'required|unique:users|max:50|max:50|regex:/^[^0-9]*$/',
        ]);

        $validatedData = $validator->validated();

        $subcategory->update($validatedData + ['slug' => Str::slug($validatedData['name'])]);

        return $this->index();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Subcategory $subcategory)
    {
        $name = $subcategory->name;
        $subcategory->delete();
        return Redirect::back()->with('deleteSubcategory', 'Subcategory "'. $name .'" deleted successfully!');
    }
}
