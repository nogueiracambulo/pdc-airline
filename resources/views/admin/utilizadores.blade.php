@extends('layouts.painel.principal')
@section('titulo', 'MULONGI - Utilizadores')


@section('content')
    {{-- {{dd($roles)}} --}}
    <div class="content">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Utilizadores</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/">Inicio</a></li>
                            <li class="breadcrumb-item active">Utilizadores</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>
        {{-- BOTÃO MODAL, REGISTAR NOVA PERMISSÃO --}}         
        <div class="text-right ">
            <a href="#" data-toggle="modal" data-target="#Modal_Registar_utilizador" 
            class="btn btn-outline-primary rounded-pill" role="button" aria-pressed="false"><i class="fas fa fa-user-plus"></i> Novo utilizador</a>
        </div><br>
        <section class="content">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Utilizadores</h3>
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
                                <th style="width: 20%">
                                    E-mail
                                </th>
                                <th style="width: 30%">
                                    Papel(Função)
                                </th>
                                <th style="width: 30%">
                                    Acção
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $user)
                            <tr>
                                <td>
                                    {{ $user->id }}
                                </td>
                                
                                <td>
                                    <a>
                                        {{$user->name}}
                                    </a>
                                </td>
                                <td>
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                            {{$user->email}}
                                        </li>
                                    </ul>
                                </td>
                                <td>
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                            @foreach($user->roles as $role)
                                                <span class="badge badge-success">{{$role->nome}}</span>
                                            @endforeach
                                        </li>
                                    </ul>
                                </td>
                              
                                <td class="list-inline">
                                    <a class="btn btn-primary btn-sm" href="/ver_detalhes">
                                        <i class="fas fa-folder">
                                        </i>
                                        Ver
                                    </a>
                                    <a class="btn btn-info btn-sm" href="/editar_utilizador/{{$user->id}}">
                                        <i class="fas fa-pencil-alt">
                                        </i>
                                        Editar
                                    </a>
                                    <a class="btn btn-danger btn-sm" href="#" data-toggle="modal" data-target="#Modal_eliminar_user">
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
