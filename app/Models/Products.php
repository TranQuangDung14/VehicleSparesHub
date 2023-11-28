<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;
    protected $table = 'vs_product';

    public function images()
    {
        return $this->hasMany(Images::class,'product_id');
    }
    public function category()
    {
        return $this->belongsTo(Categories::class,'category_id');
    }

    public function cartDetails()
    {
        return $this->hasMany(Cart_detail::class,'product_id');
    }
    protected $fillable = [
        'category_id',
        'name',
        'price',
        'price_import',
        'short_description',
        'description',
        'tech_specs',
        'quantity',
        'selling',
    ];
}
