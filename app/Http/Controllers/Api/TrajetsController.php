<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Trajet;
use Illuminate\Http\Request;

class TrajetsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $trajets = Trajet::all();
        return $trajets;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            "date_time_depart" => "required",
            "date_time_arrive" => "required",
            "id_campuses_depart" => "required|exists:campuseDep,id",
            "id_campuses_arrivee" => "required|exists:campuseArr,id",
            "id_voiture" => "required|exists:voiture,id",
        ]);

        $trajet = Trajet::create($validate);
        return response()->json($trajet, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $trajet = Trajet::findOrFail($id);
        return $trajet;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validate = $request->validate([
            "date_time_depart" => "required",
            "date_time_arrive" => "required",
            "id_campuses_depart" => "required|exists:campuseDep,id",
            "id_campuses_arrivee" => "required|exists:campuseArr,id",
            "id_voiture" => "required|exists:voiture,id",
        ]);

        $trajet = Trajet::findOrFail($id);
        $trajet->update($validate);
        return response()->json($trajet, 201);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Trajet::destroy($id);
        return response()->json(
            ["message" => "Trajet surpprimé avec succès"],
        200);
    }
}
