<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Diary>
 */
class ExpensesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'category' => $this->faker->numberBetween(1, 7),
            'date' => $this->faker->date(),
            'sum' => $this->faker->numberBetween(50, 750),
            'comment' => $this->faker->realText(10, 2),
            'created_at' => $this->faker->dateTimeBetween('-10 years', 'now', null),
            'updated_at' => $this->faker->dateTimeBetween('-10 years', 'now', null),
        ];
    }
}
