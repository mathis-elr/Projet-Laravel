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
    public function run()
    {
        Campuse::factory(3)->create();
    }
}
