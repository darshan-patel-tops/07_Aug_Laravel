<?php

namespace App\Http\Controllers\Admin;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Http\Controllers\Controller;

class InvoiceController extends Controller
{
    public function view(int $orderid)
    {
        $order = Order::findOrFail($orderid);
        return view('admin.invoice.generate-invoice',compact('order'));
    }
    public function generate(int $orderid)
    {
        $order = Order::findOrFail($orderid);
        $today = Carbon::now()->format('Y-m-d');
        $data = ['order'=> $order];
        $pdf = Pdf::loadView('admin.invoice.generate-invoice', $data);
        return $pdf->download('Thunder-'.$order->id.'-'.$today.'.pdf');
    }
}
