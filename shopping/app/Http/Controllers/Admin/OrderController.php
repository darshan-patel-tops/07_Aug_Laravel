<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Http\Controllers\Controller;
use App\Models\Order;

class OrderController extends Controller
{
    public function index(Request $request)
    {
        // $today = Carbon::now();
        $order = Order::orderBy('created_at','DESC')->paginate(1);
        
        $today = Carbon::now()->format('Y-m-d');
        $orders = Order::when($request->date != null ,function ($query) use ($request)
        {
            return $query->whereDate('created_at',$request->date);
        },function($query) use ($today)
        {
            return $query->whereDate('created_at',$today);
        })
        ->when($request->status != null , function($query) use ($request)
        {
            return $query->where('status_message',$request->status);
        })->paginate(10);
        return view('admin.orders.index',compact('orders','order'));
    }
    public function view(int $orderid)
    {
        // $today = Carbon::now();
        $order = Order::where('id',$orderid)->first();
        if($order)
        {
            return view('admin.orders.show',compact('order'));
        }
        else
        {
            return redirect('/admin/orders/')->with('message','Order Not Found');
        }
    }
    public function update(int $orderid , Request $request)
    {
        // $today = Carbon::now();
        $order = Order::where('id',$orderid)->first();
        if($order)
        {
            $order->update([
                'status_message' => $request->order_status
            ]);
            return redirect('/admin/orders/'.$orderid.'/view')->with('message','Order Status Updated');        }
        else
        {
            return redirect('/admin/orders/'.$orderid.'/view')->with('message','Something Went Wrong');
        }
    }
}
