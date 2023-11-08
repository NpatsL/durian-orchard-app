<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Income;

class IncomeSeeder extends Seeder
{
    public function run()
    {
        // Income::create([
        //     'name' => 'Salary',
        //     'date' => now(),
        //     'amount' => 5000.00,
        // ]);

        // Income::create([
        //     'name' => 'Freelance Payment',
        //     'date' => now(),
        //     'amount' => 2000.00,
        // ]);

        $income = new Income();
        $income->name = "ขายทุเรียนหมอนทอง 1000 กิโลกรัม";
        $income->date = "2023-11-5";
        $income->amount = 100000.00;
        $income->save();

        $income = new Income();
        $income->name = "ขายทุเรียนชะนี 500 กิโลกรัม";
        $income->date = "2023-5-8";
        $income->amount = 50000.00;
        $income->save();

        $income = new Income();
        $income->name = "ขายทุเรียนชะนี 300 กิโลกรัม";
        $income->date = "2023-6-8";
        $income->amount = 25000.00;
        $income->save();

        $income = new Income();
        $income->name = "ขายทุเรียนหมอนทอง 645 กิโลกรัม";
        $income->date = "2023-5-29";
        $income->amount = 58000.00;
        $income->save();

        $income = new Income();
        $income->name = "ขายทุเรียนชะนี 400 กิโลกรัม";
        $income->date = "2023-4-25";
        $income->amount = 35000.00;
        $income->save();
    }
}
