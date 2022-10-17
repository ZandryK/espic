<?php

namespace App\Http\Controllers\Admin;

use App\Models\Vague;
use App\Models\Filiere;
use App\Models\NiveauEtude;
use Illuminate\Http\Request;
use App\Models\FiliereNiveauEtude;
use App\Http\Controllers\Controller;
use App\Models\VagueFiliereNiveauEtude;

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
}
