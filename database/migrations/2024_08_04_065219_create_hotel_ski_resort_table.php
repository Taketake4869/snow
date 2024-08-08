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
        Schema::create('hotel_ski_resort', function (Blueprint $table) {
            $table->id();
            $table->foreignId('ski_resort_id')->constrained('ski_resorts')->onDelete('cascade');   //参照先のテーブル名を
            $table->foreignId('hotel_id')->constrained('hotels')->onDelete('cascade');    //constrainedに記載
            $table->integer('distance');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hotel_ski_resort');
    }
};
