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
        Schema::create('schedules', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('sport_id');
            $table->foreign('sport_id')->references('id')->on('sports');

            $table->unsignedBigInteger('first_country');
            $table->foreign('first_country')->references('id')->on('countries');

            $table->unsignedBigInteger('second_country');
            $table->foreign('second_country')->references('id')->on('countries');

            $table->unsignedBigInteger('event_id');
            $table->foreign('event_id')->references('id')->on('events')->cascadeOnDelete()->cascadeOnUpdate();

            $table->unsignedBigInteger('playground_id');
            $table->foreign('playground_id')->references('id')->on('playgrounds')->cascadeOnUpdate();
            $table->time('start_time');
            $table->time('end_time');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('schedules');
    }
};
