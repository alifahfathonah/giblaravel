<?php

namespace Database\Seeders;

use Faker\Factory;
use Illuminate\Support\Str;
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

        $fake = Factory::create('id_ID');
        for ($i=0; $i < 100; $i++) { 
        $fakeFirstName = $fake->firstName();
        $fakeLastName = $fake->lastName();
            DB::table('users')->insert([
                'fullname' => $fakeFirstName . ' ' . $fakeLastName,
                'name' => $fakeFirstName,
                'email' => Str::lower($fakeFirstName . $fakeLastName . rand(1,99) . '@gmail.com'),
                'password' => Hash::make('member'),
                'created_at' => now(),
                'updated_at' => now(),
            ]); 
        }
    }
}
