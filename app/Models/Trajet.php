<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Trajet extends Model
{
    protected $fillable = ["date_time_depart","date_time_arrive", "id_campuses_depart", "id_campuses_arrivee", "id_voiture"];

    public function campuseDep()
    {
        return $this->belongsTo(Campuse::class,"id_campuses_depart");
    }

    public function campuseArr()
    {
        return $this->belongsTo(Campuse::class,"id_campuses_arrivee");
    }

    public function voiture()
    {
        return $this->belongsTo(Voiture::class,"id_voiture");
    }

    public function employes()
    {
        return $this->belongsToMany(Employe::class,'est_passager',"id_employe","id");
    }
}
