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
        return $this->hasMany(Order_detail::class, 'order_id');
    }
    public function customer()
    {
        return $this->belongsTo(User::class, 'customer_id');
    }
    public function customer_()
    {
        return $this->belongsTo(Customers::class, 'customer_id','user_id');
    }

    protected $fillable = [
        'customer_id',// mã khách hàng
        'total_money', // Tổng tiền
        'delivery_date',
        'shipping_fee',// phí vận chuyển
        'receiver_name',// tên người nhận
        'number_phone',// số điện thoại
        'receiver_address', // địa chỉ
        'status'
    ];
}
