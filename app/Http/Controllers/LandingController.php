<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function getProducts() {
        $products = Product::all();
        return view('welcome', compact('products'));
    }
}
