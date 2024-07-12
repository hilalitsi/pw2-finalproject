<?php

namespace Database\Seeders;

use App\Models\Car;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Car::create([
            'id' => 1,
            'name' => 'BMW Z4',
            'photo' => 'car-01.jpg',
            'type_id' => 1,
            'cost_per_day' => 5000000,
            'year' => 2002,
            'license_plate' => 'B 1234 FK'
        ]);

        Car::create([
            'id' => 2,
            'name' => 'Porche 911',
            'photo' => 'car-02.jpeg',
            'type_id' => 2,
            'cost_per_day' => 7000000,
            'year' => 2011,
            'license_plate' => 'B 5678 AC',
        ]);

        Car::create([
            'id' => 3,
            'name' => 'Bugatti Chiron',
            'photo' => 'car-03.jpg',
            'type_id' => 3,
            'cost_per_day' => 10000000,
            'year' => 2016,
            'license_plate' => 'B 0987 EE',
        ]);

        Car::create([
            'id' => 4,
            'name' => 'Hyundai Ioniq',
            'photo' => 'car-04.jpg',
            'type_id' => 4,
            'cost_per_day' => 3000000,
            'year' => 2016,
            'license_plate' => 'B 9233 GO',
        ]);
    }
}
