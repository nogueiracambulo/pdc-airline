<?php

namespace App\Http\Controllers;

use App\Models\Voo;
use App\Models\Percurso;
use App\Models\Tarifa;
use App\Models\Aeronave;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class VooController extends Controller
{

    public function listarVoos(){
        $voos=Voo::with('tarifas','percurso','aeronave')->get();
        $percursos=Percurso::all();
        $tarifas=Tarifa::all();
        $aeronaves=Aeronave::all();
       
        return view('voo.voos',['voos'=>$voos,'percursos'=>$percursos,'tarifas'=>$tarifas,'aeronaves'=>$aeronaves]);
        
    }

    public function registarVoo(Request $request){
        
        $voo=new Voo();
        $voo->numero_voo=$request->numero_voo;
        $voo->dataPartida=$request->dataPartida;
        $voo->horaCheckin=$request->horaCheckin;
        $voo->horaEmbarque=$request->horaEmbarque;
        $voo->horaPartida=$request->horaPartida;
        $voo->dataChegada=$request->dataChegada;
        $voo->horaChegada=$request->horaChegada;
        
        //Associando pessoal Administrativo ao voo
        $voo->administrativo_id=1;

        //Associando percurso ao voo
        $voo->percurso_id=$request->percurso_id;
        //dd($request->percurso_id);
        
        //Associando avião ao voo
        $voo->aeronave_id=$request->aeronave_id;

        $voo->save();
    
        //Atribuindo tarifas ao voo
        $tarifas=$request->tarifas;
        for($i=0; $i < count($tarifas); $i++){
            if($tarifas[$i]!=null){
                Voo::find($voo->id)->tarifas()->attach($tarifas[$i]);
            }
        }

        Alert::success('sucesso', 'Voo criado com sucesso');
        return back();
    }

    //Listar detalhes das informações do voo
    public function listarDetalhesVoo($id){
        $voo=Voo::find($id);
        return view('voo.vooDetalhes',['voo'=>$voo]);
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
     * @param  \App\Models\Voo  $voo
     * @return \Illuminate\Http\Response
     */
    public function show(Voo $voo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Voo  $voo
     * @return \Illuminate\Http\Response
     */
    public function edit(Voo $voo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Voo  $voo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Voo $voo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Voo  $voo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Voo $voo)
    {
        //
    }
}
