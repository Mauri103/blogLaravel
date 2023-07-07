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

        return redirect("/inicio");

    }

    public static function Listar(){
        return $Posteo = Posteo::all();
    }

    public function Home(Request $request){ 
        $posteos = Posteo::all(); 
        return view("/indexMenu",["posteos" => $posteos]);
    }

    public function Autenticado(Request $request){
        $posteos = Posteo::all(); 
        return view("/inicio",["posteos" => $posteos]);
    }

    
}
