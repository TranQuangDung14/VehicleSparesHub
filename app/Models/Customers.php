<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customers extends Model
{
    use HasFactory;
    protected $table = 'vs_customer';

    public function user()
    {
        return $this->hasOne(User::class, 'user_id');
    }

    protected $fillable = [
        'name',
        'user_id',
        'date_of_birth',
        'sex',
        'email',
        'adress',
        'number_phone',
    ];
}
