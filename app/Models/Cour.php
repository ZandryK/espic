<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cour extends Model
{
    use HasFactory;
    protected $fillable = [
        "designation",
        "duree",
    ];

    public function vague_filiere_niveau_etudes()
    {
        return $this->belongsToMany(VagueFiliereNiveauEtude::class,CoursVgNiveauEtude::class,"cour_id","vg_niveau_etude_id");
    }

}
