<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'nama' => 'laysha',
            'phone' => '1234567890',
            'password' => Hash::make('password123'),
        ]);

        User::create([
            'nama' => 'fitri',
            'phone' => '0987654321',
            'password' => Hash::make('password123'),
        ]);
    }
}
