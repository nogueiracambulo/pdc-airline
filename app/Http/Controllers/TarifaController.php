<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tarifa;
use App\Models\Regalia;
use RealRashid\SweetAlert\Facades\Alert;

class TarifaController extends Controller
{

    public function listarTarifas(){
        $tarifas=Tarifa::all();
        $regalias=Regalia::all();
        return view('tarifa.tarifas',['tarifas'=>$tarifas,'regalias'=>$regalias]);
        
    }

    public function registarTarifa(Request $request){
        
        $tarifa=new Tarifa();
        $tarifa->nome=$request->nome;
        $tarifa->codigo=$request->codigo;
        $tarifa->save();

        $regalias=$request->regalias;

        //Atribuindo regalias à tarifa
        for($i=0; $i < count($regalias); $i++){
            if($regalias[$i]!=null){
                Tarifa::find($tarifa->id)->regalias()->attach($regalias[$i]);
            }
        }
        Alert::success('sucesso', 'Tarifa criada com sucesso');
        return back();
    }



    //===========REGALIAS=============================================
    public function listarRegalias(){
        $regalias=Regalia::all();
        return view('regalia.regalias',['regalias'=>$regalias]);
        
    }

    public function registarRegalia(Request $request){
        
        $regalia=new Regalia();
        $regalia->descricao=$request->descricao;
        $regalia->save();
        Alert::success('sucesso', 'Regalia criada com sucesso');
        return back();
    }
}
