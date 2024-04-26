<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $courses=[
            'Business Management',
            'Data Science',
            'Software Engineering'
        ];

        return [
            'student_name' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'student_address' => fake()->address(),
            'student_course' => fake()->randomElement($courses)
        ];
    }
}
