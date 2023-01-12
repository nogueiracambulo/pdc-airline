<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Percurso;
use App\Models\Tarifa;
use App\Models\Aeronave;
use App\Models\User;
use App\Models\Cabine;
use RealRashid\SweetAlert\Facades\Alert;

class AeronaveController extends Controller
{
    public function listarFrota(){
        $aeronaves=Aeronave::all();
        $percursos=Percurso::all();
        $tarifas=Tarifa::all();
        return view('frota.frota',['percursos'=>$percursos,'tarifas'=>$tarifas,'aeronaves'=>$aeronaves]);
        
    }

    public function registarAeronave(Request $request){
        $cabine=new Cabine();
        $aeronave=new Aeronave();
        if($request->foto!=null){
            $foto=$request->foto;
            $fotoName=time().'.'.$foto->getClientOriginalExtension();
            $request->foto->move('storage',$fotoName);
            $aeronave->foto=$fotoName;
        }else{
            $aeronave->foto="aviaoModelo.png";
        }
        $aeronave->nome=$request->nome;
        $aeronave->matricula=$request->matricula;
        $aeronave->marca=$request->marca;
        $aeronave->modelo=$request->modelo;
        $aeronave->save();
        
        //Definição da primeira cabine e sua capacidade
        $cabine->aeronave_id=$aeronave->id;
        $cabine->capacidade=$request->capacidade;
        $cabine->tarifa_id=$request->tarifa;
        $cabine->save();
        Alert::success('sucesso', 'Aeronave registada com sucesso');
        return back();
    }

    //Método para adicionar outras cabines a aeronave
    public function registarCabine(Request $request){

        $cabine=new Cabine();
        $cabine->aeronave_id=$request->aeronave;
        $cabine->capacidade=$request->capacidade;
        $cabine->tarifa_id=$request->tarifa;
        $cabine->save();
        Alert::success('sucesso', 'Cabine definida com sucesso');
        return back();

    }
}
