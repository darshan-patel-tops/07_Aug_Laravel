<?php

namespace App\Http\Controllers\BackEnd;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('Backend.home');
    }

    public function GetUsersData()
    {
        // dd("inside funciton");
        $users = User::all();
        $products = Product::all();
        // echo $users;
        //    echo json_encode($users);
            return response()->json($users);
            // return response()->json([$users,$products]);

        // dd($users);
    }

}
