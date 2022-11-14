<?php

namespace App\Http\Controllers;

use App\Models\Garimpo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class garimpoChatController extends Controller
{
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
        $garimpo = new Garimpo;

        // $content=$request->foto_capa;
        // $fotoCapaName=time().'.'.$content->getClientOriginalExtension();
        // $request->foto_capa->move('img/capa_disciplina',$fotoCapaName);
        ////$request->foto_capa->storeAs('public/capa_disciplina', $fotoCapaName);

        //$disc->fotoCapa=$fotoCapaName;
        $garimpo->nome=$request->nome;
        $garimpo->descricao=$request->descricao;
        $garimpo->preco=$request->preco;
        $garimpo->user_id=auth()->user()->id;

        $garimpo->save();
        return back();
    }

    public function listarGarimpos(){
        
        $garimpos =DB::select("SELECT g.id as garimpoId,g.nome, g.descricao, u.name, u.id as userId, g.inscritos
        FROM garimpos g, users u
        where g.user_id = u.id");

        $logado = auth()->user()->id;

        $inscritos =DB::select("SELECT p.user_id, g.id as gar_id, p.id as pedidoId, p.estado, p.garimpo_id, p.user_id
        From pedidos p, garimpos g
        where g.id = p.garimpo_id and p.user_id = '{$logado}'");
          
        return view('layouts.Garimpo.listarGarimpo', ['garimpos' => $garimpos, 'inscritos' => $inscritos]);
    }

    public function eliminarGarimpo($id){
        
        $garimpo = DB::select("
        delete from garimpos
        WHERE id = '{$id}'
        ");
        
        return redirect('ver/garimpo')->with('msg', 'Garimpo Eliminado com Sucesso');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Garimpo  $garimpo
     * @return \Illuminate\Http\Response
     */
    public function show(Garimpo $garimpo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Garimpo  $garimpo
     * @return \Illuminate\Http\Response
     */
    public function edit(Garimpo $garimpo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Garimpo  $garimpo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Garimpo $garimpo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Garimpo  $garimpo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Garimpo $garimpo)
    {
        //
    }
}
