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
        $this->call(GymTableSeeder::class);
        $this->call(FeatureTableSeeder::class);
        $this->call(FeatureGymTableSeeder::class);
        // \App\Models\User::factory(10)->create();
    }
}
