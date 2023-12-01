<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;
    protected  $fillable = ['title','description','image','isBanner','maps_url','data_eventit','isSold','days','regjia','times','isPaid','price','limit_number','title_en','description_en'];
    protected $dates = ['data_eventit'];
    protected $cast = ['regjia' => 'array','times' => 'array'];
    

}
