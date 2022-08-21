<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\TermsConditions;

class TermsConditionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $terms_conditions = [
            [
                'title' => 'Terms & Conditions', 
                'description' => 'This is the test descriptions', 
                'created_at' => now(), 
            ]

        ];

        TermsConditions::insert($terms_conditions);
    }
}
