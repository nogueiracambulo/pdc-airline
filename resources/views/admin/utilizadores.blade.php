@extends('layouts.painel.principal')
@section('titulo', 'MULONGI - Painel de Administrador')


{{-- @include('biblioteca_cc/modal_Disciplina/registarDisciplina')
@include('biblioteca_cc/modal_Disciplina/sucesso')
@include('biblioteca_cc/modal_Conteudo/registarConteudo') --}}

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
                                    #
                                </th>
                                <th style="width: 20%">
                                    Nome
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
                                    #
                                </td>
                                
                                <td>
                                    <a>
                                        {{$user->name}}
                                    </a>
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
                                        View
                                    </a>
                                    <a class="btn btn-info btn-sm" href="#">
                                        <i class="fas fa-pencil-alt">
                                        </i>
                                        Edit
                                    </a>
                                    <a class="btn btn-danger btn-sm" href="#">
                                        <i class="fas fa-trash">
                                        </i>
                                        Delete
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            {{-- BOTÃO MODAL, REGISTAR CONTEÚDO --}}
            <div class="row">
                <div class=" offset-1 col-lg-4 col-6"></div>
                <div class="text-center ">
                    <br>
                    <a href="#" data-toggle="modal" data-target="#Modal_Registar_Conteudo" class=""
                        role="button" aria-pressed="false"><i class="fa fa-plus-circle fa-4x"></i></a>
                    <br><a href="#" data-toggle="modal" data-target="#Modal_Registar_Conteudo" class=""
                        role="button" aria-pressed="false">Novo Conteúdo</i></a><br>
                </div>
            </div>
        </div>
    </div>
@endsection
