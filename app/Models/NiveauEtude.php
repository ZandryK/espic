<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NiveauEtude extends Model
{
    use HasFactory;
    protected $fillable = [
        'designation'
    ];

    public function filieres()
    {
        return $this->belongsToMany(Filiere::class, FiliereNiveauEtude::class,'niveau_etude_id','filiere_id');
    }
}
