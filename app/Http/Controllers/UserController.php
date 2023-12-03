<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function inscription(){
        return view('utilisateur.inscription');
    }

    public function store(Request $request){
        $user= new User();
        $user->nom= $request->nom;
        $user->prenom= $request->prenom;
        $user->email= $request->email;
        $user->password= $request->password;

        $user->save();
    }

    public function loggin(){
        return view('utilisateur.connexion');
    }

    public function authentification(Request $request){
        $request->validate([
            'email'=> 'required|email',
            'password' => 'required'
        ]);

       if(auth()->attempt($request->only("email","password"))){
            return redirect("/dashboardUser");
       }else{
            return redirect()->back()->withErrors("les identifiants ne correspondent pas");
       } 

    }

    public function logout(){

    }
}
