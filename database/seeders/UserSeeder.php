<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->truncate();
        
        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'admin@admin',
            'password' => Hash::make('admin'),
            'role' => 'ADMIN',
            'member_status' => 'Senior',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('users')->insert([
            'name' => 'Member',
            'email' => 'member@member',
            'password' => Hash::make('member'),
            'role' => 'MEMBER',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
