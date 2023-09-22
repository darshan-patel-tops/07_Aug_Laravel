<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public $url = "http://localhost:8000/assets";
    public function index()
    {
        $url = $this->url;
        return view('home',compact('url'));
    }
}
