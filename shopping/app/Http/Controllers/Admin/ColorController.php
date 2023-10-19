<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ColorFormRequest;
use App\Models\Color;
use Illuminate\Http\Request;

class ColorController extends Controller
{
    public function index()
    {
        $colors = Color::all();
        return view('admin.colors.index',compact('colors'));
    }
    public function create()
    {
        return view('admin.colors.create');
    }
    public function save(ColorFormRequest $request)
    {
        $validateddata = $request->validated();
        $validateddata['status']= $request->status == true ? '1':'0';
        Color::create($validateddata);
        return redirect('admin/colors')->with('message','Color Added Successfully');
    }
    public function edit(Color $color)
    {
        return view('admin.colors.edit',compact('color'));
    }
    public function update(ColorFormRequest $request,$color_id)
    {
        $validateddata = $request->validated();
        // $validateddata['status']= $request->status == true ? '1':'0';
        // 'status' => $request->status == true ? '1':'0',
        // $color = Color::find($validateddata['color_id'])->products()->where('id',$color_id)->first();

       $color= Color::find($color_id);
    //    dd($color);
    $color->update([
        'name'=>$validateddata['name'],
        'code'=>$validateddata['code'],
        'status' => $request->status == true ? '1':'0',

    ]);
        return redirect('admin/colors')->with('message','Color Updated Successfully');  
    }
    public function delete($color)
    { 
        $colors = Color::findOrFail($color);
        $colors->delete();
        return redirect('admin/colors')->with('message','Color Deleted Successfully');  
    }
}
