<?php

namespace App\Models;

use App\Models\Product;
use App\Models\OrderItem;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'tracking_no',
        'fullname',
        'email',
        'phone',
        'zipcode',
        'address',
        'status_message',
        'payment_mode',
        'payment_id',
];

            // public function product()
            // {
            //     return $this->hasMany(Product::class);
            // }
            public function orderitem()
            {
                return $this->hasMany(OrderItem::class,'order_id','id');
            }

  
}