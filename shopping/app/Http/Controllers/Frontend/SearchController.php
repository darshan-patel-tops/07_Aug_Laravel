<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index(Request $request)
    {
        if($request->search)
        {
            $searchproducts = Product::where('name','LIKE','%'.$request->search.'%')->latest()->paginate(20);
            // dd($searchproducts); 
            return view('frontend.search.index',compact('searchproducts'));

        }
        else
        {
            return redirect()->back()->with('message','Empty Search');
        }
    }
}
