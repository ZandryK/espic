<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VagueFormateur extends Model
{
    use HasFactory;
    protected $table = "vague_formateurs";
    protected $fillable=[
        'formateur_id',
        'vgflnv_id'
    ];

    public function vague_filiere_niveau_etude()
    {
        return $this->belongsTo(VagueFiliereNiveauEtude::class,'vgflnv_id');
    }
}
