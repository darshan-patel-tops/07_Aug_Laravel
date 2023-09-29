<?php
namespace App\Http\Controllers;
// use Auth;
use Laravel\Socialite\Facades\Socialite;
use Exception;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class GoogleController extends Controller
{
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }
    public function handleGoogleCallback()
    {
        try {

            $user = Socialite::driver('google')->user();

            $finduser = User::where('google_id', $user->id)->first();

            if($finduser){

                Auth::login($finduser);

                    if(Auth::user()->role_as == 1)
                    {

                        return redirect()->intended('admin/dashboard');
                    }
                    else
                    {
                        return redirect()->intended('home');

                    }

                // dd(Auth::user()->role_as);

            }else{
                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'google_id'=> $user->id,
                    'password' => encrypt('123456dummy'),
                    $details = [
                        'title' => 'Mail from shopping app .com',
                        'body' => 'This is for testing email using smtp'
                    ],

                    \Mail::to($user->email)->send(new \App\Mail\MyTestMail($details))
                ]);

                Auth::login($newUser);

                return redirect()->intended('home');
            }

        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
}
