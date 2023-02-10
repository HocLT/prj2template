<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    use HasFactory;
    protected $fillable=['product_id', 'order_id', 'quantity', 'price'];

    public function order() 
    {
        return $this->belongsTo(Order::class, 'order_id');
    }
}
