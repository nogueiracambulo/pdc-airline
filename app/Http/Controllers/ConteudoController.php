<?php

namespace App\Http\Controllers;

use App\Models\ano_lectivo;
use App\Models\Turma;
use App\Models\Disciplina;
use App\Models\Conteudo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class ConteudoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    //RETORNA A PÁGINA INICIAL PARA ACEDER AOS CONTEÚDOS
    public function index()
    {
        $todos_anos=ano_lectivo::all();
        $ano_lectivo=DB::table('ano_lectivos')->where('selecionado',1)->get();
        $todas_turmas=DB::table('turmas')->get();
        return view('biblioteca.home',['ano_lectivo'=>$ano_lectivo,'todas_turmas'=>$todas_turmas,'todos_anos'=>$todos_anos]);
    }

    //RETORNA A LISTA DE DISCIPLINAS DE UMA TURMA E SEUS CONTEÚDOS
    public function listarDisciplina($id){
        $todas_disciplinas=DB::table('disciplinas')->where('turma_id',$id)->get();
        // $todas_disciplinas=Disciplina::all();
       
        $ano_desc=Turma::select('descricao')->where('id',$id);
        $ano=$id;
        return view('biblioteca.conteudos_ano',['todas_disciplinas'=>$todas_disciplinas, 'ano_desc'=>$ano_desc,'ano'=>$ano]);

    }

   //RETORNA O PERFIL DA DISCIPLINA E SEUS CONTEÚDOS
    public function listarConteudos($id_turma,$id_disciplina){

        $conteudos=DB::table('conteudos')->where('disciplina_id',$id_disciplina)->get();
        $disciplina=DB::table('disciplinas')->where('id',$id_disciplina)->get();
        return view('biblioteca.disciplinaPerfil',['conteudos'=>$conteudos,'disciplina'=>$disciplina]);

    }

    //Lista aos detalhes um conteúdo.

    public function verDetalhes($id){
        $conteudo=Conteudo::findOrfail($id);
        $disciplinas=DB::table('disciplinas')->where('id', $conteudo->id)->get();
        return view('biblioteca.conteudoDetalhes',['conteudo'=>$conteudo,'disciplinas'=>$disciplinas]);
    }

    //FUNÇÃO PARA TRANSFERIR(BAIXAR) NO DISPOSITIVO DO UTILIZADOR, UM CONTEUDO
    public function baixarConteudo($conteudo){
        return response()->download(public_path("storage/$conteudo"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
      
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $conteudo = new Conteudo;

        $content=$request->ficheiro;
        $ConteudoName=time().'.'.$content->getClientOriginalExtension();
        $tipo=$content->getClientOriginalExtension();
        $request->ficheiro->move('storage',$ConteudoName);

        if($tipo=='jpg' || $tipo=='png' || $tipo=='webp'){
            $conteudo->tipo="imagem";
        }
        if($tipo=='mp4'){
            $conteudo->tipo="video";
        }

        if($tipo=='docx' || $tipo=='pptx' || $tipo=='pdf' ){
            $conteudo->tipo="pdf";
        }

        $conteudo->ficheiro=$ConteudoName;
        $conteudo->titulo=$request->titulo;
        $conteudo->descricao=$request->descricao;
        $conteudo->disciplina_id=$request->disciplina;
        $conteudo->criador_id=auth()->user()->id;

        $conteudo->save();

        Alert::success('sucesso','Conteúdo registado com sucesso');
        return back();
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
    //eliminar Conteudo
    public function destroy($id,Request $request)
    {
        $cont = Conteudo::find($id);
        $cont->delete();
        
        // DB::select("
        // delete from conteudos
        // WHERE id = '{$id}'
        // ");

        $conteudos=DB::table('conteudos')->where('disciplina_id',$request->disciplina)->get();
        $disciplina=DB::table('disciplinas')->where('id',$request->disciplina)->get();

        Alert::success('Sucesso','Conteúdo eliminado com sucesso');

        return view('biblioteca.disciplinaPerfil',['conteudos'=>$conteudos,'disciplina'=>$disciplina]);
    }
}
