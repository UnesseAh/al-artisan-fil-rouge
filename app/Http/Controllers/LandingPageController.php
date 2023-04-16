<?php

namespace App\Http\Controllers;

use App\Models\Craft;
use App\Models\Subcategory;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function RedirectToLandingPageWithProductsAndCategories()
    {
        $products = Craft::all();
        $subcategories = Subcategory::all();

        return view('welcome', compact('products', 'subcategories'));
    }

}
