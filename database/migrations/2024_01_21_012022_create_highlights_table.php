<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void {
        Schema::create('highlights', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('icon');
            $table->timestamps();
        });

        $highlights = [
            [
                'name' => 'Free Wifi',
                'icon' => 'fa-solid fa-wifi'
            ],
            [
                'name' => 'Credit Card',
                'icon' => 'fa-regular fa-credit-card'
            ],
            [
                'name' => 'Airport Taxi',
                'icon' => 'fa-solid fa-taxi'
            ],
            [
                'name' => 'Toilet',
                'icon' => 'fa-solid fa-toilet'
            ],
            [
                'name' => 'Car Parking',
                'icon' => 'fa-solid fa-car-side'
            ],
            [
                'name' => 'Garden',
                'icon' => 'fa-regular fa-house-tree'
            ],
            [
                'name' => 'Air-conditional',
                'icon' => 'fa-regular fa-air-conditioner'
            ]
        ];

        foreach ($highlights as $highlight) {
            DB::table('highlights')->insert([
                'name' => $highlight['name'],
                'icon' => $highlight['icon']
            ]);
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void {
        Schema::dropIfExists('highlights');
    }
};
