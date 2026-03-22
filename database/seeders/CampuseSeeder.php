<?php

namespace Database\Seeders;

use App\Models\Campuse;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CampuseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Campuse::create([
            "description" => 'une description campus',
            "adresse" => '44 rue defifi, Land',
            "type" => 'un type de campus'
        ]);
    }
}
