<?php

namespace App\Http\Livewire\Frontend\Checkout;

use App\Models\Cart;
use App\Models\Order;
use App\Models\Address;
use App\Models\OrderItem;
use Livewire\Component;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class Index extends Component
{

    public $carts ,$totalamount=0,$useraddress,$validatedaddress,$customaddress;

    public $email,$phone,$address,$fullname,$zipcode,$payment_mode=null,$payment_id=null,$ultimateaddress,$gender;

    public function rules()
    {
        return [
            'fullname'=>'required|string|max:100',
            'phone'=>'required|string|max:20|min:7',
            'email'=>'required|email|max:100',
            'zipcode'=>'required|string|max:10',
            'address'=>'required|string|max:500',
        ];
    }
    public function resetinput()
    {
        $this->email = null;
        $this->phone = null;
        $this->address = null;
        $this->fullname = null;
        $this->zipcode = null;
    }

    
    public function addaddress(Request $request)
    {
        //  dd($this->gender),
        $validateddata= $this->validate();
        $all= $this->validatedaddress=  Address::create([
            'address'=>$this->address,
            'gender'=>$this->gender,
            'fullname'=>$this->fullname,
            'phone'=>$this->phone,
            'email'=>$this->email,
            'zipcode'=>$this->zipcode,
            'user_id'=>auth()->user()->id,
        ]);
        // dd($all);
        // session()->flash('message','Brand Added Successfully');
        $this->dispatchBrowserEvent('close-modal');
        $this->resetinput();
    }

    public function placeorder()
    {
        // dd($this->fullname);
        //  $this->validate();
        //  dd('hey');

        // $hey = $this->selectadd();
        // dd($hey);
        $order = Order::create([
            'user_id'=>auth()->user()->id,
            'tracking_no'=> 'thunder-'.Str::random(10).'nit'.Str::random(5).'ya'.str::random(5),
            'fullname'=> $this->fullname,
            'email'=>$this->email,
            'phone'=>$this->phone,
            'zipcode'=>$this->zipcode,
            'address'=>$this->address,
            'status_message'=>'in progress',
            'payment_mode'=> $this->payment_mode,
            'payment_id'=> $this->payment_id,
        ]);

        foreach ($this->carts as $cart)
        {
            $orderitem = OrderItem::create([
                'order_id'=>$order->id,
                'product_id'=>$cart->product_id,
                'product_color_id'=>$cart->product_color_id,
                'quantity' => $cart->quantity,
                'price'=>$cart->product->selling_price
            ]);
        
            if($cart->product_color_id != null)
            {
                $cart->productcolor()->where('id',$cart->product_color_id)->decrement('quantity',$cart->quantity);
            }
            else
            {
                $cart->product()->where('id',$cart->product_id)->decrement('quantity',$cart->quantity);

            }
        }


        return $order;
    }
    public function selectadd($addressid)
{
    // dd($addressid);
    $this->customaddress = Address::where('id',$addressid)->where('user_id',auth()->user()->id)->get();
    return $this->customaddress;
    // dd($useraddress);


}
public function confirmorder(Request $request)
    {

        // dd($this->payment_mode);
        $this->customaddress = Address::find($this->ultimateaddress);
        $order = Order::create([
            'user_id'=>auth()->user()->id,
            'tracking_no'=> 'thunder-'.Str::random(10).'nit'.Str::random(5).'ya'.str::random(5),
            'fullname'=> $this->customaddress->fullname,
            'email'=>$this->customaddress->email,
            'phone'=>$this->customaddress->phone,
            'zipcode'=>$this->customaddress->zipcode,
            'address'=>$this->customaddress->address,
            'status_message'=>'in progress',
            'payment_mode'=> $this->payment_mode,
            'payment_id'=> $this->payment_id,
        ]);
        foreach ($this->carts as $cart)
        {
            $orderitem = OrderItem::create([
                'order_id'=>$order->id,
                'product_id'=>$cart->product_id,
                'product_color_id'=>$cart->product_color_id,
                'quantity' => $cart->quantity,
                'price'=>$cart->product->selling_price
            ]);
        
            if($cart->product_color_id != null)
            {
                $cart->productcolor()->where('id',$cart->product_color_id)->decrement('quantity',$cart->quantity);
            }
            else
            {
                $cart->product()->where('id',$cart->product_id)->decrement('quantity',$cart->quantity);

            }
        }


        
        // $this->payment_mode = 'cod';
        // $add = $this->selectadd($addressid);
        // dd($add);
        // $successorder = $this->placeorder();
        // return $order;
        if($order)
        {
            Cart::where('user_id',auth()->user()->id)->delete();
            $this->dispatchBrowserEvent('message', [
                'text' => 'Order Placed  Successfully',
                'type' => 'success',
                'status' => 200,
            ]); 
        }
        else
        {
            $this->dispatchBrowserEvent('message', [
                'text' => 'Something Went Wrong',
                'type' => 'error',
                'status' => 404,
            ]); 
        }
        // dd($this->customaddress->fullname);

    }
    public function cod($addressid)
    {
        $this->payment_mode = 'cod';
        // $add = $this->selectadd($addressid);
        // dd($add);
        $codorder = $this->placeorder();
        // dd("$codorder");
        if($codorder)
        {
            Cart::where('user_id',auth()->user()->id)->delete();
            $this->dispatchBrowserEvent('message', [
                'text' => 'Order Placed  Successfully',
                'type' => 'success',
                'status' => 200,
            ]); 
        }
        else
        {
            $this->dispatchBrowserEvent('message', [
                'text' => 'Something Went Wrong',
                'type' => 'error',
                'status' => 404,
            ]); 
        }
        // dd($this->fullname);

        // dd($this->validatedaddress);
    }
    public function closemodal()
    {
        $this->resetinput();
    }
    public function totalamount()
    {
        $this->totalamount = 0;
        $this->carts = Cart::where('user_id',auth()->user()->id)->get();
        foreach ($this->carts as $cart)
        {
            $this->totalamount += $cart->product->selling_price * $cart->quantity;
        }
        return $this->totalamount;
    }
    public function render()
    {
        $this->totalamount = $this->totalamount();
        $this->useraddress = Address::where('user_id',auth()->user()->id)->get();

        return view('livewire.frontend.checkout.index',[
            'totalamount'=> $this->totalamount,
            'useraddress'=>$this->useraddress,
        ]);
    }
}
