<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('access_ski_resort', function (Blueprint $table) {
        $table->foreignId('ski_resort_id')->constrained('ski_resorts');   //参照先のテーブル名を
        $table->foreignId('access_id')->constrained('access');    //constrainedに記載
        $table->primary(['ski_resort_id', 'access_id']);  
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('access_ski_resort');
    }
};
