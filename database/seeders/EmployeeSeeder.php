<?php

namespace Database\Seeders;

use App\Models\Employee;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $employee = new Employee();
        $employee->name = 'owner';
        $employee->username = 'owner';
        $employee->email = 'owner@gmail.com';
        $employee->role = 'owner';
        $employee->password = bcrypt('password');
        $employee->save();

        $employee = new Employee();
        $employee->name = 'employee1';
        $employee->username = 'employee1';
        $employee->email = 'employee1@gmail.com';
        $employee->role = 'employee';
        $employee->password = bcrypt('password');
        $employee->save();
    }
}
