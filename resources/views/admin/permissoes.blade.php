@extends('layouts.painel.principal')
@section('titulo', 'MULONGI - Permissões')



@section('content')
    <div class="container-fluid">
        <section class="content-header">
            {{-- <div class="container-fluid"> --}}
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Gestão de Permissões</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/">Inicio</a></li>
                            <li class="breadcrumb-item active">Permissões</li>
                        </ol>
                    </div>
                </div>
            {{-- </div> --}}
        </section>

        {{-- BOTÃO MODAL, REGISTAR NOVA PERMISSÃO --}}         
        <div class="text-right ">
            <a href="#" data-toggle="modal" data-target="#Modal_Registar_permissao" 
            class="btn btn-outline-dark rounded-pill" role="button" aria-pressed="false"><i class="fas fa-plus-circle"></i> Adicionar Permissão</a>
        </div><br>
        
        <section class="content">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Permissão</h3>
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
                                <th style="width: 1%">
                                    ID
                                </th>
                                <th style="width: 20%">
                                    Nome
                                </th>
                                <th style="width: 30%">
                                    Descrição
                                </th>
                                <th style="width: 30%">
                                    Acção
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($permissions as $permission)
                            <tr>
                                <td>
                                    {{$permission->id}}
                                </td>
                                <td>
                                    <a>
                                        {{$permission->nome}}
                                    </a>
                                </td>
                                <td>
                                    <ul class="list-inline">
                                        {{$permission->descricao}}
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

