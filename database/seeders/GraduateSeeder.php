<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GraduateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('graduates')->truncate();
        
        for ($i=0; $i < 3; $i++) {
            $num = 1; 
            DB::table('graduates')->insert([
                'name' => 'S' . $num++,
                'created_at' => now(),
                'updated_at' => now(),
            ]);   
            DB::table('graduates')->insert([
                'name' => 'D' . $num++,
                'created_at' => now(),
                'updated_at' => now(),
            ]);   
        }
        DB::table('graduates')->insert([
            'name' => 'D4',
            'created_at' => now(),
            'updated_at' => now(),
        ]);   

        DB::table('graduates')->insert([
            'name' => 'SMA',
            'created_at' => now(),
            'updated_at' => now(),
        ]);   

        DB::table('graduates')->insert([
            'name' => 'SMP',
            'created_at' => now(),
            'updated_at' => now(),
        ]);   

        DB::table('graduates')->insert([
            'name' => 'SD',
            'created_at' => now(),
            'updated_at' => now(),
        ]);   
    }
}
