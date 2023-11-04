<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Income;

class IncomeSeeder extends Seeder
{
    public function run()
    {
        Income::create([
            'name' => 'Salary',
            'date' => now(),
            'amount' => 5000.00,
        ]);

        Income::create([
            'name' => 'Freelance Payment',
            'date' => now(),
            'amount' => 2000.00,
        ]);

        
    }
}
