<?php

namespace App\Http\Controllers;

use App\Models\ano_lectivo;
use App\Models\Semestre;
use App\Models\Turma;
use App\Models\Disciplina;
use App\Models\Conteudo;
use Illuminate\Http\Request;

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
        $todos_semestres=Semestre::all();
        $todas_turmas=Turma::all();
        return view('biblioteca.home',['todos_anos'=>$todos_anos,'todos_semestres'=>$todos_semestres,'todas_turmas'=>$todas_turmas]);
    }

    public function listarDisciplina($id){
        $todos_anos=ano_lectivo::all();
        $todos_semestres=Semestre::all();
        $todas_turmas=Turma::all();
        $todas_disciplinas=Disciplina::all();

        $ano_desc=Turma::select('descricao')->where(['id'=>$id]);
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
