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
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('key');
            $table->string('value')->nullable();
            $table->timestamps();
        });

        $data = [
            'site_name' => 'TripNotez',
            'site_tagline' => 'Explore the heaven of foods.',
            'email' => 'example@email.com',
            'phone' => '+8801XXXXXXXXX',
            'site_primary_color' => '#186F65',
            'site_accent_color' => '#B5CB99',
            'site_secondary_color' => '#FCE09B',
            'site_secondary_accent_color' => '#B2533E   ',
            'logo_dark' => 'logo-dark.png',
            'logo_light' => 'logo-light.png',
            'favicon' => 'favicon.png',
            'header_meta_tags' => '',
        ];

        foreach ($data as $key => $value) {
            DB::table('settings')->insert([
                'key' => $key,
                'value' => $value
            ]);
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void {
        Schema::dropIfExists('settings');
    }
};
