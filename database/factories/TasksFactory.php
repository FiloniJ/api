<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Diary>
 */
class TasksFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'term' => $this->faker->numberBetween(1, 3),
            'done' => $this->faker->numberBetween(0, 1),
            'date' => $this->faker->date('Y-m-d', '+10 years'),
            'note' => $this->faker->realText(150, 2),
            'created_at' => $this->faker->dateTimeBetween('-10 years', 'now', null),
            'updated_at' => $this->faker->dateTimeBetween('-10 years', 'now', null),
        ];
    }
}
