<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Diary>
 */
class DiaryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'year' => $this->faker->numberBetween(2010, 2022),
            'month' => $this->faker->month(),
            'day' => $this->faker->dayOfMonth(),
            'note' => $this->faker->realText(200, 2),
            'created_at' => $this->faker->dateTimeBetween('-10 years', 'now', null),
            'updated_at' => $this->faker->dateTimeBetween('-10 years', 'now', null),
        ];
    }
}
