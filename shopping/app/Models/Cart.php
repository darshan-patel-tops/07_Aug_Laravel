<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    protected $fillable = ['product_id','user_id','product_color_id','quantity'];


    
    public function product()
    {
        return $this->belongsTo(Product::class,'product_id','id');
    }
    public function productcolor()
    {
        return $this->belongsTo(ProductColor::class,'product_color_id','id');
    }
}
