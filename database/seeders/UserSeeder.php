<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'id' => 1,
            'fullname' => 'Hilal Hamdani',
            'username' => 'Hilal',
            'password' => 'hilal1234',
            'email' => 'hilal@gmail.com',
        ]);

        User::create([
            'id' => 2,
            'fullname' => 'Daffa Andika',
            'username' => 'Daffa',
            'password' => 'daffa1234',
            'email' => 'daffa@gmail.com',
        ]);

        User::create([
            'id' => 3,
            'fullname' => 'Nabil Rafly',
            'username' => 'Nabil',
            'password' => 'nabil1234',
            'email' => 'nabil@gmail.com',
        ]);

        User::create([
            'id' => 4,
            'fullname' => 'Rasyid Mubarok',
            'username' => 'Rasyid',
            'password' => 'rasyid1234',
            'email' => 'rasyid@gmail.com',
        ]);
    }
}
