<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class DashboardController extends Controller
{
    public function index()
    {
        $totalproducts = Product::count();
        $totalcategories = Category::count();
        $totalbrands = Brand::count();
        
        $totalusers = User::count();
        $totaladmins = User::where('role_as','1')->count();
        $totalguests = User::where('role_as','0')->count();

        
        $today = Carbon::now()->format('d-m-Y');
        $thismonth = Carbon::now()->format('m');
        $thisyear = Carbon::now()->format('Y');
        
        $totalorders = Order::count();
        $todayorders = Order::whereDate('created_at',$today)->count();
        $thismonthorder = Order::whereMonth('created_at',$thismonth)->count();
        $thisyearorder = Order::whereYear('created_at',$thisyear)->count();

            return view('admin.dashboard',
            compact('totalproducts','totalcategories','totalbrands','totalusers',
            'totaladmins','totalguests','totalorders','todayorders','thismonthorder','thisyearorder'));

    }
}
