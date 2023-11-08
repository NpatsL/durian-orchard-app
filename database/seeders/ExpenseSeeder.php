<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Expense;

class ExpenseSeeder extends Seeder
{
    public function run()
    {
        // Expense::create([
        //     'name' => 'Rent',
        //     'date' => now(),
        //     'amount' => 1500.00,
        // ]);

        // Expense::create([
        //     'name' => 'Utilities',
        //     'date' => now(),
        //     'amount' => 500.00,
        // ]);

        $expense = new Expense();
        $expense->name = "จ่ายค่าปุ๋ยบำรุงต้น";
        $expense->date = "2023-3-26";
        $expense->amount = 3000.00;
        $expense->save();

        $expense = new Expense();
        $expense->name = "จ่ายค่าน้ำมันตัดหญ้า";
        $expense->date = "2023-7-14";
        $expense->amount = 300.00;
        $expense->save();

        $expense = new Expense();
        $expense->name = "จ่ายค่าซ่อมเครื่องสูบน้ำ";
        $expense->date = "2023-5-24";
        $expense->amount = 500.00;
        $expense->save();

        $expense = new Expense();
        $expense->name = "จ่ายค่าแรงงาน";
        $expense->date = "2023-6-6";
        $expense->amount = 1000.00;
        $expense->save();

        $expense = new Expense();
        $expense->name = "จ่ายค่าไฟ";
        $expense->date = "2023-11-14";
        $expense->amount = 2500.00;
        $expense->save();

    }
}
