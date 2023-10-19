<?php

namespace App\Http\Controllers\Admin;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NewArrivalController extends Controller
{
    public function index()
    {

        $newarrival = Product::latest()->take(20)->get();
        return view('frontend.newarrival.index',compact('newarrival'));
    }
}
