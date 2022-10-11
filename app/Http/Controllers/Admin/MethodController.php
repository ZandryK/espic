<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Cour;
use App\Models\Filiere;
use App\Models\FiliereNiveauEtude;
use App\Models\NiveauEtude;
use App\Models\User;
use App\Models\User_UserGroupe;
use App\Models\Vague;
use App\Models\VagueFiliereNiveauEtude;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class MethodController extends Controller
{
    /**
     * store users
     */
    private $message = "Enregistrement effectuer";
    private $table;
    /**
     * register
     * @param Request $request
     */
     public function register(Request $request)
     {
        $table = new User();
        $table->matricule = $request->matricule;
        $table->name= $request->nom;
        $table->email = $request->email;
        $table->password = Hash::make($request->password);
        $table->save();

        $user = User::where('matricule',$request->matricule)->first();
        foreach ($request->checkbox as $key => $check) {
            $tb = new User_UserGroupe();
            $tb->user_id = $user->id;
            $tb->usergroup_id = $request->checkbox[$key];
            $tb->save();
        }
        alert()->success("Succes","Enregistrement effectuer");
        return redirect()->back();
     }
     /**
      * save configuration data filiere,niveau d'etude
      */
    public function sv(Request $request)
    {
        $key = $request->key;
        switch ($key) {
            case 'filiere':
                $this->table = new Filiere();
                $this->table->designation = $request->designation;
                $this->table->save();
                toast('Enregistrement effectuer!','success');
                break;
            case "niveau d'etude":
                $this->table = new NiveauEtude();
                $this->table->designation = $request->designation;
                $this->table->save();
                toast('Enregistrement effectuer!','success');
                break;
            case "vague":
                $this->table = new Vague();
                $this->table->designation = $request->designation;
                $this->table->save();
                toast('Enregistrement effectuer!','success');

            default:

                break;
        }
        return redirect()->back();
    }

    /**
     * save all attribution
     */
    public function store_attribution(Request $request)
    {
        $key = $request->key;
        if($key=="vague"){
            foreach ($request->checkbox as $key => $value) {
                $this->table = new VagueFiliereNiveauEtude();
                $this->table->vague_id = $request->key2;
                $this->table->filiere_niveau_etude_id = $request->checkbox[$key];
                $this->table->save();
            }
            toast('Enregistrement effectuer!','success');
        }
        else{
            foreach ($request->checkbox as $key => $value) {
                $this->table = new FiliereNiveauEtude();
                $this->table->filiere_id = $request->key2;
                $this->table->niveau_etude_id = $request->checkbox[$key];
                $this->table->save();
            }
            toast('Enregistrement effectuer!','success');
        }

        return redirect()->back();
    }

    public function save_cours(Request $request){
        $request->validate([
            "designation"=>['required'],
            "duree"=>['required']
            
        ]);
        $cours = new Cour();
        $cours->designation = $request->designation;
        $cours->duree = $request->duree;
        $cours->save();
        toast('Enregistrement effectuer!','success');

        return redirect()->back();
    }
}
