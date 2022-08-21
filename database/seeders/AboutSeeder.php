<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\About;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $about = [
            [
                'title' => 'About Us', 
                'description' => 'This is the test descriptions', 
                'created_at' => now(), 
            ]

        ];

        About::insert($about);
    }
}
