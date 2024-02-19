<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder {
    /**
     * Run the database seeds.
     */
    public function run(): void {
        $users = [];
        $users[0] = User::create([
            'name' => 'RH Rony',
            'email' => 'rhrony0009@gmail.com',
            'mobile' => '01839096877',
            'password' => Hash::make('12345678'),
            'role_id' => 1,
            'username' => 'rony'
        ]);

        $users[1] = User::create([
            'name' => 'Shahedul Islam Efty',
            'email' => 'efty@imbdagency.com',
            'mobile' => '01797463378',
            'password' => Hash::make('12345678'),
            'role_id' => 2,
            'username' => 'efty'
        ]);

        $users[2] = User::create([
            'name' => 'Mahadi Hasan Fahim',
            'email' => 'fahim@imbdagency.com',
            'mobile' => '01881012561',
            'password' => Hash::make('12345678'),
            'role_id' => 3,
            'username' => 'fahim'
        ]);

        $users[3] = User::create([
            'name' => 'Shamim Ahmed',
            'email' => 'shamimsrk02@gmail.com',
            'mobile' => '01616531952',
            'password' => Hash::make('12345678'),
            'role_id' => 4,
            'username' => 'Shamim'
        ]);
    }
}
