<?php

namespace App\Http\Controllers;

use App\Models\Employe;
use App\Models\Voiture;
use Illuminate\Http\Request;

class EmployesController extends Controller
{
    // GET
    public function index()
    {
        $employes = Employe::all();
        return view("employes.index",compact('employes'));
    }

    // GET
    public function show($idEmploye)
    {
        $employe = Employe::findOrFail($idEmploye);
        $nbVoiture = $employe->nombreVoiture();
        $statut = $employe->statutEmploye($nbVoiture);
        $voitures = $employe->voiture()->get();

        return view("employes.show", compact('employe', 'nbVoiture', 'statut', 'voitures'));
    }

    public function verifier($idEmploye)
    {
        $modele = $_GET['modele'] ?? null;
        $employe = Employe::findOrFail($idEmploye);

        $modeleExiste = $employe->voiture()->where('modele', $modele)->exists() ? "Yes" : "No";
        $nbVoiture = $employe->nombreVoiture();
        $statut = $employe->statutEmploye($nbVoiture);
        $voitures = $employe->voiture()->get();

        return view("employes.show", compact('employe', 'nbVoiture', 'statut', 'voitures', 'modeleExiste'));
    }
}
