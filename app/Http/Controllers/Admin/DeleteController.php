<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Cour;
use App\Models\Etudiant;
use App\Models\Filiere;
use App\Models\Formateur;
use App\Models\NiveauEtude;
use App\Models\User;
use App\Models\Vague;
use Illuminate\Http\Request;

class DeleteController extends Controller
{
    public function delete_personnels($key, $id)
    {
        if($key == "formateur")
        {
            $personnel = Formateur::find($id);
            if (User::where('matricule',$personnel->matricule)->exists()) {
                User::where('matricule',$personnel->matricule)->first()->delete();
            }
            $personnel->delete();
        }
        else if($key == 'etudiant'){
            $personnel = Etudiant::find($id);
            if (User::where('matricule',$personnel->matricule)->exists()) {
                User::where('matricule',$personnel->matricule)->first()->delete();
            }
            $personnel->delete();
            
        }
        toast('Suppression effectuer!','success');
        return redirect()->back();
    }

    public function delete_configuration($key,$id)
    {
        switch ($key) {
            case 'filiere':
                Filiere::find($id)->delete();
                break;
            case "niveau d'etude":
                NiveauEtude::find($id)->delete();
                break;
            case 'vague':
                Vague::find($id)->delete();
                break;
            default:
                break;
        }
        toast('Suppression effectuer!','success');
        return redirect()->back();
    }

    public function delete_cours($id)
    {
        Cour::find($id)->delete();
        toast('Suppression effectuer!','success');
        return redirect()->back();
    }

    public function delete_user($id)
    {
        User::find($id)->delete();
        toast('Suppression effectuer!','success');
        return redirect()->back();
    }

    public function delete_user_group($id)
    {
        
    }
}
