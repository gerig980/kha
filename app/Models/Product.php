<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['name','slug','description','thumbnail','images','colors','sizes','price'];

    protected $casts = ['images' => 'array', 'colors' => 'array' , 'sizes' => 'array'];
}
