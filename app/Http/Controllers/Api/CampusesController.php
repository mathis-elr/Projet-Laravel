<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Campuse;
use Illuminate\Http\Request;

class CampusesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $campuses = Campuse::all();
        return $campuses;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            "description" => "required",
            "adresse" => "required",
            "type" => "required",
        ]);

        $campuse = Campuse::create($validate);
        return response()->json($campuse, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $campuse = Campuse::findOrfail($id);
        return $campuse;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validate = $request->validate([
            "description" => "required",
            "adresse" => "required",
            "type" => "required",
        ]);

        $campuse = Campuse::findOrfail($id);
        $campuse->update($validate);
        return response()->json($campuse, 201);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Campuse::destroy($id);
        return response()->json(
            ["message" => "Campuse supprimé vec succès"],
            200);
    }
}
