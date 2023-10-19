<?php

namespace App\Http\Livewire\Frontend\Wishlist;

use App\Models\Wishlist;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Count extends Component
{

    public $wishlistcount;
    protected $listeners = ['wishlistupdated' => 'wishlistcount'];


    public function wishlistcount()
    {
        if(Auth::check()){
            return $this->wishlistcount= Wishlist::where('user_id',auth()->user()->id)->count();
        }
        else{
            return $this->wishlistcount = 0;
        }
    }
    public function render()
    { 
        $this->wishlistcount = $this->wishlistcount();
        return view('livewire.frontend.wishlist.count',[
            'wishlistcount' => $this->wishlistcount,
        ]);
    }
}
