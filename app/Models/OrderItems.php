<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderItems extends Model
{
    use HasFactory;
    protected $fillable = ['order_id','product_id','color','size','quantity'];
    
    public function order(){
        return $this->belongsTo(Order::class,'id','order_id');
    }
    
    public function product(){
        return $this->hasOne(Product::class,'id','product_id');
    }
}
