<?php

namespace App\Http\Controllers;

use App\Models\ano_lectivo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
// use App\Models\Auth;

class AnoLectivoController extends Controller
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
        $ano_lectivo=new ano_lectivo;
    
        $ano_lectivo->descricao=$request->descricao;
        $ano_lectivo->data_inicio=$request->data_inicio;
        $ano_lectivo->data_termino=$request->data_termino;
        $ano_lectivo->user_id=auth()->user()->id;
        
        DB::table('ano_lectivos')->update(['selecionado' => 0 ]);
        $ano_lectivo->selecionado = 1;

        $ano_lectivo->save();

        $todos_anos_lectivos=ano_lectivo::all();
        $ano_selecionado=ano_lectivo::all()->where(['selecionado' => 1 ]);

        return view('dashboard', ['todos_anos_lectivos'=>$todos_anos_lectivos,'ano_selecionado'=>$ano_selecionado]);
        // return back()->with('sucesso','Ano lectivo salvo com sucesso');

    }

    
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ano_lectivo  $ano_lectivo
     * @return \Illuminate\Http\Response
     */
    public function selecionar(Request $request)
    {
        $ano_lectivo = ano_lectivo::findOrfail($request->ano_id);

        DB::table('ano_lectivos')->update(['selecionado' => 0 ]);
       
        $ano_lectivo->selecionado = 1;
        $ano_lectivo->save();


        $todos_anos_lectivos=ano_lectivo::all();
        $ano_selecionado=ano_lectivo::all()->where(['selecionado' => 1 ]);
        
        return view('dashboard', ['todos_anos_lectivos'=>$todos_anos_lectivos,'ano_selecionado'=>$ano_selecionado]);
        // return back()->with('sucesso', 'Ano lectivo selecionado com sucesso');
    }


        /**
     * Display the specified resource.
     *
     * @param  \App\Models\ano_lectivo  $ano_lectivo
     * @return \Illuminate\Http\Response
     */
    public function show(ano_lectivo $ano_lectivo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ano_lectivo  $ano_lectivo
     * @return \Illuminate\Http\Response
     */
    public function edit(ano_lectivo $ano_lectivo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ano_lectivo  $ano_lectivo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ano_lectivo $ano_lectivo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ano_lectivo  $ano_lectivo
     * @return \Illuminate\Http\Response
     */
    public function destroy(ano_lectivo $ano_lectivo)
    {
        //
    }
}
