<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\SliderFormRequest;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class SliderController extends Controller
{
    public function index()
    {
        $sliders = Slider::all();
        return view('admin.sliders.index',compact('sliders'));
    }
    public function create()
    {
        return view('admin.sliders.create');
    }
    public function save(SliderFormRequest $request)
    {
        $validateddata = $request->validated();

        if($request->hasFile('image'))
        {
                $file = $request->file('image');
                $ext = $file->getClientOriginalExtension();
                $filename = time().'.'.$ext;
                $file->move('uploads/sliders/',$filename);
                $validateddata['image'] ='uploads/sliders/'. $filename;  
        }

        $validateddata['status'] = $request->status == true ? '1':'0';

        Slider::create([
            'title' => $validateddata['title'],
            'description' => $validateddata['description'],
            'status' => $validateddata['status'],
            'image' => $validateddata['image'],
        ]);
        
        return redirect('/admin/sliders')->with('message','Slider Added Successfully');
    }

    public function edit(Slider $slider)
    {
        return view('admin.sliders.update',compact('slider'));
 
    }
    public function update(SliderFormRequest $request,Slider $slider )
    {

        $validateddata = $request->validated();
        
        if($request->hasFile('image'))
        {
            $destination = 'uploads/sliders/'.$slider->image;
            if(File::exists($destination))
            
            {
                File::delete($destination);
            }
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('uploads/sliders/',$filename);
            $validateddata['image'] ='uploads/sliders/'.  $filename; 
            // $slider->image = $filename;
 
        }

        $validateddata['status'] = $request->status == true ? '1':'0';
        Slider::where('id',$slider->id)->update([
            'title' => $validateddata['title'],
            'description' => $validateddata['description'],
            'image' => $validateddata['image'] ?? $slider->image,
            'status' => $validateddata['status'],
        ]);

        return redirect('/admin/sliders')->with('message','Slider Updated Successfully');
 
    }

    public function delete(Slider $slider)
    {
       if($slider->count()>0)
       {
        $destination = 'uploads/sliders/'.$slider->image;
        if(File::exists($destination))
        {
            File::delete($destination);
        }
        $slider->delete();
        return redirect()->back()->with('message','Slider Deleted Successfully');
    }
        return redirect()->back()->with('message','Something Went Wrong');
    }
}
