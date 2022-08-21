<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\PrivacyPolicy;

class PrivacyPolicySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $privacy_policy = [
            [
                'title' => 'Privacy Policy', 
                'description' => 'This is the test descriptions', 
                'created_at' => now(), 
            ]

        ];

        PrivacyPolicy::insert($privacy_policy);
    }
}
