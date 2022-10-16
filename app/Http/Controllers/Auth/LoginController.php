<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Exists;

class LoginController extends Controller
{

    public function index()
    {
        if (Auth::check()) {
            return redirect()->route('Home');
        }
        return view("Auth.login");
    }

    public function authenticate(Request $request)
    {
        $request->validate([
            'matricule'=>['required'],
            'password'=>['required']
        ]);
        $credential = $request->only("matricule","password");
        if (Auth::attempt($credential)) {
            $request->session()->regenerate();
            return redirect()->intended("/Check");
        }
        
        return back()->withErrors([
            'matricule'=>'matricule ou mots de passe incorrect',
        ]);
        
    }
}
