<?php

namespace App\Http\Livewire\Frontend\Wishlist;

use App\Models\Wishlist;
use Livewire\Component;

class Index extends Component
{



    public function removewishlist(int $wishlistid)
    {
        Wishlist::where('user_id',auth()->user()->id)->where('id',$wishlistid)->delete();

        $this->emit('wishlistupdated');

        $this->dispatchBrowserEvent('message',[
            'text'=>'WishList Item Removed Successfully',
            'type' =>'success',
            'status'=>200
        ]);
    }
    public function render()
    {
        $wishlists = Wishlist::where('user_id',auth()->user()->id)->get();
        return view('livewire.frontend.wishlist.index',[
            'wishlists' => $wishlists,
        ]);
    }
}
