<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Voiture;
use Illuminate\Http\Request;

class VoituresController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $voitures = Voiture::all();
        return $voitures;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $valide = $request->validate([
            "modele" => "required",
            "nb_places" => "required",
            "id_employe" => "required|exists:employes,id",
        ]);

        $voiture = Voiture::create($valide);
        return response()->json($voiture, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $voiture = Voiture::findOrFail($id);
        return $voiture;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $valide = $request->validate([
            "marque" => "required",
            "modele" => "required",
            "couleur" => "required",
            "id_employe" => "required|exists:employe,id",
        ]);

        $voiture = Voiture::findOrFail($id);
        $voiture->update($valide);
        return response()->json($voiture, 201);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Voiture::destroy($id);
        return response()->json([
            "message" => "Voiture supprimée avec succès"
        ], 200);
    }
}
