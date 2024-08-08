<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class HotelSkiResortSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('hotel_ski_resort')->insert([
                'hotel_id'=> 1,
                'ski_resort_id' => 1,
                'distance'=> 3,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
    }
}
