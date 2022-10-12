<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formateur extends Model
{
    use HasFactory;
    protected $table = "formateurs";
    protected $fillable=[
        'matricule',
        'nom',
        'prenom',
        'email',
        'contact',
    ];

    public function vague_filiere_niveau_etudes()
    {
        return $this->belongsToMany(VagueFiliereNiveauEtude::class, VagueFormateur::class,"formateur_id","vgflnv_id");
    }

    public function cours_vg_niveau_etudes()
    {
        return $this->belongsToMany(CoursVgNiveauEtude::class, CourFormateur::class,"formateur_id","cvgnv_id");
    }

}
