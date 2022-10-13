<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EtudiantVague extends Model
{
    use HasFactory;
    protected $table = "etudiant_vagues";
    protected $fillable =[
        "etudiant_id",
        "vgflnv_id"
    ];
    public function etudiant()
    {
        return $this->belongsTo(Etudiant::class);
    }
    public function vague_filiere_niveau_etude()
    {
        return $this->belongsTo(VagueFiliereNiveauEtude::class,'vgflnv_id');
    }
}
