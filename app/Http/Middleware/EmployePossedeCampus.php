<?php

namespace App\Http\Middleware;

use App\Models\Employe;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class EmployePossedeCampus
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $employe = Employe::find($request->route('id'));
        if(!$employe || $employe->campuses->count() == 0)
        {
            return redirect()->route('employes.index')
                ->with('erreur', "L'employe doit être associé à au moins un campus pour le consulter");
        }
        return $next($request);
    }
}
