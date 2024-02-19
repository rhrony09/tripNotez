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
        Schema::create('cities', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });

        $cities = [
            'Bagerhat',
            'Bandarban',
            'Barisal',
            'Bhola',
            'Bogura',
            'Brahmanbaria',
            'Chandpur',
            'Chapainawabganj',
            'Chattogram',
            'Chuadanga',
            'Comilla',
            'Coxsbazar',
            'Dhaka',
            'Dinajpur',
            'Faridpur',
            'Feni',
            'Gaibandha',
            'Gazipur',
            'Gopalganj',
            'Habiganj',
            'Jashore',
            'Jhalakathi',
            'Jhenaidah',
            'Joypurhat',
            'Kishoreganj',
            'Khagrachhari',
            'Khulna',
            'Kurigram',
            'Kushtia',
            'Lakshmipur',
            'Lalmonirhat',
            'Magura',
            'Manikganj',
            'Madaripur',
            'Meherpur',
            'Moulvibazar',
            'Munshiganj',
            'Mymensingh',
            'Narail',
            'Narayanganj',
            'Natore',
            'Nawabganj',
            'Netaiganj',
            'Netrokona',
            'Nilphamari',
            'Noakhali',
            'Pabna',
            'Panchagarh',
            'Patuakhali',
            'Pirojpur',
            'Rajbari',
            'Rajshahi',
            'Rangamati',
            'Rangpur',
            'Satkhira',
            'Sherpur',
            'Shariatpur',
            'Sirajganj',
            'Sylhet',
            'Sunamganj',
            'Tangail',
            'Thakurgaon',
        ];

        foreach ($cities as $city) {
            DB::table('cities')->insert([
                'name' => $city
            ]);
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void {
        Schema::dropIfExists('cities');
    }
};
