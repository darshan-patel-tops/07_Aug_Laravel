<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
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
        $details = [
            'title' => 'Welcome to our website',
            'body' => 'This is a body of email'
        ];

        \Mail::to($request->email)->send(new \App\Mail\MyTestMail($details));
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
            // dd(Auth::user());
            if(Auth::user()->role_as == 1)
            {
                return redirect('/admin/dashboard')->with('message','Login success');
            }
            else if(Auth::user()->role_as == 0)
            {
                return redirect('/home')->with('message','Login success');

            }
            else
            {

                return redirect('/home')->with('message','Login success');
            }
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



    public function forgetpassword()
    {
        return view('Backend.forget');
    }
    public function storeforget(Request $request)
    {
        // dd($request);
        $password = DB::table('password_reset_tokens')->insert([
            'email'=>$request->email,
            'token'=>$request->_token,
        ]);

        \Mail::to($request->email)->send(new \App\Mail\ForgetPassword($request));
        return redirect('/login');

        // return view('Backend.forget');
    }

    public function resetpassword($token)
    {
        return view('Backend.reset',compact('token'));
        // dd($token,"from controller");
    }
    public function storenewpassword($token,Request $request)
    {

        $reset_password = DB::table('password_reset_tokens')->select('email','token')
        ->where('token','=',$token)->get();
        // dd($reset_password[0]->email);
        // dd($reset_password->email);


        $reset_user = User::where('email',$reset_password[0]->email)->get();

        $reset_user[0]->password = $request->password;
        $reset_user[0]->save();

        $reset_password = DB::table('password_reset_tokens')->select('email','token')
        ->where('token','=',$token)->delete();

        return redirect('/login');
        // $reset_password[0]->destroy();
        // dd($reset_user[0]->password);
        // dd("Save password",$token);
        // return view('Backend.reset',compact('token'));
        // dd($token,"from controller");
    }
}
