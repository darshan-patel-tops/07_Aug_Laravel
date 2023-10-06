<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        //Eloquent queries
         $products = Product::all();
        //  $products = Product::where('id','=',1);
        //  $products = Product::where('id',3)->get();
        //  $products = Product::where('id',3)->get('quantity');
        //  $products = Product::where('id',3)->first(['quantity','id']);
        //  dd($products);
        return view('home',compact('products'));
    }
}
