<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;


class AutenticacionController extends Controller
{
    public function Registrar(Request $request){
        $u = new User();
        $u -> name = $request -> post("name");
        $u -> email = $request -> post("email");
        $u -> password = Hash::make($request -> post("password"));
        $u -> save();

        return redirect("/login");

    }

   
  
}