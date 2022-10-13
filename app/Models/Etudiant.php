<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etudiant extends Model
{
    use HasFactory;
    protected $fillable=[
        'matricule',
        'nom',
        'prenom',
        'email',
        'contact',
    ];

    public function filiere_niveau_etudes()
    {
        return $this->belongsToMany(FiliereNiveauEtude::class, EtudiantFiliereNiveauEtude::class, "etudiant_id","filiere_niveau_etude_id");
    }

    public function vague_filiere_niveau_etudes()
    {
        return $this->belongsToMany(VagueFiliereNiveauEtude::class, EtudiantVague::class);
    }
    
}
