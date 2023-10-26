<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BackEnd\HomeController as BackEndHomeController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\GoogleController;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/',[HomeController::class,'index']);
Route::get('/home',[HomeController::class,'index']);

Route::get('/register',[AuthController::class,'index'])->middleware('guest');
Route::post('/register',[AuthController::class,'store']);

Route::get('/forgot-password',[AuthController::class,'forgetpassword']);
Route::post('/forgot-password',[AuthController::class,'storeforget']);


Route::get('/reset-password/{token}',[AuthController::class,'resetpassword']);
Route::post('/reset-password/{token}',[AuthController::class,'storenewpassword']);

Route::get('/login',[AuthController::class,'login'])->middleware('guest')->name('login');
Route::post('/login',[AuthController::class,'validate_login']);

Route::get('/logout',[AuthController::class,'logout']);

Route::get('/admin/dashboard',[BackEndHomeController::class,'index'])->middleware(['auth','Admin_middleware']);



Route::get('authorized/google', [GoogleController::class, 'redirectToGoogle']);
Route::get('authorized/google/callback', [GoogleController::class, 'handleGoogleCallback']);

Route::get('/admin/all-category',[CategoryController::class,'index']);
Route::get('/admin/add-category',[CategoryController::class,'add']);
Route::post('/admin/add-category',[CategoryController::class,'store']);





// Route::get('auth/google', [GoogleController::class, 'signInwithGoogle']);
// Route::get('callback/google', [GoogleController::class, 'callbackToGoogle']);
// Route::get('send-mail', function () {

//     $details = [
//         'title' => 'Mail from shopping app .com',
//         'body' => 'This is for testing email using smtp'
//     ];

//     \Mail::to('darshan.patel.tops@gmail.com')->send(new \App\Mail\MyTestMail($details));

//     dd("Email is Sent.");
// });
