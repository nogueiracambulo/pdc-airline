@extends('layouts.painel.principal')
@section('titulo', 'MULONGI - Utilizadores')


@section('content')
    {{-- {{dd($roles)}} --}}
    <div class="content">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Aeroportos disponíveis no PDC-Airlines</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/">Inicio</a></li>
                            <li class="breadcrumb-item active">Aeroportos</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>
             
        <div class="text-right ">
               {{-- BOTÃO MODAL, LISTAR PERCURSOS --}} 
            <a href="/percursos/listar"  class="btn btn-outline-primary rounded-pill" role="button" aria-pressed="false"><i class="fas fa-route"></i> Percursos(Rotas)</a>

               {{-- BOTÃO MODAL, REGISTAR AEROPORTO --}} 
            <a href="#" data-toggle="modal" data-target="#Modal_Registar_aeroporto" 
            class="btn btn-outline-primary rounded-pill" role="button" aria-pressed="false"><i class="fas fa-plus-circle"></i> Aeroporto</a>
        </div><br>
        <section class="content">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Cidades</h3>
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
                                <th style="width: 20%">
                                    Cidade
                                </th>
                                <th style="width: 20%">
                                    Código IATA
                                </th>

                                <th style="width: 20%">
                                    Acção
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($aeroportos as $aeroporto)
                            <tr>
                                <td>
                                    <a>
                                        {{$aeroporto->cidade}}
                                    </a>
                                </td>
                                <td>
                                    
                                    {{$aeroporto->codigoIATA}}
                                     
                                </td>
                                
                              
                                <td class="list-inline">
                                    <a class="btn btn-primary btn-sm" href="#">
                                        <i class="fas fa-folder">
                                        </i>
                                        Ver
                                    </a>
                                    <a class="btn btn-info btn-sm" href="#">
                                        <i class="fas fa-pencil-alt">
                                        </i>
                                        Editar
                                    </a>
                                    <a class="btn btn-danger btn-sm" href="#" data-toggle="modal" data-target="#">
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
