<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EtudiantFiliereNiveauEtude extends Model
{
    use HasFactory;
    protected $fillable = [
        'etudiant_id',
        'filiere_niveau_etude_id'
    ];
}
