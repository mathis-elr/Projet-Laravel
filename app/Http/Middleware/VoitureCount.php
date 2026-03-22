<?php

namespace App\Http\Middleware;

use App\Models\Voiture;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class VoitureCount
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $voiture = Voiture::find($request->route('id'));

        if(!$voiture || $voiture->nb_places >= 8)
        {
            return redirect()->route('employes.show', $voiture->id_employe)
                ->with('erreur', 'Visualisation des bus en cours');
        }
        return $next($request);
    }
}
