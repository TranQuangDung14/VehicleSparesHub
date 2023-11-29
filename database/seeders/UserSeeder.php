<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            'name' => 'Quang Dũng',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('12345678'),
            'role'  =>1,
        ]);
        DB::table('users')->insert([
            'name' => 'Quang Dũng',
            'email' => 'dung@gmail.com',
            'password' => Hash::make('12345678'),
            'role'  =>2,
        ]);
        DB::table('vs_customer')->insert([
            'name' => 'Quang Dũng',
            'user_id' => 2,
            'email' => 'dung@gmail.com',
            'adress' => 'Địa chỉ',
            'number_phone' => '1234567890',
        ]);
    }
}
