<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CoursVgNiveauEtude extends Model
{
    use HasFactory;
    protected $table = "cours_vg_niveau_etudes";
    protected $fillable = [
        'cour_id',
        "vg_niveau_etude_id",
    ];

    
    public function cour()
    {
        return $this->belongsTo(Cour::class);
    }

    public function vague_filiere_niveau_etude()
    {
        return $this->belongsTo(VagueFiliereNiveauEtude::class,'vg_niveau_etude_id');
    }

    public function formateurs()
    {
        return $this->belongsToMany(Formateur::class, CourFormateur::class,'cvgnv_id','formateur_id');
    }

    public function videos()
    {
        return $this->belongsToMany(Video::class, VideoAcces::class,'cour_vgnve_id','video_id');
    }
}
