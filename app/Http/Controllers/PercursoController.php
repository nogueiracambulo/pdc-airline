<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Percurso;
use App\Models\Aeroporto;
use App\Models\User;
use RealRashid\SweetAlert\Facades\Alert;

class PercursoController extends Controller
{
    public function listarPercurso(){
        $percursos=Percurso::with('aeroportos')->get();
        $aeroportos=Aeroporto::all();
        return view('percurso.percursos',['percursos'=>$percursos,'aeroportos'=>$aeroportos]);
        
    }

    public function registarPercurso(Request $request){
        
        $percurso=new Percurso();
        $percurso->save();
        $aeroportos=$request->aeroportos;

        //Atribuindo aeroportos ao percurso
        for($i=0; $i < count($aeroportos); $i++){
            if($aeroportos[$i]!=null){
                Percurso::find($percurso->id)->aeroportos()->attach($aeroportos[$i]);
            }
         }

        Alert::success('sucesso', 'Percurso criado com sucesso');
        return back();
    }
}
