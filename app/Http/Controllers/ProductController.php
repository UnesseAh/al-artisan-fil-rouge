<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Subcategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    public function index()
    {
        $products =  Product::all();

        return view('dashboard', ['products' => $products] );
    }


    public function create()
    {
        $subcategories = Subcategory::all();

        return view('dashboard.product.create-product', ['subcategories' => $subcategories]);
    }


    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description'  => 'required',
            'price'  => 'required',
            'old_price' => 'required',
            'subcategory_id' => 'required',
            'stock' => 'required',
            'image' => 'required',
        ]);

        $input = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'image/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }

        Product::create($input + ['slug' => Str::slug($input['title'])]);

        $title = $request->input('title');
        toastr()->success('Product "' . $title . '" added successfully!');

        return redirect()->route('dashboard');
    }


    public function show(Product $product)
    {

        return view('product-page', compact('product'));
    }


    public function edit($id)
    {
        $product = Product::find($id);
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
        $product = Product::find($id);
        $product->update($validateData);

        $title = $request->input('title');
        toastr()->warning('Product "' . $title . '" updated successfully!');

        $products =  Product::all();
        return view('dashboard', ['products' => $products] );
    }


    public function destroy(Product $product)
    {
        $title = $product->title;
        toastr()->error('Product "' . $title . '" Deleted Successfully!');

        $product->delete();
        return Redirect::back();
    }
}
