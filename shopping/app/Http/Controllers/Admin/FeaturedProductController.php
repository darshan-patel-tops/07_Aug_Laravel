<?php

namespace App\Http\Controllers\Admin;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FeaturedProductController extends Controller
{
    public function index()
    {

        $featured = Product::where('featured','0')->latest()->get();
        return view('frontend.featured.index',compact('featured'));
    }
}
