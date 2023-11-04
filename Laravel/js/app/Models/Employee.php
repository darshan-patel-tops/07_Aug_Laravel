<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    protected $fillable = ['name','city','age','salary','documents','visible','profile'];
    protected $casts = ['documents'=>'json','visible'=>'boolean'];
}
