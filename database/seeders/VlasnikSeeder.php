<?php

namespace Database\Seeders;

use App\Models\Vlasnik;
use Illuminate\Database\Seeder;

class VlasnikSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Vlasnik::factory()->count(30)->create();
    }
}
