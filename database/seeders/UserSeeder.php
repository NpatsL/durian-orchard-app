<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $user = new User();
        $user->name = 'admin';
        $user->email = 'admin@gmail.com';
        $user->password = Hash::make("admin");
        //$user->role = User::ROLE_ADMIN;
        $user->role = 1;
        $user->save();

        $user = new User();
        $user->name = 'employee01';
        $user->email = 'em01@gmail.com';
        $user->password = Hash::make("em01");
        //$user->role = User::ROLE_EMPLOYEE;
        $user->role = 0;
        $user->save();

        $user = new User();
        $user->name = 'employee02';
        $user->email = 'em02@gmail.com';
        $user->password = Hash::make("em02");
        // $user->role = User::ROLE_EMPLOYEE;
        $user->role = 0;
        $user->save();
        
        $user = new User();
        $user->name = 'employee03';
        $user->email = 'em03@gmail.com';
        $user->password = Hash::make("em03");
        // $user->role = User::ROLE_EMPLOYEE;
        $user->role = 0;
        $user->save();


        User::factory(10)->create();
    }
}
