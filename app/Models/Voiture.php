<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Voiture extends Model
{
    use HasFactory;

    protected $table = 'voiture';
    protected $fillable = ["modele", "nb_places", "id_employe"];

    public function trajets()
    {
        return $this->hasMany(Trajet::class, "id_voiture");
    }

    public function employe()
    {
        return $this->belongsTo(Employe::class,"id_employe");
    }
}
