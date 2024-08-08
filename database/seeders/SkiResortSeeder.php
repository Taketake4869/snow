<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class SkiResortSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('ski_resorts')->insert([
                'name'=> 'ゲレンデ',
                'latitude' => NULL,
                'longitude' => NULL,
                'snowfall'=> false,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at'=> NULL,
         ]);
    }
}
