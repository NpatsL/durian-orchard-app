<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = new User();
        $user->name = 'owner';
        $user->username = 'owner';
        // $user->email = 'owner@gmail.com';
        $user->role = 'owner';
        $user->password = bcrypt('password');
        $user->save();

        $user = new User();
        $user->name = 'user1';
        $user->username = 'user1';
        // $user->email = 'user1@gmail.com';
        $user->role = 'user';
        $user->password = bcrypt('password');
        $user->save();
    }
}
