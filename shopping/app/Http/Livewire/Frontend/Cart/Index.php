<?php

namespace App\Http\Livewire\Frontend\Cart;

use App\Models\Cart;
use Livewire\Component;

class Index extends Component
{
    public $carts , $totalprice = 0 ,$totalquantity = 0;

    public function removeitem(int $cardid)
    {
      $carddata=  Cart::where('user_id',auth()->user()->id)->where('id',$cardid)->first();
        if($carddata)
        {
            $carddata->delete();
            $this->emit('cartupdated');
            $this->dispatchBrowserEvent('message', [
                'text' => 'Cart Updated Successfully ',
                'type' => 'success',
                'status' => 200,
             ]);
        }
        else
        {
            $this->dispatchBrowserEvent('message', [
                'text' => 'Something Went Wrong',
                'type' => 'error',
                'status' => 500,
             ]);
        }
    }
    public function decrease(int $cartid)
    {
       
    }
    public function increase(int $cartid)
    {
        $cartdata = Cart::where('user_id',auth()->user()->id)->where('id',$cartid)->first();

        if($cartdata)
        {
            if( $cartdata->productcolor()->where('id',$cartdata->product_color_id)->exists())
            {
                $productcolor = $cartdata->productcolor()->where('id',$cartdata->product_color_id)->first();
                if($productcolor->quantity >= $cartdata->quantity)
                {
                    $cartdata->increment('quantity');
                    $this->dispatchBrowserEvent('message', [
                    'text' => 'Cart Updated Successfully ',
                    'type' => 'success',
                    'status' => 200,
                    ]);
                }
                else
                {
                    $this->dispatchBrowserEvent('message', [
                        'text' => 'Only '.$productcolor->quantity.' Quantity Available',
                        'type' => 'success',
                        'status' => 200,
                        ]);
                }
            }
            else
            {
                if($cartdata->product->quantity >= $cartdata->quantity)
                {
                    $cartdata->increment('quantity');
                    $this->dispatchBrowserEvent('message', [
                        'text' => 'Cart Updated Successfully ',
                        'type' => 'success',
                        'status' => 200,
                        ]);
                }
                else
                {
                    $this->dispatchBrowserEvent('message', [
                        'text' => 'Only '.$cartdata->product->quantity.' Quantity Available',
                        'type' => 'success',
                        'status' => 200,
                        ]);
                }
            }



        }
        else
        {
            $this->dispatchBrowserEvent('message', [
                'text' => 'Something Went Wrong',
                'type' => 'error',
                'status' => 404,
            ]);
        }
    }
    public function render()
    {
        $this->carts = Cart::where('user_id',auth()->user()->id)->get();
        return view('livewire.frontend.cart.index',[
            'carts'=>$this->carts,
        ]);
    }
}
