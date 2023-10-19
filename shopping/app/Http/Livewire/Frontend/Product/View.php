<?php

namespace App\Http\Livewire\Frontend\Product;

use App\Models\Cart;
use App\Models\Wishlist;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class View extends Component
{

    public $category,$product,$productcolorquantity,$quantity = 1,$colorid;

public function addtocart(int $productid)
{
    if(Auth::check())
    {
        // dd($this->product->productcolors()->count());
        if($this->product->where('id',$productid)->where('status','0')->exists())
        {
            //Check For Product Color Quantity
            if($this->product->productcolors()->count() >= 1)
            {
                if($this->productcolorquantity != null)
                {
                    if(Cart::where('user_id',auth()->user()->id)
                    ->where('product_id',$productid)
                    ->where('product_color_id',$this->colorid)
                    ->exists())
                    {
                        $this->dispatchBrowserEvent('message', [
                            'text' => 'Product Already Added',
                            'type' => 'success',
                            'status' => 200,
                        ]);
                    }
                    else
                    {

                    
                    // dd('color selected');
                    $productcolorid = $this->product->productcolors()->where('id',$this->colorid)->first();
                    
                    if($productcolorid->quantity>0)
                    {
                        if($productcolorid->quantity >= $this->quantity)
                        {
                            // dd('inside color quantity  check');
                            Cart::create([
                                'user_id' => auth()->user()->id,
                                'product_id' => $productid,
                                'product_color_id' => $this->colorid ,
                                'quantity' => $this->quantity,
                            ]);
                            $this->emit('cartupdated');
                            $this->dispatchBrowserEvent('message', [
                                'text' => 'Added To Cart Successfully ',
                                'type' => 'success',
                                'status' => 200,
                             ]);
                        }
                        else
                        {
                            $this->dispatchBrowserEvent('message', [
                                'text' => 'Only '.$productcolorid->quantity.' Quantity Available',
                                'type' => 'warning',
                                'status' => 404,
                            ]);
                        }
                    }
                    else
                    {
                        $this->dispatchBrowserEvent('message', [
                            'text' => 'Out Of Stock ',
                            'type' => 'warning',
                            'status' => 404,
                         ]);
                    }
                }
                }
                else
                {
                    $this->dispatchBrowserEvent('message', [
                        'text' => 'Select Your Product Color',
                        'type' => 'info',
                        'status' => 404,
                    ]);
                }
                // dd('inside product color');
            }
            else
            {

            if(Cart::where('user_id',auth()->user()->id)->where('product_id',$productid)->exists())
            {
                $this->dispatchBrowserEvent('message', [
                    'text' => 'Product Already Added',
                    'type' => 'success',
                    'status' => 200,
                ]);
            }
            else
            {
                if($this->product->quantity > 0)
                {
    
                    if($this->product->quantity > $this->quantity )
                {
                    //Insert Product To Cart
                    // dd('add ot cART');
                    Cart::create([
                        'user_id' => auth()->user()->id,
                        'product_id'=> $productid,
                        'quantity' => $this->quantity
                    ]);
                    // $this->emit('cartupdated');
                    $this->emit('cartupdated');

                    $this->dispatchBrowserEvent('message', [
                        'text' => 'Added To Cart Successfully ',
                        'type' => 'success',
                        'status' => 200,
                     ]);
    
                }
                else
                {
                    $this->dispatchBrowserEvent('message', [
                        'text' => 'Only '.$this->product->quantity.' Quantity Available',
                        'type' => 'warning',
                        'status' => 404,
                    ]);
                }
                }
                else
                {
                    $this->dispatchBrowserEvent('message', [
                        'text' => 'Out Of Stock ',
                        'type' => 'warning',
                        'status' => 404,
                    ]);
                }
            }
            // dd("product");
           
        }
        }
        else
        {
            $this->dispatchBrowserEvent('message', [
                'text' => 'Product Does Not Exists ',
                'type' => 'warning',
                'status' => 404,
            ]);
        }
    }
    else
    {
            $this->dispatchBrowserEvent('message', [
            'text' => 'Please Login To Add To Cart',
            'type' => 'warning',
            'status' => 401,
            ]);
    }
}
   
public function decrease()
{
    if($this->quantity > 1){

        $this->quantity--;
    }
}

public function increase()
{
    $this->quantity++;
}
    public function colorselected($colorid)
    {
        $this->colorid = $colorid;
       $productcolor =  $this->product->productcolors()->where('id',$colorid)->first();
        $this->productcolorquantity =  $productcolor->quantity;

        if($this->productcolorquantity == 0)
        {
            $this->productcolorquantity = 'Out Of Stock';
        }
    }

    public function addtowishlist($productid)
    {

        if(Auth::check())
        {
            if(Wishlist::where('user_id',auth()->user()->id)->where('product_id',$productid)->exists())
            {
                // session()->flash('message','Product Already Added To Wishlist');
                $this->dispatchBrowserEvent('message', [
                    'text' => 'Product Already Added To Wishlist',
                    'type' => 'success',
                    'status' => 409,
                ]);

            }
            else{

                $wishlist = Wishlist::create([
                    'user_id' => auth()->user()->id, 
                    'product_id' => $productid 
                ]);
                $this->emit('wishlistupdated');

                // session()->flash('message','Wishlist Added Successfully');
                $this->dispatchBrowserEvent('message', [
                    'text' => 'Wishlist Added Successfully',
                    'type' => 'success',
                    'status' => 200,
                ]);
    
            }
        }
        else{
            // session()->flash('message','Please Login To Continue');
            $this->dispatchBrowserEvent('message', [
                'text' => 'Please Login To Add To Wishlist',
                'type' => 'warning',
                'status' => 401,
            ]);

            return false;
        }

    }


    public function mount($category,$product)
    {
        $this->category = $category;
        $this->product = $product;
    }
    public function render()
    {
        return view('livewire.frontend.product.view',[
            'category'=>$this->category,
            'product'=>$this->product,
        ]);
    }
}
