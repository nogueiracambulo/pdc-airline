{{-- @extends('layouts.main') --}}
@extends('layouts.painel.principal')
@section('titulo', 'CCGUIDER - PERFIL DA DISCIPLINA')


@section('content')
    <div class="container-fluid">
        <!-- SESSÃO PARA ORIENTAÇÃO NA NAVEGAÇÃO ENTRE PÁGINAS -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Biblioteca</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/">Início</a></li>
                            <li class="breadcrumb-item active">{{$conteudo->disciplina->turma_id}}º ANO</li>
                        </ol>
                    </div>
                </div>
            </div>
            <div class="list-inline">
                <div class="text-right ">
                    @can('add_role')
                        <!-- BOTÃO MODAL, EDITAR CONTEÚDO-->         
                        <a href="#" data-toggle="modal" data-target="#Modal_Registar_Conteudo" 
                        class="btn btn-outline-primary rounded-pill" role="button" aria-pressed="false"><i class="fas fa-edit"></i> Editar conteúdo</a>
                    @endcan
                    @can('add_role')
                        <!-- BOTÃO MODAL,ELIMINAR CONTEÚDO --> 
                        {{-- <a href="/conteudos/eliminarConteudo/{{$conteudo->id}}"  --}} 
                        <a href="#" data-toggle="modal" data-target="#ModalDelete{{$conteudo->id}}" 
                        class="btn btn-outline-danger rounded-pill" role="button" aria-pressed="true"><i class="fas fa-trash"></i> Eliminar conteúdo</a>
                    @endcan
                </div>
            </div><br>
        </section>  

        {{-- @foreach ($disciplinas as $disciplina) --}}

            {{-- <!-- @foreach ($conteudo as $conteudo) --> --}}
            <!-- CONTEÚDO CENTRAL -->
                <div class=" col-md-12 "><br>

                    <div class="card">
                        <blockquote class="">
                            <b>Título do conteúdo: </b>{{$conteudo->titulo}} <br>
                            <b>Descrição: </b>{{ $conteudo->descricao }}
                        </blockquote>
                    </div>
                    <div class="post">
                        <div class="card">
                            <div class="card-body">
                                <div class="tab-content">
                                    <div class="active tab-pane" id="activity">
                                        <div class="user-block">
                                            <span class="username">
                                                {{-- <!-- <a href="/agente/perfil/{{$usuario->id}}">{{$usuario->name}} </a> --> --}}
                                                <a href="#" class="float-right btn-tool"><i class="fas fa-times"></i></a>
                                            </span>
                                        </div>

                      
                                        <div class="container">
                                            <div class="col-12">
                                                <iframe height="500" scrolling="no" width="100%" src="/storage/{{$conteudo->ficheiro}}" frameborder="0"></iframe>
                                            </div>
                                        </div>

                                        <div class="col-12 col-sm-8">
                                            <hr>
                                            <div class="row">
                                                <div class="col-12 col-sm-7">
                                                    <h5 class="mt-0">Disciplina: {{$conteudo->disciplina->nome}} </h5>
                                                </div>
                                                <div class="col-8 col-sm-5">
                                                    <!-- botão  (Baixar conteúdo Gratis) -->
                                                    <!-- <a class="btn btn-danger" href="#" data-toggle="modal" data-target="#ModalDelete{{$conteudo->id}}">
                                                        <i class="fa fa-trash fa-lg mr-0"></i>
                                                        Eliminar
                                                    </a> -->
                                                    <a class="btn btn-success" href="/conteudo/baixar/{{$conteudo->ficheiro}}">
                                                        <i class="fa fa-download fa-lg mr-0"></i>
                                                        Baixar
                                                    </a><br>
                                                </div>                                        
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mt-4">
                                        <nav class="w-100">
                                            <div class="nav nav-tabs" id="product-tab" role="tablist">
                                                <a class="nav-item nav-link" id="product-owner-tab" data-toggle="tab" href="#product-owner" role="tab" aria-controls="product-owner" aria-selected="true">Sobre</a>
                                                <a class="nav-item nav-link" id="product-comments-tab" data-toggle="tab" href="#product-comments" role="tab" aria-controls="product-comments" aria-selected="false">Mais detalhes</a>
                                            </div>
                                        </nav>
                                        <div class="tab-content p-2" id="nav-tabContent">
                                            <div class="tab-pane fade" id="product-owner" role="tabpanel" aria-labelledby="product-owner-tab"><b>Autor:</b> {{$conteudo->user->name}} <br> <b>Descricao do conteúdo:</b> {{$conteudo->descricao}}  </small></h4> </div>
                                            <div class="tab-pane fade" id="product-comments" role="tabpanel" aria-labelledby="product-comments-tab"><b>Data de criação:</b>  {{$conteudo->created_at}} <br> <b> Última actualização:</b>  {{$conteudo->updated_at}} <br></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
             {{-- <!-- @endforeach --> --}}
        {{-- @endforeach  --}}
    </div>
@endsection
