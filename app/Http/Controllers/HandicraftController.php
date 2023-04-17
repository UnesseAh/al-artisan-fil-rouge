<?php

namespace App\Http\Controllers;

use App\Models\Handicraft;
use App\Models\Subcategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class HandicraftController extends Controller
{
//    public function index()
//    {
//        $products =  Product::all();
//
//        return view('dashboard', ['products' => $products] );
//    }


    public function create()
    {
        $subcategories = Subcategory::all();

        return view('dashboard.product.create-product', ['subcategories' => $subcategories]);
    }


    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:255',
            'description' => 'required|string|max:1000',
            'price' => 'required|numeric|min:0',
            'subcategory_id' => 'required|exists:subcategories,id',
            'stock' => 'required|integer|min:0',
            'image' => 'required|image|mimes:jpeg,png,jpg',
        ],[
            'subcategory_id.required' => 'The category field is required'
        ]);

        if($validator->fails()){
            return Redirect::back()
                ->withErrors($validator)
                ->withInput();
        }

        $input = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'image/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }

        Handicraft::create($input + ['slug' => Str::slug($input['title'])]);

        $title = $request->input('title');

        toastr()->success('Product "' . $title . '" added successfully!');

        return redirect()->route('dashboard');
    }


//    public function show(Craft $product)
//    {
//
//        return view('product-page', compact('product'));
//    }


    public function edit(Handicraft $handicraft)
    {
        $subcategories  = Subcategory::all();
        return view('dashboard.product.edit-product', compact('handicraft', 'subcategories'));
    }


    public function update(Request $request, Handicraft $handicraft)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:255',
            'description' => 'required|string|max:1000',
            'price' => 'required|numeric|min:0',
            'subcategory_id' => 'required|exists:subcategories,id',
            'stock' => 'required|integer|min:0',
        ],[
            'subcategory_id.required' => 'The category field is required'
        ]);

        if($validator->fails()){
            return redirect::back()
                ->withErrors($validator)
                ->withInput();
        }

        $input = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'image/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }else{
            unset($input['image']);
        }

        $handicraft->update($input);

        $title = $request->input('title');

        toastr()->warning('Product "' . $title . '" updated successfully!');

        return redirect()->route('dashboard');
    }


    public function destroy(Handicraft $handicraft)
    {
        $title = $handicraft->title;
        toastr()->error('Product "' . $title . '" Deleted Successfully!');

        $handicraft->delete();

        return Redirect::back();
    }
}
