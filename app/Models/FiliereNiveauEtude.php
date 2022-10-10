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
}
