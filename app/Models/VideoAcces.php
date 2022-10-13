<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VideoAcces extends Model
{
    use HasFactory;
    protected $table = 'video_acces';
    protected $fillable = [
        'video_id',
        'cour_vgnve_id'
    ];

    public function video()
    {
        return $this->belongsTo(Video::class,'video_id');
    }

    public function cours_vague_niveau_etude()
    {
        return $this->belongsTo(CoursVgNiveauEtude::class,'cour_vgnve_id');
    }
}
