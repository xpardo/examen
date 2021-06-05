<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\Post;


class ModifiController extends Controller
{
    //

    public function showform(Request $request){
        return view("public/edicio");
    }

    public function getform(Request $request){
        
        $validatedData = $request ->validate([
           
            'nom' => 'required|exists:users,name',
            'cognom' => 'required',
            'email' => 'required',
            'pass1' => 'required',
            /* 'pass1' => 'required|min:5|regex:/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])*$/', */
            'image' => 'required|mimes:jpeg,png,jpg,gif,svg|dimensions:width=500,height=500',
           
        ]);

        
        $data["nom"]=$request -> input("nom");
        $data["cognom"]=$request ->input("cognom");
        $data["email"]=$request -> input("email");
        $data["pass1"]= Hash::make($request->input("pass1"));
        $data["image"]=$request -> input("image");

        return view("public/getform",$data);

    }
}
