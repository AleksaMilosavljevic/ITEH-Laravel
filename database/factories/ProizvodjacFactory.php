<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProizvodjacFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'kompanija' => $this->faker->company(),
            'godinaOsnivanja' => $this->faker->numberBetween($min = 1950, $max = date("Y")),
            'website' => $this->faker->url(),
        ];
    }
}
