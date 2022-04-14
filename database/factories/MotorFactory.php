<?php

namespace Database\Factories;

use App\Models\Proizvodjac;
use App\Models\Vlasnik;
use Illuminate\Database\Eloquent\Factories\Factory;

class MotorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'model' => strtoupper($this->faker->word()),
            'godinaProizvodnje' => $this->faker->numberBetween($min = 1950, $max = date("Y")),
            'cena' => $this->faker->randomNumber($nbDigits = 4, $strict = true),
            'proizvodjac_id' => Proizvodjac::factory(),
            'vlasnik_id' => Vlasnik::factory()
        ];
    }
}
