<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vague extends Model
{
    use HasFactory;
    protected $fillable=[
        'designation',
    ];

    public function filiere_niveau_etude(){
        return $this->belongsToMany(FiliereNiveauEtude::class,VagueFiliereNiveauEtude::class,"filiere_niveau_etude_id","vague_id");
    }
}
