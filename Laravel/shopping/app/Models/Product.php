<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ['category_id','brand_id','products','visible'];
    protected $casts = ['products'=>'json'];

    public function Brand()
    {
        // return $this->belongsTo(Category::class);
        return $this->belongsTo(Brand::class);
    }

    public function Category()
    {
        return $this->belongsTo(Category::class);
        // return $this->belongsTo(Brand::class);
    }
}
