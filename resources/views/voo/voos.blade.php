@extends('layouts.painel.principal')
@section('titulo', 'MULONGI - Utilizadores')


@section('content')
    {{-- {{dd($roles)}} --}}
    <div class="content">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Voos disponíveis</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/">Inicio</a></li>
                            <li class="breadcrumb-item active">Voos</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>
               
        <div class="text-right ">
             {{-- BOTÃO MODAL, LISTAR FROTA --}} 
            <a href="/frota/listar"  class="btn btn-outline-primary rounded-pill" role="button" aria-pressed="false"><i class="fas fa-list"></i> Ver Frota(Aviões)</a>
            
            {{-- BOTÃO MODAL, REGISTAR VOO --}} 
            <a href="#" data-toggle="modal" data-target="#Modal_Registar_voo" 
            class="btn btn-outline-primary rounded-pill" role="button" aria-pressed="false"><i class="fas fa-plus-circle"></i> Voo</a>
        </div><br>
        
        <section class="content">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Voos</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body p-0">
                    <table class="table table-dark projects">
                        <thead>
                            <tr>
                                <th style="width: 10%">
                                    Nº Voo
                                </th>
                                <th style="width: 15%">
                                    Data de partida
                                </th>
                                <th style="width: 15%">
                                    Hora de partida
                                </th>
                                {{-- <th style="width: 10%">
                                    checkin
                                </th>
                                <th style="width: 10%">
                                    Embarque
                                </th> --}}
                             
                                {{-- <th style="width: 10%">
                                    Chegada
                                </th> --}}
                                <th style="width: 10%">
                                    Percurso
                                </th>
                            
                                <th style="width: 10%">
                                    Aeronave
                                </th>
                                <th style="width: 15%">
                                    Tarifas disponíveis
                                </th>
                                <th style="width: 30%">
                                    Acção
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($voos as $voo)
                            <tr>
                                <td>
                                    {{$voo->numero_voo}}
                                </td>
                                <td>
                                    {{$voo->dataPartida}}
                                </td>
                                <td>
                                    {{$voo->horaPartida}}
                                </td>
                          
                                <td class="list-inline">
                                    @foreach($voo->percurso->aeroportos as $aeroporto)
                                        {{$aeroporto->codigoIATA}} @if(!$loop->last)<i class="fas fa-arrow-right"></i>@endif
                                    @endforeach
                                </td>
                                <td class="list-inline">
                                    {{$voo->aeronave->matricula}}
                                </td>
                                <td class="list-inline">
                                    @foreach($voo->tarifas as $tarifa)
                                        {{$tarifa->codigo}} @if(!$loop->last),@endif
                                    @endforeach
                                </td>
                                <td class="list-inline">
                                    <a class="btn btn-primary btn-sm rounded-pill" href="/voo/listarDetalhes/{{$voo->id}}">
                                        <i class="fas fa-eye">
                                        </i>
                                        detalhes
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
