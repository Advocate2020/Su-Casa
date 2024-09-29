<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::insert([
            [
            'name' => 'Dayle',
            'surname' => 'Anderson',
            'email' => 'admin@sucasa.com',
            'role' => 'admin',
            'password' => Hash::make('adminPass@word1'),
            ],
            [
                'name' => 'Sipho',
                'surname' => 'Magatyeni',
                'email' => 'user@sucasa.com',
                'role' => 'user',
                'password' => Hash::make('userPass@word1'),
            ],
        ]);
    }
}
