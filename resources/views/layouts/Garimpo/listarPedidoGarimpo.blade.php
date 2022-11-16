@extends('layouts.painel.principal')


@section('content')
    <section class="courses-section spad">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Garimpo {{ $garimpo->nome }} <br> Pedidos de adesão</h1>

                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/">Inicio</a></li>
                            <li class="breadcrumb-item active">Garimpo</li>
                        </ol>
                    </div>
                </div>

                <div class="text-right ">
                    {{-- BOTÃO MODAL, LISTAR TODOS PEDIDOS DE ADESÃO --}}
                    <a href="/pedidos/garimpo"
                        class="btn btn-outline-primary rounded-pill" role="button" aria-pressed="false">
                        <i class="fas fa-bell"></i> Ver todos pedidos</a>
                </div>
            </div>
        </section>
        <div class="row container-fluid">
            <div class="col-md-4">
                <div class=" card-outline">
                    <div class="small-box bg-info">
                        <div class="inner">
							
                            <h5>{{ $garimpo->descricao }}</h5>
                            <h4>{{ $garimpo->nome }}</h4>
                            <br><br>
                        </div>
                        <div class="icon">
                            <i class="fas fa-chalkboard-teacher"></i>
                        </div>
                    </div>
                </div>

                <!-- Caixa sobre mim -->
                <div class="card-info">
                    <div class="card-header">
                        <h3 class="card-title">Sobre o Garimpo</h3>
                    </div>
                    <div class="card card-body">
                        <strong><i class="fas"></i>Número de Inscritos</strong>
                        <p class="text-muted">{{$garimpo->inscritos}} membros</p>
                        <hr>
                        <strong><i class="fa fa"></i> Criado por</strong>
                        <p class="text-muted">{{$garimpo->user->name }}</p>
                        <hr>

                        <strong><i class="fas fa-"></i>data de Criação</strong>
                        <p class="text-muted">{{ $garimpo->created_at }}</p>
                        <hr>
                    </div>
                </div>
            </div>

            <div class="col-md-8">
                <section class="content">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Pedidos de adesão</h3>
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
                                           <i class="fas fa-user-circle"></i>
                                        </th>
                                        <th style="width: 20%">
                                            Nome
                                        </th>
                                        {{-- <th style="width: 20%">
                                            E-mail
                                        </th> --}}

                                        <th style="width: 30%">
                                            Acção
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($pedidos as $user)
                                        <tr>
                                            <td>
                                                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                                                    <div class="image">
                                                        <img src={{ $user->profile_photo_path }} class="img-circle elevation-2" alt="Foto perfil">
                                                    </div>
                                                </div>  
                                            </td>

                                            <td> <a>{{ $user->name }} </a></td>
                                            {{-- <td>
                                                <ul class="list-inline">
                                                    <li class="list-inline-item">
                                                        {{ $user->email }}
                                                    </li>
                                                </ul>
                                            </td> --}}

                                            <td class="list-inline">
                                                <a class="btn btn-success btn-sm" href="aceitar/pedido/{{$user->pedidoId}}/{{$user->inscritos}}">
                                                    <i class="fas fa-yes"></i> Aceitar
                                                </a>
                                             
                                                <a class="btn btn-danger btn-sm"
                                                    href="eliminar/pedido/{{$user->pedidoId}}">
													<i class="fas fa-ban"></i> Rejeitar
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </section>
@endsection
