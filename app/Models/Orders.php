<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    use HasFactory;
    protected $fillable = ['order_code','name','surname','email','address','city','country','phone','shipping_fee','total_sum','status','payment_type','payment_id','payer_id','payer_email','currency','payment_status'];
    
    public function orderItems(){
        return $this->hasMany(OrderItems::class,'order_id','id');
    }
}
