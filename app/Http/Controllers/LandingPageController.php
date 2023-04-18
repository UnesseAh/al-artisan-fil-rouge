<?php

namespace App\Http\Controllers;

use App\Models\Handicraft;
use App\Models\Subcategory;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function RedirectToLandingPageWithProductsAndCategories()
    {
        $handicrafts = Handicraft::all();
        $subcategories = Subcategory::all();

        return view('welcome', compact('handicrafts', 'subcategories'));
    }

}
