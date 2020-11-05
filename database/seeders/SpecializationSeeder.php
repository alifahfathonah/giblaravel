<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SpecializationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('specializations')->truncate();
        
        for ($i=0; $i < 20; $i++) { 
            DB::table('specializations')->insert([
                'name' => 'Specialization ' . Str::random(5),
                'created_at' => now(),
                'updated_at' => now(),
            ]);   
        }
    }
}
