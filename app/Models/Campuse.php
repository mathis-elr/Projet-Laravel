<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Campuse extends Model
{
    protected $fillable = ["description","adresse","type"];

    public function trajetsDep()
    {
        return $this->hasMany(Trajet::class,"id_campuses_depart");
    }

    public function trajetsArr()
    {
        return $this->hasMany(Trajet::class,"id_campuses_arrive");
    }

    public function employes()
    {
        return $this->belongsToMany(Employe::class,"frequente", 'id_campuses', 'id_employe');
    }
}
