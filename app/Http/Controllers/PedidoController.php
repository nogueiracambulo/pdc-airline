<?php

namespace App\Http\Controllers;

use App\Models\Pedido;
use App\Models\Garimpo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PedidoController extends Controller
{



//O usuario pode pedir a adesao ao garimpo e esperar pela a aprovacao do pedido pelo 
     //criador do garimpo
     public function inscreverPedido($id)
     {
         $pedido = new Pedido;
         $pedido->garimpo_id=$id;
         $pedido->estado="pendente";
        
         $pedido->user_id = auth()->user()->id;
         
         $pedido->save();
         return redirect()->back()->with('sucesso', 'Pedido enviado com Sucesso');
     }
 
     //Permite a listagem de todos os pedidos de adesao aos garimpos do usuario
     public function listarPedido()
     {
         $userLogado = auth()->user()->id;
         
         $pedidos = DB::select("SELECT g.id as garimpoId, g.nome, u.name, p.created_at, p.id as pedidoId, g.inscritos
         FROM pedidos p, garimpos g, users u
         WHERE (g.id = p.garimpo_id and g.user_id = $userLogado) AND (p.estado = 'pendente' and u.id = p.user_id)");
 
         return view('profile.home', ['pedidos' => $pedidos]);
     }

     //Lista os pedidos relacionados a um Garimpo em específico
     public function listarPedidoGarimpo($idGarimpo)
     {
        $userLogado = auth()->user()->id;
        $garimpo=Garimpo::findOrfail($idGarimpo);

        $pedidos = DB::select("SELECT g.id as garimpoId, g.nome, u.profile_photo_path, u.name, p.created_at, p.id as pedidoId, g.inscritos
         FROM pedidos p, garimpos g, users u
         WHERE (g.id = p.garimpo_id and g.user_id = $userLogado and g.id= $idGarimpo) AND (p.estado = 'pendente' and u.id = p.user_id)");
 
         return view('layouts.Garimpo.listarPedidoGarimpo', ['pedidos' => $pedidos, 'garimpo'=>$garimpo]);
     }
 
     //Mediante a esta funcao o dono do garimpo pode rejeitar um pedido, bem como o usuario requisitante
     //cancelar o seu pedido de adesao ao garimpo
     public function eliminarPedido($id){
 
         $pedido = DB::select("
         delete from pedidos
         WHERE id = '{$id}'
         ");
         
         return redirect()->back()->with('sucesso', 'Pedido eliminado com Sucesso');
     }
 
     //Funcao que so o dono do garimpo pode fazer
     public function aceitarPedido($id, $numInscritos){
 
         $pedido = Pedido::find($id);
         $pedido->estado = "aceito";
         $idGarimpo = $pedido->garimpo_id;
         $pedido->save();
 
         $garimpo= DB::table('garimpos')
             ->where('id', $idGarimpo)
             ->update(['inscritos' => ($numInscritos+1)]);
        
         
         return redirect()->back()->with('sucesso', 'Pedido aceito com Sucesso');
     }
 
     //Lista os Membros dos usuarios do grupo
     public function listarMembrosGarimpo($idGarimpo, $nomeGarimpo){
 
         $membros = DB::select("Select u.id, u.name, g.nome, u.email, p.id as pedidoId
         from users u, pedidos p, garimpos g
         where (g.id = p.garimpo_id and p.user_id = u.id) AND (g.id = $idGarimpo and p.estado = 'aceito')");
 
         $logado = auth()->user()->id;

         $garimpo=Garimpo::findOrfail($idGarimpo);

         return view('layouts.Garimpo.listarMembrosGarimpo', ['membros'=> $membros, 'nomeGarimpo'=> $nomeGarimpo, 'garimpo'=> $garimpo]); 
 
     }
 
     //Lista os Garimpos do usuario Logado
     public function listarGarimpoUsuario(){
 
         $userLogado = auth()->user()->id;
 
         $garimpos = DB::select("SELECT g.id as garimpoId, g.nome, g.inscritos, g.descricao, u.name  
         FROM garimpos g, users u
         WHERE (g.user_id=u.id) and (u.id= $userLogado)");
 
         return view('layouts.Garimpo.listarGarimpoUsuario', ['garimpos'=> $garimpos]); 
     }
 
     public function removerMembro($pedidoId, $numInscritos){
 
         $pedido = pedido::find($pedidoId);
         $idGarimpo = $pedido->garimpo_id;
 
         $pedido = DB::select("
         delete from pedidos
         WHERE id = '{$pedidoId}'
         ");
 
         $garimpo= DB::table('garimpos')
         ->where('id', $idGarimpo)
         ->update(['inscritos' => ($numInscritos-1)]);
 
         return redirect()->back()->with('sucesso', 'Removido com sucesso');
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
     * @param  \App\Models\Pedido  $pedido
     * @return \Illuminate\Http\Response
     */
    public function show(Pedido $pedido)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pedido  $pedido
     * @return \Illuminate\Http\Response
     */
    public function edit(Pedido $pedido)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pedido  $pedido
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pedido $pedido)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pedido  $pedido
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pedido $pedido)
    {
        //
    }
}
