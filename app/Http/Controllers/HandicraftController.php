<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Handicraft;
use App\Models\Subcategory;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class HandicraftController extends Controller
{
//    public function showAllHandicrafts()
//    {
//        $handicrafts =  Handicraft::all();
//
//        return view('dashboard', ['products' => $handicrafts] );
//    }


    public function createHandicraft()
    {

        $subcategories = Subcategory::all();
        $categories = Category::all();

        return view('dashboard.product.create-product', ['subcategories' => $subcategories, 'categories' => $categories]);
    }


    public function storeHandicraft(Request $request)
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

        $userId = Auth::user()->id;

        Handicraft::create($input + ['slug' => Str::slug($input['title']), 'user_id' => $userId]);

        $title = $request->input('title');

        toastr()->success('Product "' . $title . '" added successfully!');

        return redirect()->route('dashboard');
    }


    public function showOneHandicraft(Handicraft $handicraft)
    {
         $relatedProducts = Handicraft::where('subcategory_id', $handicraft->subcategory_id)->latest()->take(3)->get();
        return view('product-page', compact('handicraft', 'relatedProducts'));
    }


    public function editHandicraft(Handicraft $handicraft)
    {
        $subcategories  = Subcategory::all();
        return view('dashboard.product.edit-product', compact('handicraft', 'subcategories'));
    }


    public function updateHandicraft(Request $request, Handicraft $handicraft)
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

        $userId = Auth::user()->id;

        $handicraft->update($input + ['user_id' => $userId]);

        $title = $request->input('title');

        toastr()->warning('Product "' . $title . '" updated successfully!');

        return redirect()->route('dashboard');
    }


    public function deleteHandicraft(Handicraft $handicraft)
    {
        $title = $handicraft->title;
        toastr()->error('Product "' . $title . '" Deleted Successfully!');

        $handicraft->delete();

        return Redirect::back();
    }


}
