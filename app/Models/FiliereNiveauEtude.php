<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FiliereNiveauEtude extends Model
{
    use HasFactory;

    protected $fillable =[
        'filiere_id',
        'niveau_etude_id'
    ];

    
    public function vagues(){
        return $this->belongsToMany(Vague::class,VagueFiliereNiveauEtude::class,"filiere_niveau_etude_id","vague_id");
    }

    public function filiere(){
        return $this->belongsTo(Filiere::class);
    }

    public function niveau_etude(){
        return $this->belongsTo(NiveauEtude::class);
    }
}
