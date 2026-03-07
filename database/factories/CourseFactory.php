<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Course;
use faker\Generator as Faker;

class CourseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(4),
            'cover' => $this->faker->imageUrl(640, 480, 'education', true),
            'content' => $this->faker->paragraph(3), 
            'robotics_kit' => $this->faker->randomElement(['StarterKit', 'Educational Robotics Kit', 'Kit5']),
            'group_id' => $this->faker->numberBetween(1, 3), 
        ];
    }
}