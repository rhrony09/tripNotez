<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void {
        Schema::create('place_opening_hours', function (Blueprint $table) {
            $table->id();
            $table->foreignId('place_id')->constrained();
            $table->foreignId('day_id')->constrained();
            $table->string('opening_time');
            $table->string('colosing_time');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void {
        Schema::dropIfExists('place_opening_hours');
    }
};
