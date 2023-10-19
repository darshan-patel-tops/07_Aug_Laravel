<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
     public function index()
    {
        $categories = Category::where('status','0')->get();
        return view('frontend.category.index',compact('categories'));
    }
     public function products($category_slug)
    {
        // dd($category_slug);
        $category = Category::where('slug',$category_slug)->first();
        if($category)
        {
            // $products = $category->products()->get();
            // return view('frontend.products.index',compact('products','category'));
            return view('frontend.products.index',compact('category'));

        }
        else{
            return redirect()->back()->with('message','No Products Found For This Category');
            // return view('frontend.category.index',compact('categories'));
        }
    }

    public function productview(string $category_slug , string $product_id)
    {
        $category = Category::where('slug',$category_slug)->first();
        if($category)
        {
            $product = $category->products()->where('id',$product_id)->where('status','0')->first();
            if($product)
            {
                return view('frontend.products.view',compact('category','product'));
            }
            else{
                return redirect()->back()->with('message','No Products Found For This Category');

            }
        }
        else{
            return redirect()->back()->with('message','No Products Found For This Category');
        }
    }
}
