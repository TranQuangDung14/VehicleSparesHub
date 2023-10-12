<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    use HasFactory;
    protected $table = 'vs_order';

    public function orderDetails()
    {
        // return $this->hasMany(Orders_details::class);
        return $this->hasMany(Order_detail::class);
    }
    public function customer()
    {
        return $this->belongsTo(User::class, 'customer_id');
    }

    protected $fillable = [
        'customer_id',
        'total_money',
        'delivery_date',
        'shipping_fee',
        'receiver_name',
        'number_phone',
        'receiver_address',
    ];
}
