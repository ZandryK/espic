<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Filiere;
use App\Models\FiliereNiveauEtude;
use App\Models\NiveauEtude;
use App\Models\User;
use App\Models\Usergroup;
use App\Models\Vague;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    private $table;
    public function __construct()
    {
        $this->middleware("auth");
    }
    /**
     * @return view(admin.menu)
     */
    public function index()
    {
        $user = auth()->user()->usergroups;
        if($user->contains("group_name","Super Admin") || $user->contains("Super Administrateur") || $user->contains("group_name","superAdmin")){
            return view("Admin.menu");
        }else{
            return view('home.menu');
        }
        return redirect()->back();
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
            default:
                # code...
                break;
        }
        return view('Admin.attribution',["data"=>$this->table, "key"=>$key, "key2"=>$key2]);
    }

    public function cours(){
        return view("Admin.cours");
    }
}
