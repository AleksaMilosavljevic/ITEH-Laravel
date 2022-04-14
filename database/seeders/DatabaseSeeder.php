<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\MotorSeeder;
use Database\Seeders\VlasnikSeeder;
use Database\Seeders\ProizvodjacSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $proizvodjacS = new ProizvodjacSeeder();
        $vlasnikS = new VlasnikSeeder();
        $motorS = new MotorSeeder();

        $proizvodjacS->run();
        $vlasnikS->run();
        $motorS->run();
    }
}
