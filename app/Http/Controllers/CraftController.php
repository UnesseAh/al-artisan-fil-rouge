<?php

namespace App\Http\Controllers;

use App\Models\Craft;
use App\Models\Subcategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class CraftController extends Controller
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

        Craft::create($input + ['slug' => Str::slug($input['title'])]);

        $title = $request->input('title');
        toastr()->success('Product "' . $title . '" added successfully!');

        return redirect()->route('dashboard');
    }


    public function show(Craft $product)
    {

        return view('product-page', compact('product'));
    }


    public function edit($id)
    {
        $product = Craft::find($id);
        $subcategories  = Subcategory::all();
        return view('dashboard.product.edit-product', compact('product', 'subcategories'));

    }


    public function update(Request $request, $id)
    {
        $validateData = $request->validate([
            'title' => 'required',
            'description'  => 'required',
            'price'  => 'required',
            'old_price' => 'required',
            'subcategory_id' => 'required'
        ]);
        $product = Craft::find($id);
        $product->update($validateData);

        $title = $request->input('title');
        toastr()->warning('Product "' . $title . '" updated successfully!');

        $products =  Craft::all();
        return view('dashboard', ['products' => $products] );
    }


    public function destroy(Craft $product)
    {
        $title = $product->title;
        toastr()->error('Product "' . $title . '" Deleted Successfully!');

        $product->delete();
        return Redirect::back();
    }
}
