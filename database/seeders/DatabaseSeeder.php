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
        // \App\Models\User::factory(10)->create();
        $this->call(UserSeeder::class);
        $this->call(AmanahSeeder::class);
        $this->call(DivisionSeeder::class);
        $this->call(GraduateSeeder::class);
        $this->call(JobSeeder::class);
        $this->call(MajorSeeder::class);
        $this->call(SpecializationSeeder::class);
        $this->call(UserAmanahSeeder::class);
        $this->call(SosmedSeeder::class);
    }
}