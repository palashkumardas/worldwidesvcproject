<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
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
        $users = [
            [
                'first_name' => Str::random(3), 
                'last_name' => Str::random(7), 
                'surname' => Str::random(10), 
                'email' => Str::random(10).'@gmail.com', 
                'password' => Hash::make('password'), 
                'phone' => rand(11111111111,99999999999), 
                'country' => Str::random(7), 
                'gender' => 'MALE', 
                'created_at' => now(), 
            ],
            [
                'first_name' => Str::random(2), 
                'last_name' => Str::random(7), 
                'surname' => Str::random(10), 
                'email' => Str::random(9).'@yahoo.com', 
                'password' => Hash::make('password'), 
                'phone' => rand(11111111111,99999999999),  
                'country' => Str::random(7), 
                'gender' => 'MALE', 
                'created_at' => now(), 
            ],
            [
                'first_name' => Str::random(4), 
                'last_name' => Str::random(7), 
                'surname' => Str::random(8), 
                'email' => Str::random(8).'@outlook.com', 
                'password' => Hash::make('password'), 
                'phone' => rand(11111111111,99999999999), 
                'country' => Str::random(7), 
                'gender' => 'MALE', 
                'created_at' => now(), 
            ],
            [
                'first_name' => Str::random(2), 
                'last_name' => Str::random(8), 
                'surname' => Str::random(10), 
                'email' => Str::random(10).'@worldwide.com', 
                'password' => Hash::make('password'), 
                'phone' => rand(11111111111,99999999999), 
                'country' => Str::random(7), 
                'gender' => 'MALE', 
                'created_at' => now(), 
            ],

        ];

        User::insert($users);
    }
}
