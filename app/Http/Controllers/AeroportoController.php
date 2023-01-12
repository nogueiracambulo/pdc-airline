<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aeroporto;
use App\Models\User;
use RealRashid\SweetAlert\Facades\Alert;

class AeroportoController extends Controller
{
    
    public function listarAeroportos(){
        $aeroportos=Aeroporto::all();
        return view('aeroporto.aeroportos',['aeroportos'=>$aeroportos]);
        
    }

    public function registarAeroporto(Request $request){
        
        $aeroporto=new Aeroporto();
        $aeroporto->cidade=$request->cidade;
        $aeroporto->codigoIATA=$request->codigoIATA;

        $aeroporto->save();
        Alert::success('sucesso', 'Aeroporto criado com sucesso');
        return back();
    }



}
