<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;
    protected $fillable = ['category_id','brand','visible'];
    protected $casts = ['brand'=>'json'];
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function product()
    {
        return $this->hasMany(Product::class);
        //         return $this->hasManyThrough(Deployment::class, Environment::class);

    }
}
