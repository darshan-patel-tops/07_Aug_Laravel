<?php

namespace App\Http\Livewire\Frontend\Product;

use App\Models\Product;
use Livewire\Component;

class Index extends Component
{
    public $products , $category , $brandinputs = [] , $priceinput;

    protected $queryString = [
        'brandinputs'=>['except' => '','as'=>'brand'],
        'priceinput'=>['except' => '','as'=>'price'],
    ];

    public function mount($category)
    {
        $this->category= $category;
        
    }
    public function render()
    {
        $abc=$this->products= Product::where('category_id',$this->category->id)
        ->when($this->brandinputs,function($brandquery){
            $brandquery->whereIn('brand',$this->brandinputs);
        })
        ->when($this->priceinput,function($brandquery){

            $brandquery->when($this->priceinput == 'high-to-low',function($pricequery){
                $pricequery->orderBy('selling_price','DESC');
            });
            $brandquery->when($this->priceinput == 'low-to-high',function($pricequery){
                $pricequery->orderBy('selling_price','ASC');
            });
        })
        ->where('status','0')->get();
        // dd($abc);
        return view('livewire.frontend.product.index',[
            'products'=> $this->products,
            'category'=> $this->category,
        ]);
    }
}
