<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Posteo;


class PosteoController extends Controller
{
    public function AgregarPosteo(Request $request){
        $u = new Posteo();
        $u -> posteo = $request -> post("posteo");
        $u -> save();

        return redirect("/autorizado");

    }

    public function Listar(Request $request){

        return Posteo::all();
     

    }

    
}
