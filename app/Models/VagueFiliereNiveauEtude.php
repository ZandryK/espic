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
}
