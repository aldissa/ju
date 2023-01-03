<?php

namespace Database\Seeders;

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
        \App\Models\student::create([
            'name' => 'Muhammad Aldi',
            'class' => 'RPL 1'
        ]); 
        // \App\Models\User::factory(10)->create();
    }
}
