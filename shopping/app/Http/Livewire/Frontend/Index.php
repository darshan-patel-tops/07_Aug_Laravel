<?php

namespace App\Http\Livewire\Frontend;

use App\Models\Cart;
use App\Models\Product;
use Livewire\Component;
use App\Models\Wishlist;
use Illuminate\Support\Facades\Auth;

class Index extends Component
{
    public $quantity=1;
    public function addtowishlist($trendingid)
    {

        if(Auth::check())
        {
            if(Wishlist::where('user_id',auth()->user()->id)->where('product_id',$trendingid)->exists())
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
                    'product_id' => $trendingid 
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
    public function addtocart(int $trendingid)
    {
        // $product = Product::all();
        $product = Product::where('id',$trendingid)->where('status','0')->first();
        // dd($product);
        // dd($product->productcolors());
        if(Auth::check())
        {
            if($product->exists())
        {
            
                if(Cart::where('user_id',auth()->user()->id)->where('product_id',$trendingid)->exists())
            {
                $this->dispatchBrowserEvent('message', [
                    'text' => 'Product Already Added',
                    'type' => 'success',
                    'status' => 200,
                ]);
            }
            else
            {
                if($product->quantity > 0)
                {
    
                    //Insert Product To Cart
                    // dd('add ot cART');
                    Cart::create([
                        'user_id' => auth()->user()->id,
                        'product_id'=> $trendingid,
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
                        'text' => 'Sorry!!!This Item Is Out Of Stock',
                        'type' => 'warning',
                        'status' => 404,
                    ]);
                }
                
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
            // dd("outside");
            }
        
    }
    public function render()
    {
        $trendings = Product::where('trending','1')->latest()->take(10)->get();

        return view('livewire.frontend.index',['trendings'=>$trendings]);
    }
}
