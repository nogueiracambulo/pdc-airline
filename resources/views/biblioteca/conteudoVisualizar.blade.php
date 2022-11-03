{{-- @extends('layouts.main') --}}
@extends('layouts.painel.principal')
@section('titulo', 'CCGUIDER - PERFIL DA DISCIPLINA')


@section('content')
    <div class="container-fluid">
        <!-- SESSÃO PARA ORIENTAÇÃO NA NAVEGAÇÃO ENTRE PÁGINAS -->
        <div class="site-breadcrumb">
            <div class="container">
                <a href="/"><i class="fa fa-home"></i> Início</a> <i class="fa fa-angle-right"></i>
                <a href="/biblioteca_cc"><span>Biblioteca CC </span></a>
                <i class="fa fa-angle-right"></i>
                    @foreach ($disciplina as $discipl)
                        <a href="/conteudos/turma/1"><span>{{$discipl->ano}}º ANO </span></a>
                        <i class="fa fa-angle-right"></i>
                        <span>
                            {{$discipl->nome}}
                    @endforeach
                </span>
            </div>
        </div>

        @foreach ($disciplina as $disciplina)
            
     
            {{-- CONTEÚDO CENTRAL --}}
            {{-- @foreach ($conteudo as $conteudo) --}}

                <div class=" offset-1 col-md-9 "><br>

                    <div class="card">
                        <blockquote class="">
                            <b>Título do conteúdo: </b>{{$conteudo->titulo}} <br>
                            <b>Descrição: </b>{{ $conteudo->descricao }}
                        </blockquote>
                        <div class="col-lg-12 post-list">
                            <div class="card-body">
                                <div class="text-center " >
                                    <a href="#" data-toggle="modal" data-target="#Modal_Registar_Conteudo"  class="link_btn" role="button" aria-pressed="false" ><i class="fa fa-plus-circle fa-4x"></i></a>
                                    <br><a href="#" data-toggle="modal" data-target="#Modal_Registar_Conteudo"  class="link_btn" role="button" aria-pressed="false" >Novo Conteúdo</i></a><br>
                                </div>
                            </div>
                        </div>
                    </div>

                    @if(\Session::has('sucesso'))
                        <div class="alert alert-success">
                            {!! \Session::get('sucesso')!!}
                        </div>
                    @endif
                    <div class="post">
                        <div class="card">
                            <div class="card-body">
                                <div class="tab-content">
                                    <div class="active tab-pane" id="activity">
                                        <div class="user-block">
                                            <span class="username">
                                                {{-- <a href="/agente/perfil/{{$usuario->id}}">{{$usuario->name}} </a> --}}
                                                <a href="#" class="float-right btn-tool"><i class="fas fa-times"></i></a>
                                            </span>
                                        </div>

                                        <div id="image-container" style="width:100%">
                                            {{-- <img src="/img/{{$conteudo->imagem}}" class="img-fluid"><br><br> --}}
                                        </div>

                                        <div class="container-fluid">
                                            <div class="col-12">
                                                <iframe height="500" scrolling="no" width="100%" src="/conteudos/{{$conteudo->conteudo}}" frameborder="0"></iframe>
                                            </div>
                                        </div>

                                        <div class="col-12 col-sm-8">
                                            <h5 class="my-3">Título: {{$conteudo->titulo}} </h5>
                                            <hr>
                                            <div class="row">
                                                <div class="col-12 col-sm-7">
                                                    <h4 class="mt-0"><small>Disciplina: </small><br>{{$disciplina->nome}} </h4>

                                                    <div class=" bg-light">

                                                    </div>
                                                </div>
                                                <div class="col-8 col-sm-5">
                                                    <!-- botão  (Baixar conteúdo Gratis) -->
                                                    <a class="btn btn-danger" href="#" data-toggle="modal" data-target="#ModalDelete{{$conteudo->id}}">
                                                        <i class="fa fa-trash fa-lg mr-0"></i>
                                                        Eliminar
                                                    </a>
                                                    <a class="btn btn-success" href="{{url('/conteudo/baixar',$conteudo->conteudo)}}">
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
                                            <div class="tab-pane fade" id="product-owner" role="tabpanel" aria-labelledby="product-owner-tab"><b>Autor:</b>  <br> <b>Descricao do conteúdo:</b><br>  {{$conteudo->descricao}}  </small></h4> </div>
                                            <div class="tab-pane fade" id="product-comments" role="tabpanel" aria-labelledby="product-comments-tab"><b>Data de criação:</b>  {{$conteudo->created_at}} <br> <b> Última actualização:</b>  {{$conteudo->updated_at}} <br></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
             {{-- @endforeach --}}
        
        @endforeach
    </div>



@endsection
