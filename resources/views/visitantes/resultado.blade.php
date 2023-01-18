@extends('layouts.painel.principal')
@section('titulo', 'PDC-AIRLINES - MEMBROS')


@section('content')
    <div class="content">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Reservas <i class="fas fa-arrow-right"></i> Selecionar voo</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/">Inicio</a></li>
                            <li class="breadcrumb-item active">Reserva</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>
        <blockquote class="">
            <b>SUA PESQUISA<b>
                <table class="table table-dark projects">
                    <thead>
                        <tr>
                            <th style="width: 10%">
                               Origem
                            </th>
                            <th style="width: 10%">
                                Destino
                            </th>
                            <th style="width: 15%">
                                Data de Partida
                            </th>
                      
                            <th style="width: 15%">
                               Data de Regresso
                            </th>
                        
                            <th style="width: 10%">
                                Classe(Tarifa)
                            </th>
                            <th style="width: 15%">
                                Nº de Passageiros
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                {{$pesquisa->origem}}
                            </td>
                            <td>
                                {{$pesquisa->destino}}
                            </td>
                            <td>
                                {{$pesquisa->dataIda}}
                            </td>
                            <td>
                                {{$pesquisa->dataVolta}}
                            </td>
                            <td>
                                {{$pesquisa->tarifa}}
                            </td>
                            <td>
                                {{$pesquisa->passageiros}}
                            </td>
                        </tr>
                    </tbody>
                </table>   
            ATENÇÃO! O preço apresentado abaixo é referente a cada passageiro!
        </blockquote>

        <section class="content">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Voos disponíveis de acordo à sua pesquisa</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    @isset($VoosDisponiveis)
                        <div class="row">
                            <div class="col-md-4">
                                <!-- small box -->
                                <div class="small-box bg-info">
                                    <div class="inner">
                                        <h3>
                                            @foreach($VoosDisponiveis->percurso->aeroportos as $aeroporto)
                                                {{$aeroporto->cidade}} @if(!$loop->last)<i class="fas fa-arrow-right"></i>@endif
                                            @endforeach    
                                        </h3>
                                        <p>Percurso</p>
                                    </div>
                                    <div class="icon">
                                        <i class="fas fa-plane"></i>
                                    </div>
                                    {{-- <a href="/voos/listar" class="small-box-footer"> Aceder <i class="fas fa-arrow-circle-right"></i></a> --}}
                                </div>
                            </div>

                            <div class="col-md-3">
                                <!-- small box -->
                                <div class="small-box bg-info">
                                    <div class="inner">
                                        <h3>
                                            {{$VoosDisponiveis->dataPartida}}
                                        </h3>
                                        <p> <i class="fas fa-clock"></i> {{$VoosDisponiveis->horaPartida}}</p>
                                    </div>
                                    <div class="icon">
                                        <i class="fas fa-calendar"></i>
                                    </div>
                                    {{-- <a href="/voos/listar" class="small-box-footer"> Aceder <i class="fas fa-arrow-circle-right"></i></a> --}}
                                </div>
                            </div>
                            
                            <div class="col-md-3">
                                <!-- small box -->
                                <div class="small-box bg-success">
                                    <div class="inner">
                                        <h3>
                                            87.000,kz
                                        </h3>
                                        <p> <i class="fas fa-user"></i> Por Passageiro</p>
                                    </div>
                                    <div class="icon">
                                        <i class="fas fa-money-bill"></i>
                                    </div>
                                    {{-- <a href="/voos/listar" class="small-box-footer"> Aceder <i class="fas fa-arrow-circle-right"></i></a> --}}
                                </div>
                            </div>
                            <div class="col-md-2">
                                <br><br>
                                <div class="text-right">
                                    <a href="/reserva/registo/{{$pesquisa->tarifa}}/{{$pesquisa->passageiros}}/{{$VoosDisponiveis->id}}/{{$pesquisa->origem}}/{{$pesquisa->destino}}" class="btn btn-success rounded-pill">Escolher</a>
                                </div>
                            </div>
                        </div>
                    @endisset
                    <hr>
                </div>
            </div>
        </div>
    </div>
@endsection 
