<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Brand extends Model
{
    use HasFactory;
    // use SoftDeletes;
    protected $fillable = ['name','slug','status','category_id'];

    protected $casts = [
        'status' => 'boolean',
    ];

    public function category()
    {

        return $this->belongsTo(Category::class,'category_id','id');
    }
}
