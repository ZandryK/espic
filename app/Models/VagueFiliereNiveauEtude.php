<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VagueFiliereNiveauEtude extends Model
{
    use HasFactory;
    protected $table ="vague_filiere_niveau_etudes";
    protected $fillable = [
        'filiere_niveau_etude_id',
        'vague_id',

    ];

    public function cours()
    {
        return $this->belongsToMany(Cour::class, CoursVgNiveauEtude::class,"vg_niveau_etude_id","cour_id");
    }


    public function vague()
    {
        return $this->belongsTo(Vague::class);
    }

    public function filiere_niveau_etude()
    {
        return $this->belongsTo(FiliereNiveauEtude::class,'filiere_niveau_etude_id');
    }

    public function formateurs()
    {
        return $this-> belongsToMany(Formateur::class, VagueFormateur::class,'vgflnv_id','formateur_id');
    }

    public function etudiants()
    {
        return $this->belongsToMany(Etudiant::class,EtudiantVague::class);
    }
}
