<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class CommentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('comments')->insert([
                'user_id'=> 1,
                'ski_resort_id' => 1,
                'condition' => 'condition',
                'recommended_course'=> 'recommended_course',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at'=> NULL,
         ]);
    }
}
