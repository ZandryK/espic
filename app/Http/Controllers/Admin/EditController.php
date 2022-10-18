<?php

namespace App\Http\Controllers\Admin;

use App\Models\Vague;
use App\Models\Filiere;
use App\Models\NiveauEtude;
use Illuminate\Http\Request;
use App\Models\FiliereNiveauEtude;
use App\Http\Controllers\Controller;
use App\Models\Etudiant;
use App\Models\Formateur;
use App\Models\Usergroup;
use App\Models\VagueFiliereNiveauEtude;

class EditController extends Controller
{
    public function edit_commun($key ,$id){
        switch ($key) {
            case 'filiere':
                $attribution = FiliereNiveauEtude::where('filiere_id',$id)->get();
                $table = Filiere::find($id);
                return view("Admin.edit.filiere",compact('key','id','attribution','table'));
                break;
            case "niveau d'etude":
                $attribution = FiliereNiveauEtude::where('niveau_etude_id',$id)->get();
                $table = NiveauEtude::find($id);
                return view("Admin.edit.filiere",compact('key','id','attribution','table'));
                break;
            case 'vague':
                $attribution = VagueFiliereNiveauEtude::where('vague_id',$id)->get();
                $table = Vague::find($id);
                return view("Admin.edit.filiere",compact('key','id','attribution','table'));    
                break;
            default:
                # code...
                break;
        }
    }

    public function user_grp($id)
    {
        $data = Usergroup::find($id);
        return view("Admin.edit.user_in_group",compact('data'));
    }

    public function formateur($id)
    {
        $formateur = Formateur::find($id);
        return view('Admin.edit.formateur', compact('formateur'));
    }

    public function etudiant($id)
    {
        $etudiant = Etudiant::find($id);
        return view('Admin.edit.etudiant', compact('etudiant'));
    }

    

}
