<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Auth;

class UserController extends Controller
{


    public function loginn(Request $request){
        return view("loginn");
        
    }

    public function getlogin(Request $request){
        $validatedData = $request ->validate([
           
            'nom' => 'required|exists:users,name',
            'password' => 'required',
            
        ]);

        
        $data["nom"]=$request -> input("nom");
        $data["password"]=$request ->input("password");
      

        return view("privada",$data);
    }
    


}
