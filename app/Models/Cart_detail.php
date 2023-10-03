<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart_detail extends Model
{
    use HasFactory;
    protected $table = 'vs_cart_detail';

    public function cart()
    {
        return $this->belongsTo(Carts::class);
    }

    public function product()
    {
        return $this->belongsTo(Products::class);
    }
    protected $fillable = [
        'cart_id',
        'product_id',
        'quantity',
        'price_by_quantity'
    ];
}
