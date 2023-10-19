<?php

namespace App\Models;

use App\Models\Brand;
use App\Models\Order;
use App\Models\Category;
use App\Models\ProductColor;
use App\Models\ProductImage;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [

        'category_id',
        'name',
        'slug',
        'brand',
        'small_description',
        'description',
        'original_price',
        'selling_price',
        'quantity',
        'trending',
        'featured',
        'status',
        'meta_title',
        'meta_keyword',
        'meta_description',
    ];
    protected $casts = [
        'status' => 'boolean',
        'trending' => 'boolean',
        'featured' => 'boolean',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class,'category_id','id');
    }
    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }
    public function productimage()
    {
        return $this->hasMany(ProductImage::class,'product_id','id');
    }
    public function order()
    {
        return $this->belongsTo(OrderItem::class);
    }
    public function productcolors()
    {
        // dd("hey idk");
        return $this->hasMany(ProductColor::class,'product_id','id');
    }
}
