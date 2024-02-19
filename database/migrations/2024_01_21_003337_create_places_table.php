<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void {
        Schema::create('places', function (Blueprint $table) {
            $table->id();
            $table->foreignId('area_id')->constrained();
            $table->enum('type', ["Restaurant", "Resort"])->default('Restaurant');
            $table->string('name');
            $table->string('price_range', 10);
            $table->longText('description');
            $table->string('address');
            $table->string('mobile');
            $table->string('website')->nullable();
            $table->string('cover_photo');
            $table->foreignId('gallery_id')->constrained();
            $table->foreignId('vendor_id')->nullable()->constrained('users')->onDelete('set null');
            $table->foreignId('added_id')->nullable()->constrained('users')->onDelete('set null');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void {
        Schema::dropIfExists('places');
    }
};
