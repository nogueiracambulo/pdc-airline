<?php

namespace App\Http\Controllers;

use App\Models\ano_lectivo;
use App\Models\Turma;
use App\Models\Disciplina;
use App\Models\Conteudo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ConteudoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $todos_anos=ano_lectivo::all();
        $ano_lectivo=DB::table('ano_lectivos')->where('selecionado',1)->get();
        $todas_turmas=DB::table('turmas')->get();
        return view('biblioteca.home',['ano_lectivo'=>$ano_lectivo,'todas_turmas'=>$todas_turmas,'todos_anos'=>$todos_anos]);
    }

    public function listarDisciplina($id){
        $todas_disciplinas=DB::table('disciplinas')->where('turma_id',$id)->get();
        // $todas_disciplinas=Disciplina::all();

        $ano_desc=Turma::select('descricao')->where('id',$id);
        $ano=$id;
        return view('biblioteca.conteudos_ano',['todas_disciplinas'=>$todas_disciplinas, 'ano_desc'=>$ano_desc,'ano'=>$ano]);

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
     * @param  \App\Models\Conteudo  $conteudo
     * @return \Illuminate\Http\Response
     */
    public function show(Conteudo $conteudo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Conteudo  $conteudo
     * @return \Illuminate\Http\Response
     */
    public function edit(Conteudo $conteudo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Conteudo  $conteudo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Conteudo $conteudo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Conteudo  $conteudo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Conteudo $conteudo)
    {
        //
    }
}
