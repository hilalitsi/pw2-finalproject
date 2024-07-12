<?php

namespace Database\Seeders;

use App\Models\Seeders;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            CarSeeder::class,
            TypeSeeder::class,
            LoanSeeder::class,
            ClientSeeder::class
        ]);
    }
}
