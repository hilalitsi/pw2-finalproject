<?php

namespace Database\Seeders;

use App\Models\Loan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LoanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Loan::create([
            'id' => 1,
            'car_id' => 1,
            'user_id' => 2,
            'loan_date' => '2010-12-06',
            'return_date' => '2010-12-09',
            'total_cost' => 15000000,
            'status' => 'Available',
        ]);

        Loan::create([
            'id' => 2,
            'car_id' => 2,
            'user_id' => 2,
            'loan_date' => '2012-02-18',
            'return_date' => '2012-02-17',
            'total_cost' => 14000000,
            'status' => 'Available',
        ]);

        Loan::create([
            'id' => 3,
            'car_id' => 3,
            'user_id' => 3,
            'loan_date' => '2020-07-29',
            'return_date' => '2020-07-30',
            'total_cost' => 10000000,
            'status' => 'Unavailable',
        ]);

        Loan::create([
            'id' => 4,
            'car_id' => 4,
            'user_id' => 4,
            'loan_date' => '2023-01-20',
            'return_date' => '2023-01-26',
            'total_cost' => 18000000,
            'status' => 'Unavailable',
        ]);
    }
}
