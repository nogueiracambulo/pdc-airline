@extends('layouts.painel.principal')
@section('titulo', 'MULONGI - Utilizadores')


@section('content')
    {{-- {{dd($roles)}} --}}
    <div class="content">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Frota PDC-Airlines</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/">Inicio</a></li>
                            <li class="breadcrumb-item active">Frota</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>
             
        <div class="text-right ">
               {{-- BOTÃO MODAL, LISTAR VOOS --}} 
            <a href="/voos/listar"  class="btn btn-outline-primary rounded-pill" role="button" aria-pressed="false"><i class="fas fa-plane"></i> Voos</a>

               {{-- BOTÃO MODAL, REGISTAR AVIÃO --}} 
            <a href="#" data-toggle="modal" data-target="#Modal_Registar_aviao" 
            class="btn btn-outline-primary rounded-pill" role="button" aria-pressed="false"><i class="fas fa-plus-circle"></i> Avião(Aeronave)</a>
        </div><br>
        <section class="content">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Frota(Aviões)</h3>
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
                                    Nome
                                </th>
                                <th style="width: 10%">
                                    Matricula
                                </th>

                                <th style="width: 10%">
                                    Marca
                                </th>

                                <th style="width: 10%">
                                    Modelo
                                </th>
                                <th style="width: 20%">
                                    Capacidade por cabine
                                </th>
                                <th style="width: 20%">
                                    Imagem do Avião
                                </th>
                                <th style="width: 30%">
                                    Acção
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($aeronaves as $aviao)
                                <tr>
                                    <td>
                                        <a>
                                            {{$aviao->nome}}
                                        </a>
                                    </td>
                                    <td>
                                        <a>
                                            {{$aviao->matricula}}
                                        </a>
                                    </td>
                                    <td>
                                        <a>
                                            {{$aviao->marca}}
                                        </a>
                                    </td>
                                    <td>
                                        <a>
                                            {{$aviao->modelo}}
                                        </a>
                                    </td>
                                    <td class="list-inline">
                                        @foreach($aviao->cabines as $cabine)
                                            &nbsp; {{$cabine->tarifa->codigo}} &nbsp;&nbsp;
                                        @endforeach <br>
                                        @foreach($aviao->cabines as $cabine)
                                            {{$cabine->capacidade}}  &nbsp;&nbsp;
                                        @endforeach
                                    </td>
                                    <td>
                                        <div class="row">
                                            <div class="col-lg-3">                                            
                                                <img src="/storage/{{$aviao->foto}}" width="100">
                                            </div>  
                                        </div>
                                    </td><br>
                                
                                    <td class="list-inline">
                                        <a class="btn btn-info btn-sm rounded-pill" href="#" data-toggle="modal" data-id="{{$aviao->id}}" data-target="#Modal_Registar_cabine">
                                            <i class="fas fa-pencil-alt">
                                            </i>
                                            cabine
                                        </a>
                                        <a class="btn btn-danger btn-sm rounded-pill" href="#" data-toggle="modal" data-target="#">
                                            <i class="fas fa-trash">
                                            </i>
                                            Eliminar
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
