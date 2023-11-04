<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Expense;

class ExpenseSeeder extends Seeder
{
    public function run()
    {
        Expense::create([
            'name' => 'Rent',
            'date' => now(),
            'amount' => 1500.00,
        ]);

        Expense::create([
            'name' => 'Utilities',
            'date' => now(),
            'amount' => 500.00,
        ]);

    }
}
