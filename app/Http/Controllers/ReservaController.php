<?php

namespace App\Http\Controllers;
use App\Models\Voo;
use App\Models\Percurso;
use App\Models\Aeroporto;
use App\Models\Tarifa;
use App\Models\Reserva;
use App\Models\Passageiro;
use App\Models\Bilhete;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class ReservaController extends Controller
{
    public function procurarDisponibilidade(Request $request){

        //Pegar todos os voos registados na base de dados
        $voos=Voo::all();
        $percursos=Percurso::all();
        $aeroportos=Aeroporto::all();
        $tarifas=Tarifa::all();
        $pesquisa=$request;
        
        // Converter os id passados no formulário em seu nomes.
        foreach($aeroportos as $aeroporto){
            if($aeroporto->id==$request->origem){
                $pesquisa->origem = $aeroporto->cidade;
            }
            if($aeroporto->id==$request->destino){
                $pesquisa->destino = $aeroporto->cidade;
            }
        }
        
        foreach($tarifas as $tarifa){
            if($tarifa->id==$request->tarifa){
                $pesquisa->tarifa = $tarifa->nome;
            }
        }
        
        /*Verificar se dentre os voos disponíveis algum corresponde 
        às informações trazidas do formulário*/
        foreach($voos as $voo){
            if($voo->dataPartida==$request->dataIda){
                $VoosDisponiveis=$voo;
                return view('visitantes.resultado',['VoosDisponiveis'=>$VoosDisponiveis,'pesquisa'=>$pesquisa]);
            }
        }
        
        return view('visitantes.resultado',['pesquisa'=>$pesquisa]);
   }


   public function apresentarFormRegisto($tarifa, $passageiros, $voo_id, $origem_id, $destino_id){
        $voos=Voo::all();
        $aeroportos=Aeroporto::all();
        $tarifas=Tarifa::all();

        return view('reserva.registar',['tarifa'=>$tarifa,'tarifas'=>$tarifas, 'passageiros'=>$passageiros,'voo_id'=>$voo_id,'voos'=>$voos,'origem_id'=>$origem_id,'destino_id'=>$destino_id, 'aeroportos'=>$aeroportos]);
   }


   public function registarReserva(Request $request){
        $voos=Voo::all();

        $passageiro=new Passageiro;
        $passageiro->nome=$request->nome;
        $passageiro->sobrenome=$request->sobrenome;
        $passageiro->genero=$request->genero;
        $passageiro->telefone=$request->telefone;
        $passageiro->email=$request->email;
        $passageiro->dataNascimento=$request->dataNascimento;
        $passageiro->save();
    
        $bilhete=new Bilhete;
        $bilhete->estado="aberto";
        $bilhete->referencia="PDC11900".$passageiro->id;
        $bilhete->tipo="ida e volta";
        $bilhete->tarifa_id=$request->tarifa;
        $bilhete->passageiro_id=$passageiro->id;
        $bilhete->save();

        $reserva=new Reserva;
        $reserva->quantidade_passageiro=$request->passageiros;
        foreach($voos as $voo){
            if($voo->id==$request->voo){
                $reserva->dataIda=$voo->dataPartida;
                // $reserva->dataRegresso=$voo->dataRegresso;
            }
        }
        
        $reserva->origem_id=$request->origem_id;
        $reserva->destino_id=$request->destino_id;
        $reserva->save();

        //Adicionar à reserva criada o Voo com id vindo do formulário
        Reserva::find($reserva->id)->voos()->attach($request->voo_id);

        //Adicionar à reserva criada o bilhete criado.
        Reserva::find($reserva->id)->bilhetes()->attach($bilhete->id);

        Alert::success('Concluido', 'Reserva criada com sucesso.');
        return back();
    }
}
