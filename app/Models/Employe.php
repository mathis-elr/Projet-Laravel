<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employe extends Model
{
    use HasFactory;

    protected $fillable = ["nom", "prenom", "email"];

    public function voiture()
    {
        return $this->hasMany(Voiture::class, 'id_employe');
    }

    public function trajets()
    {
        return $this->belongsToMany(Trajet::class, 'est_passager', 'id_trajet');
    }

    public function campuses()
    {
        return $this->belongsToMany(Campuse::class, 'frequente', 'id_employe','id_campuses');
    }

    public function nombreVoiture()
    {
        return $this->voiture()->count();
    }

    public function statutEmploye($nombreVoiture)
    {
        if($nombreVoiture == 0)
        {
            $statut = "Pas conducteur";
        }
        elseif ($nombreVoiture == 1)
        {
            $statut = "Conducteur";
        }
        else{
            $statut = "Conducteur très actif";
        }

        return $statut;
    }
}
