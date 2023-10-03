<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cutomers extends Model
{
    use HasFactory;
    protected $table = 'vs_customer';

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
