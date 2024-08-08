<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use DateTime;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'test_user',
            'email' => 'test3@example.com',
            'password' => Hash::make('testpass'), 
            'address' => 'adress',
            'latitude' => NULL,
            'longitude' => NULL,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
    }
}
