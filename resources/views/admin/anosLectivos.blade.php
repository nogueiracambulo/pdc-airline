@extends('layouts.painel.principal')
@section('titulo', 'MULONGI -Ano Lectivo')



@section('content')
    {{-- {{dd($roles)}} --}}
    <div class="content">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Anos Lectivos</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/">Inicio</a></li>
                            <li class="breadcrumb-item active">Anos Lectivos</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>
        
        {{-- BOTÃO MODAL, SELECIONAR UM ANO LECTIVO PARA MOSTRAR OS CONTEÚDOS BASEADOS NELE--}}         
        <div class="list-inline">
            <div class="text-right ">
                <a href="#" data-toggle="modal" data-target="#Modal_Selecionar_anoLectivo" 
                class="btn btn-outline-primary rounded-pill" role="button" aria-pressed="false"><i class="fa fa-calendar-check"></i> Selecionar ano</a>
            
                @can('add_role')
                    {{-- BOTÃO MODAL, REGISTAR NOVA PERMISSÃO --}}         
                    <a href="#" data-toggle="modal" data-target="#Modal_Registar_anoLectivo" 
                    class="btn btn-outline-primary rounded-pill" role="button" aria-pressed="false"><i class="fas fa-plus-circle"></i> Novo Ano</a>
                @endcan
            </div>
        </div><br>

        <section class="content">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Todos anos Lectivos Registados </h3>
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
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th style="width: 1%">
                                    ID
                                </th>
                                <th style="width: 20%">
                                    Descrição
                                </th>

                                <th style="width: 20%">
                                    Activo
                                </th>
                               
                                <th style="width: 30%">
                                    Acção
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($todos_anos as $anoLectivo)

                            <tr  @if($anoLectivo->selecionado==1) class="table-success" @endif>
                                <td>
                                    {{ $anoLectivo->id }}
                                </td>
                                
                                <td>
                                    <a>
                                        {{$anoLectivo->descricao}}
                                    </a>
                                </td>

                                <td>
                                    @if($anoLectivo->selecionado==1) 
                                        Sim
                                    @else
                                        Não
                                    @endif

                                </td>
                                <td class="list-inline">
                                    <a class="btn btn-primary btn-sm" href="/ver_detalhes">
                                        <i class="fas fa-folder">
                                        </i>
                                        Ver
                                    </a>
                                    <a class="btn btn-info btn-sm" href="#">
                                        <i class="fas fa-pencil-alt">
                                        </i>
                                        Editar
                                    </a>
                                    <a class="btn btn-danger btn-sm" href="#">
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
