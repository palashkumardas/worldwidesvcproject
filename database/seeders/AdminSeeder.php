<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
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
                'name' => 'worldwide admin',  
                'email' => 'admin@worldwide.com', 
                'password' => Hash::make('password'), 
                'created_at' => now(), 
            ],
            

        ];

        User::insert($users);
    }
}
