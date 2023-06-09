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
        Schema::create('playgrounds', function (Blueprint $table) {
            $table->id();
            $table->char('zone', 8);
            $table->unsignedBigInteger('stadium_id');
            $table->foreign('stadium_id')->references('id')->on('stadiums');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('playgrounds');
    }
};
