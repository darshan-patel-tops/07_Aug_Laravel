<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CategoryA;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $category= CategoryA::all();
        // dd($category);
        // CategoryA::where('visible',true)->get();
        // CategoryA::where('visible','=',true)->get();
        return view('Admin.Category.index',compact('category'));
    }
    public function add()
    {
        return view('Admin.Category.add');
    }
    public function store(Request $request,CategoryA $category)
    {
        // dd($request);

        CategoryA::create([
            'name'=>$request->name,
            'description'=>$request->description,
            'visible'=>$request->visible,
            'image'=>time(),
        ]);

//             $data = new CategoryA;
//             $data->name = $request->name;
//             $data->description = $request->description;
//             $data->visible = $request->visible;
//             $data->image = time();
//             $data->save();

// $category->name = $request->name;
// $category->description = $request->description;
// $category->visible = $request->visible;
// $category->image = time();
// $category->save();

// $category->create([
//     'name'=>$request->name,
//     'description'=>$request->description,
//     'visible'=>$request->visible,
//     'image'=>time(),
// ]);
        return redirect('/admin/all-category')->with('message',"Category Added Successfully");
            // dd("inside function");
    }
}
