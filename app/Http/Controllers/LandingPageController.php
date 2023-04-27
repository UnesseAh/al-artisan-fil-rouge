<?php

namespace App\Http\Controllers;

use App\Models\Handicraft;
use App\Models\Subcategory;
use App\Models\User;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function RedirectToLandingPageWithProductsAndCategoriesAndArtisans()
    {
        $artisans = User::where('role_id', 2)->get();
        $handicrafts = Handicraft::latest()->take(8)->get();

//        $handicrafts = Handicraft::paginate(8);
        $subcategories = Subcategory::all();

        return view('welcome', compact('handicrafts', 'subcategories', 'artisans'));
    }

}
