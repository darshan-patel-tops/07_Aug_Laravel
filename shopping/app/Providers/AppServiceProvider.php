<?php

namespace App\Providers;

use App\Models\Product;
use Sabberworm\CSS\Settings;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
        Paginator::useBootstrap();
        
        //I Can Use Below Settings And Variable Anywhere In Whole Project 
        //Without Defining In That Particular Controller 
        //Or Model Or Anywhere

        // $websitesetting = Product::first();
        // view::share('appsetting' , $websitesetting);

        //It Can Be Used Like 
        //{{$appsetting->product_name(Or Whatvever Field I Have In The Database
        // Of That Particular Table And Model Or Relationship ) ?? 'Thunder Ecommerce'}}
    }
}
