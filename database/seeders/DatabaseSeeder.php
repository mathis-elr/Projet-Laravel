<?php

namespace Database\Seeders;

use App\Models\Campuse;
use App\Models\Employe;
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

        // Créer des relations aléatoires entre employés et campus
        DB::table('frequente')->truncate();
        $employes = Employe::all();
        $campuses = Campuse::all();

        foreach ($employes as $employe) {
            // Attacher 1 à 2 campus aléatoires par employé
            $employe->campuses()->syncWithoutDetaching(
                $campuses->random(min(2, $campuses->count()))->pluck('id')
            );
        }
    }
}
