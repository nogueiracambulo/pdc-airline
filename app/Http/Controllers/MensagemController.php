<?php

namespace App\Http\Controllers;

use App\Models\Mensagem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MensagemController extends Controller
{
    public function registarMensagem(Request $request, $idGarimpo)
    {
        $mensagem = new Mensagem;

        // $content=$request->foto_capa;
        // $fotoCapaName=time().'.'.$content->getClientOriginalExtension();
        // $request->foto_capa->move('img/capa_disciplina',$fotoCapaName);
        ////$request->foto_capa->storeAs('public/capa_disciplina', $fotoCapaName);

        //$disc->fotoCapa=$fotoCapaName;
        $mensagem->texto = $request->msg;
       
        $mensagem->user_id = auth()->user()->id;
        $mensagem->garimpo_id = $idGarimpo;

        $mensagem->save();
        return back()->with('sucesso', 'Mensagem registada com Sucesso');
    }

    public function mostrarChat($idGarimpo, $nomeGarimpo){

        //$chat=Mensagem::findOrFail($id);

        $mensagens=DB::select("SELECT m.texto, u.name, u.id as userId, m.created_at
        FROM mensagens m, users u 
        where (m.garimpo_id = $idGarimpo) and (m.user_id = u.id)");
        $logado=auth()->user()->id;
        
        return view('layouts.Garimpo.ChatGarimpo', ['mensagens' => $mensagens, 'nomeGarimpo' => $nomeGarimpo, 'logado'=> $logado, 'idGarimpo'=> $idGarimpo]);
        
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Mensagem  $mensagem
     * @return \Illuminate\Http\Response
     */
    public function show(Mensagem $mensagem)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Mensagem  $mensagem
     * @return \Illuminate\Http\Response
     */
    public function edit(Mensagem $mensagem)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Mensagem  $mensagem
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mensagem $mensagem)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Mensagem  $mensagem
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mensagem $mensagem)
    {
        //
    }
}
