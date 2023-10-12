<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order_detail extends Model
{
    use HasFactory;
    protected $table = 'vs_order_detail';

    public function order()
    {
        // return $this->belongsTo(Order::class);
        return $this->belongsTo(Orders::class);
    }
    public function product()
    {
        return $this->belongsTo(Products::class);
    }

    protected $fillable = [
        'order_id',
        'product_id',
        'price',
        'quantity',
        // 'status',
    ];
}
