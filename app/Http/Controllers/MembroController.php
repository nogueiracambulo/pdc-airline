<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role;
use App\Models\Membro;
use App\Models\User;
use App\Models\Preferencia;
use App\Models\Morada;
use App\Classes\Enc;
use Illuminate\Support\Facades\Hash;

use RealRashid\SweetAlert\Facades\Alert;

class MembroController extends Controller
{
    public function apresentarFormRegisto(){
        $roles=Role::all();
        return view('membro.registar',['roles'=>$roles]);
    }

    public function registarMembro(Request $request){
        //Criando um utilizador com as informações do membro passadas no formulário
        $user=new User();
        $user->name=$request->nome;
        $user->apelido=$request->apelido;
        $user->dataNascimento=$request->dataNascimento;
        $user->genero=$request->genero;
        $user->telefone=$request->telefone;
        $user->email=$request->email;
        $user->password=Hash::make($request->password);
        $user->save();

        //Atribuindo Função ao Utilizador
        User::find($user->id)->roles()->attach($request->funcao);

        //Criar morada e associar ao utilizador criado.
        $morada=new Morada();
        $morada->pais=$request->pais;
        $morada->cidade=$request->cidade;
        $morada->user_id=$user->id;
        $morada->save();

        //Definir preferencias de viagem para associar ao membro
        $preferencia=new Preferencia();
        $preferencia->refeicao=$request->refeicao;
        $preferencia->tipo_lugar=$request->tipo_lugar;
        $preferencia->save();


        //adicionando as informações de membro ao utilizador 
        $membro=new Membro();
        $membro->numero_membro="PD 000".$user->id;
        $membro->titulo="Sr";
        $membro->idioma_preferencia=$request->idioma_preferencia;
        $membro->milhas=0;
        $membro->user_id=$user->id;//Associando o id das preferencias ao membro
        $membro->preferencia_id= $preferencia->id;//Associando o id das preferencias ao membro
        $membro->save();

        Alert::success('sucesso', 'Membro registado com sucesso');
        return back();
    }

    //Listar todos membros
    public function listarMembros(){
        $membros=Membro::all();
        return view('membro.membros',['membros'=>$membros]);
    }

    //Listar detalhes das informações de um Membro PDC
    public function listarDetalhesMembro($id){
        $enc=new Enc;
        $id= $enc->desencriptar($id);
        $membro=Membro::find($id);
        return view('membro.membroDetalhes',['membro'=>$membro]);
    }
    
}
