<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carts extends Model
{
    use HasFactory;
    protected $table = 'vs_carts';

    public function customer()
    {
        return $this->belongsTo(User::class, 'customer_id');
    }
    public function cartDetails()
    {
        return $this->hasMany(Cart_detail::class,'cart_id');
    }

    protected $fillable = [
        'customer_id',
        'total_money',
        'real_money'
    ];
}
