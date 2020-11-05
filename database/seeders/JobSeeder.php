<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('jobs')->truncate();
        
        for ($i=0; $i < 15; $i++) { 
            DB::table('jobs')->insert([
                'name' => 'Job ' . Str::random(5),
                'created_at' => now(),
                'updated_at' => now(),
            ]);   
        }
    }
}
