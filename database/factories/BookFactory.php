<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'authorid' => rand(0, 10),
            'title' => $this->faker->name(),
            'ISBN' => $this->faker->name(),
            'pub_year' => rand(0, 6),
            'avaliable' => rand(0, 4),
        ];
    }
}
