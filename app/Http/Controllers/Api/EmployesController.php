<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Employe;
use Illuminate\Http\Request;

class EmployesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $employes = Employe::all();
        return $employes;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $valide = $request->validate([
            "nom" => "required",
            "prenom" => "required",
            "email" => "required|email|unique:employes,email",
        ]);

        $employe = Employe::create($valide);
        return response()->json($employe, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return Employe::findOrFail($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $valide = $request->validate([
            "nom" => "required",
            "prenom" => "required",
            "email" => "required|email|unique:employe,email,".$id,
        ]);

        $employe = Employe::findOrFail($id);
        $employe->update($valide);
        return response()->json($employe, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Employe::destroy($id);
        return response()->json([
            "message" => "Employé supprimé avec succès"
        ]);
    }
}
