<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourFormateur extends Model
{
    use HasFactory;
    protected $table = 'cour_formateurs';
    protected $fillable =[
        'formateur_id',
        'cvgnv_id',
    ];

    public function cours_vague_niveau_etude()
    {
        return $this->belongsTo(CoursVgNiveauEtude::class,'cvgnv_id');
    }
}
