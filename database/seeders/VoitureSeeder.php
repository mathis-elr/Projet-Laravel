<?php

namespace Database\Seeders;

use App\Models\Voiture;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VoitureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Voiture::factory(5)->create();
    }
}
