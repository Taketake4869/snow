<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class HotelsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('hotels')->insert([
                'name'=> 'ゲレンデ',
                'address' => 'adress',
                'max_fee' => 80000,
                'min_fee'=> 5000,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at'=> NULL,
         ]);
    }
}
