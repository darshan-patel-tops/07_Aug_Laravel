<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Slider;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        $sliders = Slider::where('status','0')->get();
        $trendings = Product::where('trending','1')->latest()->take(10)->get();
        return view('frontend.index',compact('sliders','trendings'));
    }
    public function p()
    {
        return view('frontend.practice');
    }
}
