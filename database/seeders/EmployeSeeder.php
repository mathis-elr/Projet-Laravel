<?php

namespace Database\Seeders;

use App\Models\Employe;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EmployeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Employe::create([
            'nom' => 'Dupont',
            'prenom' => 'Jean',
            'email' => 'jean@test.fr'
        ]);

        Employe::create([
            'nom' => 'Durand',
            'prenom' => 'Marie',
            'email' => 'marie@test.fr'
        ]);

        Employe::create([
            'nom' => 'Eloire',
            'prenom' => 'Mathis',
            'email' => 'mathis@test.fr'
        ]);

        \App\Models\Employe::create([
            'nom' => 'Dubois',
            'prenom' => 'Raphael',
            'email' => 'raphael@test.fr'
        ]);
    }
}
