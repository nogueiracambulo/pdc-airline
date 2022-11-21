@extends('layouts.painel.principal')


@section('content')
    <section class="courses-section spad">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Garimpo {{ $garimpo->nome }} <br> Todos membros</h1>

                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/">Inicio</a></li>
                            <li class="breadcrumb-item active">Garimpo</li>
                        </ol>
                    </div>
                </div>

                <div class="text-right ">
                    {{-- BOTÃO MODAL, MOSTRAR CHAT DO GARIMPO --}}
                    <a href="/ver/chat/{{$garimpo->id}}/{{$garimpo->id}}"
                    class="btn btn-outline-primary rounded-pill" role="button" aria-pressed="false">
                    <i class="fas fa-comment"></i> Chat</a>

                    {{-- BOTÃO MODAL, LISTAR MEMBROS --}}
                    <a href="/pedidos/garimpo/{{ $garimpo->id }}"
                    class="btn btn-outline-primary rounded-pill" role="button" aria-pressed="false">
                    <i class="fas fa-bell"></i> Pedidos de adesão</a>
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
                            <h3 class="card-title">Inscritos ao garimpo</h3>
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
                                            Acção
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($membros as $user)
                                        <tr>
                                            <td>{{ $user->id }}</td>
                                            <td> <a>{{ $user->name }} </a></td>
                                            <td>
                                                <ul class="list-inline">
                                                    <li class="list-inline-item">
                                                        {{ $user->email }}
                                                    </li>
                                                </ul>
                                            </td>

                                            <td class="list-inline">
                                                <a class="btn btn-primary btn-sm" href="/ver_detalhes">
                                                    <i class="fas fa-user"></i> Ver perfil
                                                </a>
                                             
                                                <a class="btn btn-danger btn-sm"
                                                    href="/remover/membro/{{ $user->pedidoId }}/{{ $garimpo->inscritos }}">
													<i class="fas fa-trash"></i> Remover
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
