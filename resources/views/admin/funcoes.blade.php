@extends('layouts.painel.principal')
@section('titulo', 'MULONGI - Painel de Administrador')



@section('content')
    <div class="container-fluid">
        <section class="content-header">
            {{-- <div class="container-fluid"> --}}
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Gestão de Funções</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/">Inicio</a></li>
                            <li class="breadcrumb-item active">Funções</li>
                        </ol>
                    </div>
                </div>
            {{-- </div> --}}
        </section>
        {{-- BOTÃO MODAL, REGISTAR NOVA FUNÇÃO --}}
        <div class="text-right ">
            <a href="#" data-toggle="modal" data-target="#Modal_Registar_funcao" 
            class="btn btn-primary" role="button" aria-pressed="false"><i class="fas fa-plus-circle"></i> Adicionar Papel</a>
        </div><br>
        
        <section class="content">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Função/Papel</h3>
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
                    <table class="table table-striped projects">
                        <thead>
                            <tr>
                                <th style="width: 1%">
                                    ID
                                </th>
                                <th style="width: 20%">
                                    Nome
                                </th>
                                <th style="width: 30%">
                                    Dascrição
                                </th>
                                <th>
                                    Permissões
                                </th>

                                <th style="width: 30%">
                                    Acção
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($roles as $role)
                            <tr>
                                <td>
                                    {{$role->id}}
                                </td>
                                <td>
                                    <a>
                                        {{$role->nome}}
                                    </a>
                                </td>
                                <td>
                                    <ul class="list-inline">
                                        {{$role->descricao}}
                                    </ul>
                                </td>
                                <td>
                                    <ul class="list-inline">
                                        @foreach($role->permissions as $permission)
                                            {{$permission->nome}} <br>
                                        @endforeach
                                    </ul>
                                </td>
                                <td class="list-inline">
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
