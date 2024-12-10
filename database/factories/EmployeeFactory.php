<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\employee>
 */
class EmployeeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake() -> name,
            'designation' => fake() -> jobTitle(),
            'joining_date' => fake() -> date('Y-m-d'),
            'salary' => fake() -> randomFloat(2,10000,20000),
            'email' => fake() -> email(),
            'mobile_no' => fake() -> phoneNumber(),
            'address' => fake() -> address(),
        ];
    }
}
