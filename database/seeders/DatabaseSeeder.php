<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::insert([
            'username' => 'admin',
            'name' => 'Administrator',
            'email' => 'admin@admin.com',
            'password' => '$2y$10$Q/vCLaG/rSe1Dsa3C1SnBuchdjkiLgv1PdqpGKlp20a8GdYIVmkkS',
            'image' => '/img/default-profile.webp',
            'job' => 'Administrator',
            'address' => 'Jl. Administrator',
            'phone' => '081234567890',
            'twitter_profile' => 'https://twitter.com/admin',
            'facebook_profile' =>  'https://facebook.com/admin',
            'instagram_profile' => 'https://instagram.com/admin',
            'linkedin_profile' =>  'https://linkedin.com/admin',
            'type' => 'admin',
            'status' => 'active',
        ]);

        \App\Models\User::factory(10)->create();
        \App\Models\FormKomun::factory(10)->create();
        \App\Models\FormPemas::factory(10)->create();
        \App\Models\FormKeluh::factory(10)->create();
    }
}
