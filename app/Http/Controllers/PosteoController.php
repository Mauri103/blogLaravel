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

    public function eliminarPosteo(Posteo $posteo){
       
        $posteo->delete();
        return redirect("/inicio");
    }

    public function Home(Request $request){ 
        $posteos = Posteo::paginate(3);
        return view("/indexMenu",["posteos" => $posteos]);
    }

    public function Autenticado(Request $request){
        $posteos = Posteo::paginate(3);
        return view("/inicio",["posteos" => $posteos]);
    }

    
}
