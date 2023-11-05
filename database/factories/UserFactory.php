<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    protected $model = User::class;

    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'remember_token' => Str::random(10),
            'role' => 0, 
        ];
    }

    // public function admin()
    // {
    //     return $this->state(function (array $attributes) {
    //         return [
    //             'role' => User::ROLE_ADMIN,
    //         ];
    //     });
    // }

    // public function employee()
    // {
    //     return $this->state(function (array $attributes) {
    //         return [
    //             'role' => User::ROLE_EMPLOYEE,
    //         ];
    //     });
    // }
}