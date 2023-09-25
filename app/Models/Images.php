<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Images extends Model
{
    use HasFactory;
    protected $table = 'vs_image_product';

    public function product()
    {
        return $this->belongsTo(Products::class,'product_id');
    }
    protected $fillable = [
        'image',
        'product_id',
    ];
}
