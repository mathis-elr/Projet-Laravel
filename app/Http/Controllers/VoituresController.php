<?php

namespace App\Http\Controllers;

use App\Models\Voiture;
use Illuminate\Http\Request;

class VoituresController extends Controller
{
    public function show($idVoiture)
    {
        $voiture = Voiture::findOrFail($idVoiture);
        return view('voitures.show', compact('voiture'));
    }

    public function create($id_employe)
    {
        return view('voitures.create', compact('id_employe'));
    }

    public function store(Request $request, $id_employe)
    {
        $nouvelle_voiture = $request->validate([
            'modele' => 'required|string',
            'nb_places' => 'required|numeric',
        ]);

        $nouvelle_voiture['id_employe'] = $id_employe;

        Voiture::create($nouvelle_voiture);

        return redirect()->route('employes.show', $id_employe);
    }
}
