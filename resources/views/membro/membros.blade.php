@extends('layouts.painel.principal')
@section('titulo', 'PDC-AIRLINES - MEMBROS')


@section('content')
    {{-- {{dd($roles)}} --}}
    <div class="content">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Membros do Clube PDC-Airlines</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/">Inicio</a></li>
                            <li class="breadcrumb-item active">Membros</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>
               
        <div class="text-right ">
            {{-- BOTÃO MODAL, REGISTAR NOVO MEMBRO --}} 
            <a href="#" class="btn btn-outline-primary rounded-pill" role="button" aria-pressed="false"><i class="fas fa-plus-circle"></i> Voo</a>
        </div><br>
        
        <section class="content">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Membros PDC-Airlines</h3>
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
                                <th style="width: 5%">
                                    Título
                                </th>
                                <th style="width: 15%">
                                    Nome completo
                                </th>
                                
                                <th style="width: 10%">
                                D.Nascimento
                                </th>
                                <th style="width: 10%">
                                    Género
                                </th> 
                                <th style="width: 10%">
                                    Telefone
                                </th> 
                                <th style="width: 15%">
                                    Morada
                                </th>
                                <th style="width: 10%">
                                    Nº Membro
                                </th>
                                <th style="width: 20%">
                                    Acção
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($membros as $membro)
                            <tr>
                                <td>
                                    {{$membro->titulo}}
                                </td>
                                
                                <td>
                                    {{$membro->user->name}} {{$membro->user->apelido}}
                                </td>
                              
                                <td>
                                    {{$membro->user->dataNascimento}}
                                </td>
                                <td>
                                    {{$membro->user->genero}}
                                </td>
                                <td>
                                    {{$membro->user->telefone}}
                                </td>
                                <td>
                                    {{$membro->user->morada->cidade}}-{{$membro->user->morada->pais}}
                                </td>
                            
                                <td>
                                    {{$membro->numero_membro}}
                                </td>
                                {{-- <td class="list-inline">
                                    {{$membro->preferencia->refeicao}}-{{$membro->preferencia->tipo_lugar}}
                                </td> --}}
                            
                                <td class="list-inline">
                                    <a class="btn btn-primary btn-sm rounded-pill" href="/membros/listarDetalhes/{{$membro->id}}">
                                        <i class="fas fa-eye">
                                        </i>
                                        Detalhes
                                    </a>
                                    {{-- <a class="btn btn-info btn-sm rounded-pill" href="#">
                                        <i class="fas fa-pencil-alt">
                                        </i>
                                        Editar
                                    </a>
                                    <a class="btn btn-danger btn-sm rounded-pill" href="#" data-toggle="modal" data-target="#">
                                        <i class="fas fa-trash">
                                        </i>
                                        Eliminar
                                    </a> --}}
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
