<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AmanahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('amanah')->truncate();
        
        for ($i=0; $i < 20; $i++) { 
            DB::table('amanah')->insert([
                'name' => 'Amanah ' . Str::random(5),
                'created_at' => now(),
                'updated_at' => now(),
            ]);   
        }
    }
}
