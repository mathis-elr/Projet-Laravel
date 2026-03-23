<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run()
    {
        $this->call([
            EmployeSeeder::class,
            VoitureSeeder::class,
            CampuseSeeder::class,
        ]);


        DB::table('frequente')->insert([
            [
                'id_employe' => 1,
                'id_campuses' => 1,
            ],
        ]);
    }
}
