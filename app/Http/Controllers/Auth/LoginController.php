<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view("Auth.login");
    }

    public function authenticate(Request $request)
    {
        $credential = $request->validate([
            'matricule'=>['required'],
            'password'=>['required']
        ]);

        if (Auth::attempt($credential)) {
            $request->session()->regenerate();
            return redirect()->intended("/Home");
        }
        
        return back()->withErrors([
            'matricule'=>'matricule ou mots de passe incorrect',
        ]);
        
    }
}
