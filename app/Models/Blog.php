<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Tags\HasTags;

class Blog extends Model
{
    use HasFactory, HasTags;

    protected $fillable = ['title','description','image','title_en','description_en'];
}
