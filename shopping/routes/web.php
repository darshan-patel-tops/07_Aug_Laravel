<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\ColorController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\FeaturedProductController;
use App\Http\Controllers\Admin\InvoiceController;
use App\Http\Controllers\Admin\NewArrivalController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Frontend\CartController;
use App\Http\Controllers\Frontend\CategoryController as FrontendCategoryController;
use App\Http\Controllers\Frontend\CheckoutController;
use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\Frontend\OrdersController;
use App\Http\Controllers\FrontEnd\SearchController;
use App\Http\Controllers\FrontEnd\UserController as FrontEndUserController;
use App\Http\Controllers\Frontend\WishlistController;

Auth::routes();

//Main Page Routes For User
Route::get('/', [FrontendController::class, 'index']);
Route::get('/home', [FrontendController::class, 'index']);
Route::get('/practice', [FrontendController::class, 'p']);

//Search Products   //Search Query
Route::get('/search',[SearchController::class,'index']);

//Category Routes For User
Route::get('/category', [FrontendCategoryController::class, 'index']);
Route::get('/category/{category_slug}', [FrontendCategoryController::class, 'products']);
Route::get('/category/{category_slug}/{product_id}', [FrontendCategoryController::class, 'productview']);

//New Arrival Routes For User
Route::get('/new-arrival', [NewArrivalController::class, 'index']);

//Featured Products Routes For User
Route::get('/new-arrival', [FeaturedProductController::class, 'index']);


Route::middleware(['auth'])->group(function()
{
    //Wishlist Routes For User
    Route::get('/wishlist', [WishlistController::class, 'index']);
    
    //Cart Routes For User
    Route::get('/cart', [CartController::class, 'index']);
    
    //Checkout Routes For User
    Route::get('/checkout', [CheckoutController::class, 'index']);
    
    //Orders Routes For User
    Route::get('/orders', [OrdersController::class, 'index']);
    Route::get('/orders/{orderid}', [OrdersController::class, 'show']);

    //Profile Page For User
    Route::get('/profile',[FrontEndUserController::class,'index']);
});



// Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::prefix('/admin')->middleware(['auth','isAdmin'])->group(function()
{
    //DashBoard Routes
    Route::get('/dashboard', [DashboardController::class, 'index']);
    

    //User Roles Routes
    Route::controller(UserController::class)->group(function ()
    {
        Route::get('/users','index');
        Route::get('/users/create','create');
        Route::post('/users','save');
        Route::get('/users/{user_id}/edit','edit');
        Route::get('/users/{user_id}/delete','delete');
        Route::put('/users/{user_id}','update');
    });

    //Slider Routes
    Route::controller(SliderController::class)->group(function ()
    {
        Route::get('/sliders','index');
        Route::get('/sliders/create','create');
        Route::post('/sliders/save','save');
        Route::get('/sliders/{slider}/edit','edit');
        Route::put('/sliders/{slider}','update');
        Route::get('sliders/{slider}/delete','delete');
    });

    //Order Routes
    Route::controller(OrderController::class)->group(function ()
    {
        Route::get('/orders','index');
        Route::get('/orders/{orderid}/view','view');
        Route::put('/orders/{orderid}','update');
        
    });

    //Invoice Routes
    Route::controller(InvoiceController::class)->group(function ()
    {
        Route::get('/invoice/{orderid}/generate','generate');
        Route::get('/invoice/{orderid}/view','view');

    });

    //Category Routes
    Route::get('/category', [CategoryController::class, 'index']);
    Route::get('/category/create', [CategoryController::class, 'create']);
    Route::post('/category/create', [CategoryController::class, 'store']);
    Route::get('/category/{category}/edit', [CategoryController::class, 'edit']);
    Route::put('/category/{category}', [CategoryController::class, 'update']);
    
    //Brand Routes
    Route::get('/brand', App\Http\Livewire\Admin\Brand\Index::class);
    
    //Product Routes
    Route::get('/product', [ProductController::class,'index']);
    Route::get('/product/create', [ProductController::class,'create']);
    Route::post('/product/create', [ProductController::class,'store']);
    Route::get('/product/{product}/edit', [ProductController::class,'edit']);
    Route::put('/product/{product}', [ProductController::class,'update']);
    Route::get('/product-image/{product_image_id}/delete', [ProductController::class,'destroyimage']);
    Route::get('/product/{product}/delete', [ProductController::class,'delete']);
    
    Route::post('/product-color/{prod_color_id}', [ProductController::class,'updateproductcolorquantity']);
    Route::get('/product-color/{prod_color_id}/delete', [ProductController::class,'deleteproductcolor']);

    
    //Color Routes
    Route::get('/colors',[ColorController::class,'index']);
    Route::get('/colors/create',[ColorController::class,'create']);
    Route::post('/colors/save',[ColorController::class,'save']);
    Route::get('/colors/{color}/edit', [ColorController::class,'edit']);
    Route::put('/colors/{color_id}', [ColorController::class,'update']);
    Route::get('/colors/{color}/delete', [ColorController::class,'delete']);




});
