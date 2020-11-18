<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserAmanahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('amanah_user')->truncate();

        DB::table('amanah_user')->insert([
            'user_id' => 1,    
            'amanah_id' => 7,    
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
