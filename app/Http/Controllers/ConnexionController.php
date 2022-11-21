<?php

namespace App\Http\Controllers; 

use Illuminate\Http\Request;

class ConnexionController extends Controller
{
    public function index(){
        return view('pages/connexion/index');
    }

    public function authenticate(Request $request){
        $request->validate([
            'email'=>'required|email',
            'password'=>'required'
        ]);

        if(auth()->attempt($request->only('email', 'password'))){
            return redirect()->route('admin.inscription');
        }

        return redirect()->back()->withErrors('les identifiants ne correspondent pas');
    }
}
