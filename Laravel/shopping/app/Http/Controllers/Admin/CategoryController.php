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


        if($request->hasFile('image'))
        {
            $file = $request->file('image');
            // dd($file);
            $ext = $file->getClientOriginalExtension();
            // $source = $file->getClientOriginalName();

            $image =  'upload/category/';
            $source =  $image.time().'.'.$ext;
            $file->move($image,$source);
            // dd("$image");
        }

        CategoryA::create([
            'name'=>$request->name,
            'description'=>$request->description,
            'visible'=>$request->visible,
            'image'=>$source,
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


    public function update($id)
    {
        $data = CategoryA::findOrFail($id);
        // dd($data);
        return view('Admin.Category.edit',compact('data'));


    }
    public function update_change(Request $request,$id)
    {
        $update = CategoryA::findOrFail($id);
        // dd($update);
        if($request->hasFile('image'))
        {
            $file = $request->file('image');
            // dd($file);
            $ext = $file->getClientOriginalExtension();
            // $source = $file->getClientOriginalName();

            $image =  'upload/category/';
            $source =  $image.time().'.'.$ext;
            $file->move($image,$source);
            // dd("$image");
            $update->name = $request->name;
            $update->description = $request->description;
            $update->visible = $request->visible;
            $update->image = $source;
            $update->save();
        }
        $update->name = $request->name;
        $update->description = $request->description;
        $update->visible = $request->visible;
        $update->save();
        // $update->image = $request->image;
        // CategoryA::where('id',$id)->update([
        //     'name'=>$request->name,
        //     'description'=>$request->description,
        //     'visible'=>$request->visible,
        //     'image'=>$request->image,
        // ]);
        return redirect('/admin/all-category')->with('message',"Category Updated Successfully");

    }
    public function delete(Request $request,$id)
    {
        $data = CategoryA::findOrFail($id);
        $data->delete();
        return redirect('/admin/all-category')->with('message',"Category Deleted Successfully");

        // dd($request);
    }
}
