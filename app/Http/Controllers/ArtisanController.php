<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArtisanController extends Controller
{
    public function showArtisanProducts ($id){
        return 1;
        $artisan = Artisan::findOrFail($id);
        $products = $artisan->products()->get();
        return view('artisan.products', compact('artisan', 'products'));
    }
}
