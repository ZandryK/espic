<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'link',
        'auteur'
    ];

    protected function cours_vague_niveau_etudes()
    {
        return $this->belongsToMany(CoursVgNiveauEtude::class, VideoAcces::class,'video_id','cour_vgnve_id');
    }
}
