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

        DB::table('graduates')->insert([
            'name' => 'SD/MI/sederajat',
            'created_at' => now(),
            'updated_at' => now(),
        ]);   

        DB::table('graduates')->insert([
            'name' => 'SMP/MTs/Sederajat',
            'created_at' => now(),
            'updated_at' => now(),
        ]);   

        DB::table('graduates')->insert([
            'name' => 'SMA/SMK/MA/sederajat',
            'created_at' => now(),
            'updated_at' => now(),
        ]);   

        $dnum = 1; 
        
        for ($i=0; $i < 3; $i++) {   
            DB::table('graduates')->insert([
                'name' => 'D' . $dnum++,
                'created_at' => now(),
                'updated_at' => now(),
            ]);   
        }

        DB::table('graduates')->insert([
            'name' => 'D4',
            'created_at' => now(),
            'updated_at' => now(),
        ]);   

        $snum = 1; 

        for ($i=0; $i < 3; $i++) {
            DB::table('graduates')->insert([
                'name' => 'S' . $snum++,
                'created_at' => now(),
                'updated_at' => now(),
            ]);   
        }

    }
}
