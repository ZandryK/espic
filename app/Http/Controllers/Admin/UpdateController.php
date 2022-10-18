<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Vague;
use App\Models\Filiere;
use App\Models\Etudiant;
use App\Models\Formateur;
use App\Models\NiveauEtude;
use Illuminate\Http\Request;
use App\Models\FiliereNiveauEtude;
use App\Http\Controllers\Controller;
use App\Models\CourFormateur;
use App\Models\EtudiantVague;
use App\Models\VagueFiliereNiveauEtude;
use App\Models\VagueFormateur;

class UpdateController extends Controller
{
    public function update_commun(Request $request ,$key)
    {
        $key = $request->key;
        $id = $request->id;
        switch ($key) {
            case 'filiere':
                $filieres = Filiere::find($id);
                $filieres->update(['designation'=>$request->designation]);
                return redirect()->back();
                break;
            case "niveau d'etude":
                $niveau_etude = NiveauEtude::find($id);
                $niveau_etude->update(['designation'=>$request->designation]);
                break;
            case 'vague':
                $vague = Vague::find($id);
                $vague->update(['designation'=>$request->designation]);
                break;    
            default:
                # code...
                break;
        }
        toast('Modification effectuer!','success');
        return redirect()->back();
    }

    public function delete_attribution($key,$id){
        switch ($key) {
            case 'filiere':
                $attribution = FiliereNiveauEtude::find($id);
                $attribution->delete();
                break;
            case 'niveau_etude':
                $attribution = FiliereNiveauEtude::find($id);
                $attribution->delete();
                break;
            case 'vague':
                $attribution = VagueFiliereNiveauEtude::find($id);
                $attribution->delete();
                break;    
            default:
                # code...
                break;
        }
        toast('Suppression effectuer!','success');
        return redirect()->back();

    }

    public function update_user(Request $request){
        $key = $request->id;
        $user = User::find($key);
        $user->update([
            'name'=>$request->nom,
            'email'=>$request->email
        ]);
        toast('Modification  effectuer!','success');
        return redirect()->back();
    }

    public function update_password(Request $request)
    {
        $key = $request->id;

    }

    public function update_formateur(Request $request)
    {
        $id = $request->id;
                $formateur = Formateur::find($id);
                $formateur->update([
                    "matricule"=>$request->matricule,
                    "nom"=>$request->nom,
                    "prenom"=>$request->prenom,
                    "email"=>$request->email,
                    "contact"=>$request->contact
                ]);
                toast('Modification  effectuer!','success');
                return redirect()->back();
    }

    public function update_etudiant(Request $request)
    {
        $id = $request->id;
        $etudiant = Etudiant::find($id);
        $etudiant->update([
            "matricule"=>$request->matricule,
            "nom"=>$request->nom,
            "prenom"=>$request->prenom,
            "email"=>$request->email,
            "contact"=>$request->contact
        ]);
        toast('Modification  effectuer!','success');
        return redirect()->back();
    }

    public function delete_formateur_vague($formateur_id ,$vgflnv_id)
    {
        $vague = VagueFormateur::where('formateur_id',$formateur_id)->where('vgflnv_id',$vgflnv_id)->first()->delete();
        toast('suppression  effectuer!','success');
        return redirect()->back();
    }

    public function delete_formateur_cour($formateur_id, $cvgnv_id)
    {
        CourFormateur::where('formateur_id',$formateur_id)->where('cvgnv_id',$cvgnv_id)->first()->delete();
        toast('suppression  effectuer!','success');
        return redirect()->back();
    }

    public function delete_etudiant_cours($etudiant_id,$vgflnv_id)
    {
        EtudiantVague::where('etudiant_id',$etudiant_id)->where('vgflnv_id',$vgflnv_id)->first()->delete();
        toast('suppression  effectuer!','success');
        return redirect()->back();
    }
}
