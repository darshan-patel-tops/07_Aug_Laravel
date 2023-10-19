<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrdersController extends Controller
{
    public function index()
    {
        $orders = Order::where('user_id',Auth::user()->id)->orderBy('created_at','DESC')->get();
        return view('frontend.orders.index',compact('orders'));
    }
    public function show($orderid)
    {
        $order = Order::where('user_id',Auth::user()->id)->where('id',$orderid)->first();
        
        if($order)
        {
            return view('frontend.orders.show',compact('order'));
        }
        else
        {
            return redirect()->back()->with('message','No Order Found');
        }
    }
}
