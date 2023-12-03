<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function inscription(){
        return view('administrateur.inscription');
    }

    public function store(Request $request){
        $admin= new Admin();
        $admin->nom= $request->nom;
        $admin->prenom= $request->prenom;
        $admin->email= $request->email;
        $admin->password= Hash::make($request->password);

        $admin->save();
    }

    public function loggin(){
        return view('administrateur.connexion');
    }

    public function authentification(Request $request){
        $request->validate([
            'email'=> 'required|email',
            'password' => 'required'
        ]);

       if(auth()->guard("Admin")->attempt($request->only("email","password"))){
            return "c'est bon";
       }else{
            return redirect()->back()->withErrors("les identifiants ne correspondent pas");
       } 
    }

    public function logout(){

    }
}
