<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable=['user_id', 'order_date', 'shipping_name', 
        'shipping_phone', 'shipping_email', 'shipping_address'];

    public function details() {
        return $this->hasMany(OrderDetail::class, 'order_id');
    }
}
