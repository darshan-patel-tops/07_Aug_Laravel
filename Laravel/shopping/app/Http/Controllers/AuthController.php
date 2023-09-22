<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index()
    {
        return view ('register');
    }
    public function store(Request $request)
    {
        // echo "<pre>";
        // print_r($_REQUEST);
        // echo "</pre>";

        // dd($request->name);

        $user = new User;
        $user->name = $request->name;
        $user->username = $request->username;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->save();
        return redirect('/login');
    }
}
