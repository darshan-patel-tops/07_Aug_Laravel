<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['category','visible'];
    protected $casts = ['category'=>'json'];

    public function brands()
    {
        return $this->hasMany(Brand::class);
        //         return $this->hasManyThrough(Deployment::class, Environment::class);

    }
    public function product()
    {
        return $this->hasMany(Product::class);
        //         return $this->hasManyThrough(Deployment::class, Environment::class);

    }
}
