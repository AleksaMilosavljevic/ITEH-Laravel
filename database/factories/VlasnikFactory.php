<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class VlasnikFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'imePrezime' => $this->faker->name(),
            'adresa' => $this->faker->streetAddress(),
            'iskustvo' => $this->faker->numberBetween($min = 0, $max = 50),
        ];
    }
}
