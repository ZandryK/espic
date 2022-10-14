<?php

namespace App\Http\Controllers\Admin;

use App\Models\Cour;
use App\Models\User;
use App\Models\Vague;
use App\Models\Filiere;
use App\Models\Etudiant;
use App\Models\Formateur;
use App\Models\Usergroup;
use App\Models\NiveauEtude;
use Illuminate\Http\Request;
use App\Models\CourFormateur;
use App\Models\VagueFormateur;
use App\Models\FiliereNiveauEtude;
use App\Http\Controllers\Controller;
use App\Models\EtudiantVague;
use Illuminate\Support\Facades\Auth;
use App\Models\VagueFiliereNiveauEtude;

class AdminController extends Controller
{
    private $table;
    private $matricule , $name, $email;
    private $usr;
    private $usr_group;
    public function __construct()
    {
        $this->middleware("auth");
    }
    /**
     * @return view(admin.menu)
     */
    public function index()
    {
        if (Auth::check()) {
            $user = auth()->user()->usergroups;
            if($user->contains("group_name","Super Admin") || $user->contains("group_name","Super Administrateur") || $user->contains("group_name","Super admin")){
                $usr_grp = 'SuperAdmin';
                return view("Admin.menu",compact('usr_grp'));
            }else{
                if($user->contains('group_name','formateur') || $user->contains('group_name','Formateur') || $user->contains('group_name','Formateurs')){
                   $this->usr = VagueFormateur::where('formateur_id',Formateur::where('matricule',auth()->user()->matricule)->first()->id)->get();
                   $this->usr_group = "Formateurs";
                   return view('home.menu',['data'=>$this->usr,"usr_grp"=>$this->usr_group]);
                }
                else if($user->contains("group_name","etudiant") || $user->contains("group_name","Etudiant") || $user->contains("group_name","etudiants") || $user->contains("group_name","Etudiants"))
                {
                    $this->usr = EtudiantVague::where("etudiant_id",Etudiant::where('matricule',auth()->user()->matricule)->first()->id)->get();
                    $this->usr_group = "Etudiants";
                    return view('home.menu',['data'=>$this->usr,"usr_grp"=>$this->usr_group]);

                }
               
            }
        }
       
        return redirect()->back();
    }

    public function profil()
    {
        return view("home.profil");
    }


    /**
     * @param string $key
     */

    public function configuration($key)
    {
        switch ($key) {
            case 'filiere':
                $this->table = Filiere::all();
                break;
            case "niveau d'etude":
                $this->table = NiveauEtude::all();
                break;
            case "vague":
                $this->table = Vague::all();
                break;
            default:
                # code...
                break;
        }
        return view("Admin.filiere",["data" => $this->table, 'key'=>$key]);
    }

    public function user()
    {
        $users = User::all();
        return view("Admin.users",compact("users"));
    }

    public function register_view()
    {
        $users_group= Usergroup::all();
        return view('pages.register',compact('users_group'));
    }

    public function usergroup(){
        $usrgrp = Usergroup::all();
        return view('Admin.usergroup',compact("usrgrp"));
    }

    public function attribution($key, $key2)
    {
        switch ($key) {
            case 'filiere':
                $this->table = NiveauEtude::all();
                break;
            case "niveau d'etude":
                $this->table = Filiere::all();
                break;
            case "vague":
                $this->table = FiliereNiveauEtude::all();
                break;
            case "cours":
                $this->table = VagueFiliereNiveauEtude::all();
                break;
            case 'formateur':
                $this->table = Formateur::find($key2)->vague_filiere_niveau_etudes()->get();
                break;
            case 'etudiant':
                $this->table = Etudiant::find($key2)->filiere_niveau_etudes()->get();
                break;
            default:
                # code...
                break;
        }
        return view('Admin.attribution',["data"=>$this->table, "key"=>$key, "key2"=>$key2]);
    }

    public function cours(){
        $data = Cour::all();
        return view("Admin.cours",compact("data"));
    }

    
    public function personnels($key)
    {
        if($key == "formateur"){
           $this->table = Formateur::all();
        }
        else if($key == "etudiant")
        {
            $this->table = Etudiant::all();
        }
        return view('Admin.formateur',['data'=>$this->table,'key'=>$key]);
    }

    public function ajout_pers($key){
        if ($key == "formateur") {
            $this->table = VagueFiliereNiveauEtude::all();
        }
        else{
            $this->table = FiliereNiveauEtude::all();
        }
        return view('pages.ajoutFormateur',["key"=>$key, 'data'=>$this->table]);
    }

    public function pers_to_user($key,$id){
        $users_group= Usergroup::all();
        if($key == 'formateur'){
            $user = Formateur::find($id);
            $this->matricule = $user->matricule;
            $this->name = $user->prenom;
            $this->email = $user->email;
        }else if($key == 'etudiant'){
            $user = Etudiant::find($id);
            $this->matricule = $user->matricule;
            $this->name = $user->prenom;
            $this->email = $user->email;
        }
        return view('pages.add',[
            'users_group'=>$users_group,
            'matricule'=>$this->matricule,
            'name'=>$this->name,
            'email'=>$this->email
        ]);
    }
}
