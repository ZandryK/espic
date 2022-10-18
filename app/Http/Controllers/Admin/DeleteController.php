<?php

namespace App\Http\Controllers\Admin;

use App\Models\Cour;
use App\Models\User;
use App\Models\Vague;
use App\Models\Video;
use App\Models\Filiere;
use App\Models\Etudiant;
use App\Models\Formateur;
use App\Models\NiveauEtude;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User_UserGroupe;
use Illuminate\Support\Facades\File;

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

    public function delete_video($id)
    {
        $video =Video::find($id);
        if (File::exists(public_path('upload/'.$video->link))) {
            File::delete(public_path('upload/'.$video->link));
            $video->delete();
            toast('Suppression effectuer!','success');
            return redirect()->back();
        }
        
    }

    public function desactivation($user_id, $usergroup_id){
        $users = User_UserGroupe::where('user_id',$user_id)->where('usergroup_id',$usergroup_id)->first();
        $users->delete();
        toast('Compte desactiver!','success');
        return redirect()->back();
    }
}
