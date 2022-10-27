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
                        <h1>Administradores</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/">Inicio</a></li>
                            <li class="breadcrumb-item active">Administradores</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>

        {{-- BOTÃO MODAL, REGISTAR NOVA PERMISSÃO --}}
        {{-- <div class="text-right ">
            <a href="#" data-toggle="modal" data-target="#Modal_Registar_Conteudo" class="btn btn-primary"
                role="button" aria-pressed="false">Criar utilizador</a>
        </div><br> --}}
        <section class="content">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Administradores</h3>
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
                                    Papel(Função)
                                </th>
                                <th style="width: 30%">
                                    Acção
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                                @foreach ($user->roles as $role)
                                    @if ($role->nome == 'admin')
                                        <tr>
                                            <td>
                                                {{ $user->id }}
                                            </td>

                                            <td>
                                                <a>
                                                    {{ $user->name }}
                                                </a>
                                            </td>
                                            <td>
                                                <ul class="list-inline">
                                                    <li class="list-inline-item">
                                                        <span class="badge badge-success">{{ $role->nome }}</span>
                                                    </li>
                                                </ul>
                                            </td>
                                            <td class="list-inline">
                                                <a class="btn btn-info btn-sm" href="#">
                                                    <i class="fas fa-pencil-alt">
                                                    </i>
                                                    Editar
                                                </a>
                                            </td>
                                        </tr>
                                    @endif
                                @endforeach
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
    </div>
    </div>
@endsection
