<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('frontend.profile.index');
    }
}
