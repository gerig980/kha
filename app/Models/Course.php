<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    protected $fillable = ['name','description','image','status','teachers','days','times','start_time','end_time','name_en','description_en'];
    protected $casts = ['teachers' => 'array','times' => 'array'];

}
