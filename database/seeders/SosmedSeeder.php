<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SosmedSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sosmeds')->truncate();
        
        DB::table('sosmeds')->insert([
            'name' => 'Facebook',
            'created_at' => now(),
            'updated_at' => now(),
        ]);   
        
        DB::table('sosmeds')->insert([
            'name' => 'Instagram',
            'created_at' => now(),
            'updated_at' => now(),
        ]);   
        
        DB::table('sosmeds')->insert([
            'name' => 'YouTube',
            'created_at' => now(),
            'updated_at' => now(),
        ]);   
        
        DB::table('sosmeds')->insert([
            'name' => 'Twitter',
            'created_at' => now(),
            'updated_at' => now(),
        ]);   
    }
}
