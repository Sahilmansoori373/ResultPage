<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Result>
 */
class ResultFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            
            'name'=>fake()->name(),
            'father_name'=>fake()->name(),
            'mother_name'=>fake()->name(),
            'Maths'=>fake()->numberBetween(50,97),
            'Physics'=>fake()->numberBetween(50,97),
            'Chemistry'=>fake()->numberBetween(50,97),
            'English'=>fake()->numberBetween(50,97),
            'Hindi'=>fake()->numberBetween(50,97),
            // 'address'=>fake()->address(),
            
        ];
    }
}
