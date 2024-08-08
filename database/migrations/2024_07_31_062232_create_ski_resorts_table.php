<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('ski_resorts', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->double('latitude',9,6)->nullable(true);
            $table->double('longitude',9,6)->nullable(true);
            $table->boolean('snowfall');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ski_resorts');
    }
};
