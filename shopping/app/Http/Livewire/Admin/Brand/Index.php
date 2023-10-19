<?php

namespace App\Http\Livewire\Admin\Brand;

use App\Models\Brand;
use App\Models\Category;
use Livewire\Component;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Livewire\WithPagination;

class Index extends Component
{

    use WithPagination;
    protected $paginationTheme= 'bootstrap';

    public $name,$slug,$status,$brand_id,$category_id;

    public function rules()
    {
        return [
            'name'=> 'required|string',
            'slug'=> 'required|string',
            'category_id'=> 'required|integer',
            'status'=> 'nullable',
        ];
    }

    public function resetinput()
    {
        $this->name = null;
        $this->slug = null;
        $this->status = null;
        $this->brand_id = null;
        $this->category_id = null;
    }
   
    public function addbrand(Request $request)
    {
        $validateddata= $this->validate();
        Brand::create([
            'name'=>$this->name,
            'slug'=>Str::slug($this->slug),
            'status'=>$this->status == true ? '1':'0',
            'category_id'=>$this->category_id
        ]);
        session()->flash('message','Brand Added Successfully');
        $this->dispatchBrowserEvent('close-modal');
        $this->resetinput();
    }

    public function closemodal()
    {
        $this->resetinput();
    }
public function editbrand(int $brand_id)
{
    $this->brand_id =$brand_id;
    $brand = Brand::findOrFail($brand_id);
    $this->name = $brand->name;
    $this->slug = $brand->slug;
    $this->status = $brand->status;
    $this->category_id = $brand->category_id;
    
}

public function updatebrand()
{
    $validateddata= $this->validate();
    Brand::findOrFail($this->brand_id)->update([
        'name'=>$this->name,
        'slug'=>Str::slug($this->slug),
        'status'=>$this->status == true ? '1':'0',
        'category_id'=>$this->category_id

    ]);
    session()->flash('message','Brand Updated Successfully');
    $this->dispatchBrowserEvent('close-modal');
    $this->resetinput();
}

public function deletebrand($brand_id)
    {
        $this->brand_id = $brand_id;
    }

    public function destroybrand()
    {
        $brand = Brand::find($this->brand_id);
        
        $brand->delete();
        session()->flash('message','Brand Deleted');
        $this->dispatchBrowserEvent('close-modal');
    }
    public function render()
    {   $categories = Category::where('status','0')->get();
        $brands = Brand::orderBy('id','Desc')->paginate(10);
        return view('livewire.admin.brand.index',compact('brands','categories'))->extends('layouts.admin')->section('content');
    }
}
