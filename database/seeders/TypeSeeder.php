<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Type::create([
            'id' => 1,
            'name' => 'Sportcar',
            'description' => 'Sportcars are vehicles designed to deliver a dynamic and enjoyable driving experience with a focus on handling and performance. They typically feature aerodynamic designs, powerful engines, and excellent maneuverability.',
        ]);

        Type::create([
            'id' => 2,
            'name' => 'Supercar',
            'description' => 'Supercars offer higher speeds and more advanced technology compared to sportcars, making them more exclusive. They have extremely powerful engines, lightweight materials, and advanced technological features.',
        ]);

        Type::create([
            'id' => 3,
            'name' => 'Hypercar',
            'description' => 'Hypercars represent the pinnacle of automotive performance, featuring the latest innovations, extraordinary speeds, and limited production. They offer cutting-edge technology, highly aerodynamic designs, and extremely high prices, making them the most exclusive of the three categories.',
        ]);

        Type::create([
            'id' => 4,
            'name' => 'Electric Car',
            'description' => 'Electric cars are vehicles powered entirely by electric motors using energy stored in rechargeable batteries. Unlike traditional internal combustion engine vehicles, electric cars produce no tailpipe emissions, making them environmentally friendly. They offer several advantages, including lower operating costs, reduced greenhouse gas emissions, and a quieter driving experience. Electric cars can be charged at home or at public charging stations, and advancements in battery technology continue to improve their range and charging times.',
        ]);
    }
}
