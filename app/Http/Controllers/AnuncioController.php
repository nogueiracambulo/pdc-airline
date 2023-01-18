<?php

namespace App\Http\Controllers;
use App\Models\Anuncio;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AnuncioController extends Controller
{
    public function registarAnuncio(Request $request){
        $anuncio=new Anuncio();
        if($request->imagem!=null){
            $imagem=$request->imagem;
            $imagemName=time().'.'.$imagem->getClientOriginalExtension();
            $request->imagem->move('storage',$imagemName);
            $anuncio->imagem=$imagemName;
        }else{
            $anuncio->imagem="aviao-1.jpg";
        }
        $anuncio->titulo=$request->titulo;
        $anuncio->descricao=$request->descricao;
        $anuncio->tipo=$request->tipo;
        $anuncio->user_id=1;

        $anuncio->save();
        Alert::success('sucesso', 'Anúncio registado com sucesso');
        return back();
    }
}
