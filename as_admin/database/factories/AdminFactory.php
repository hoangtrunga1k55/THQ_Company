<?php

namespace Database\Factories;

use App\Models\Admin;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

class AdminFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
            'password' => Hash::make('Aa@123456'),
            'admin_role_id' => 1,
            'status' => $this->faker->randomElement([Admin::STATUS_ACTIVE, Admin::STATUS_SUSPENDED]),
            'created_by' => null,
        ];
    }
}
