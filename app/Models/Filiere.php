<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Filiere extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'designation',
    ];

    public function niveau_etude()
    {
        return $this->belongsToMany(NiveauEtude::class, FiliereNiveauEtude::class,'filiere_id','niveau_etude_id');
    }
}
