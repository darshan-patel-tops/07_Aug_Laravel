<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function index()
    {
        return view ('register');
    }
    public function login()
    {
        return view ('login');
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

    public function validate_login(Request $request)
    {
        // dd($request);
        $request->validate(['email'=>'required','password'=>'required']);

        $credential = $request->only('email','password');
        // dd($credential);
        if(Auth::attempt($credential))
        {
            return redirect('/home')->with('message','Login success');
            // dd("login success");
        }
        else
        {
            return redirect('/login')->with('message','Login Failed');
            // dd("login fail");
        }


    }

    public function logout()
    {
        Auth::logout();
        Session::flush();
        return redirect('/login');
    }
}
