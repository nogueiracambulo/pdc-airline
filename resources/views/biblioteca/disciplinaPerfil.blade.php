{{-- @extends('layouts.main') --}}
@extends('layouts.painel.principal') 
@section('titulo', 'STUDENT-GUIDER | PERFIL DA DISCIPLINA')
@section('content')
    @include('biblioteca_cc/modal_Conteudo/registarConteudo')

    <div class="container">
        <!-- SESSÃO PARA ORIENTAÇÃO NA NAVEGAÇÃO ENTRE PÁGINAS -->
        <div class="site-breadcrumb">
            <div class="container">
                <a href="/"><i class="fa fa-home"></i> Início</a> <i class="fa fa-angle-right"></i>
                <a href="/biblioteca_cc"><span>Biblioteca CC </span></a>
                <i class="fa fa-angle-right"></i>
                @foreach ($disciplina as $discipl)
                    <a href="/1/1"><span>{{$discipl->ano}}º ANO </span></a>
                    <i class="fa fa-angle-right"></i>
                    <span>
                        {{$discipl->nome}} 
                    @endforeach
                </span>
            </div>
        </div>
     
        <div class="row">
            @foreach ($disciplina as $disciplina)
            {{-- MENU LATERAL ESQUERDO --}}
                <div class="offset-1 col-md-3 ">
                    <br>
                    <div class="card card-orange card-outline">
                        <div class="card-body box-profile">
                            <div class="text-center"><br>
                                <img class="img img-fluid " src="/img/capa_disciplina/{{$disciplina->fotoCapa}}" alt="">
                            </div>
                            <h3 class="profile-username text-center">{{ $disciplina->nome }}</h3>
                            <h3 class="text-muted text-center">{{$disciplina->sigla }}</h3>
                        </div><br><br>
                    </div>

                    <!-- Caixa sobre mim -->
                    <div class="card card-orange">
                        <div class="card-header">
                            <h3 class="card-title">Sobre a Disciplina</h3>
                        </div>
                        <div class="card-body">
                            <strong><i class="fas"></i> Ano académico</strong><br>
                            <p class="text-muted">{{$disciplina->ano}}º ano</p><hr>

                            <strong><i class="fa fa"></i> Semestre académico</strong>
                            <p class="text-muted">{{$disciplina->semestre}}º Semestre</p><hr>

                            <strong><i class="fas fa-"></i> Professor actual</strong>
                            <p class="text-muted">{{$disciplina->professor}}</p><hr>
                        </div>
                    </div>
                </div>
            {{-- MENU LATERAL ESQUERDO TERMINA AQUI--}}


            {{-- CONTEÚDO CENTRAL --}}
                <div class="col-md-7">
                    <br>
                    <div class="card">
                        
                        <blockquote class="">
                            <b>ABAIXO, TODOS OS CONTEÚDOS DA DISCIPLINA </b><br>
                            Tenha acesso aos conteúdos desta disciplina de forma rápida e fácil, para lhe servir de apoio nos teus estudos.
                            Receba dicas de preparação para provas e princiais conteúdos a estudar para dominar as matérias. "CC, computação é uma família".
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

                    @if(\Session::has('erro'))
                        <div class="alert alert-danger">
                            {!! \Session::get('erro')!!}
                        </div>
                    @endif

                    @if(\Session::has('sucesso'))
                        <div class="alert alert-danger">
                            {!! \Session::get('sucesso')!!}
                        </div>
                    @endif

                    <div class="post">
                         <div class="card">
                            <div class="card-body">
                                <table width="300" class="table table-hover ">
                                    <thead class="tcabecalho">
                                        <tr>
                                            <th>Nº</th>
                                            <th>Título</th>
                                            <th>Descrição</th>
                                            <th>Disciplina</th>
                                            <th>Ver</th>
                                            <th>Acção</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($conteudos as $data )
                                            <tr>
                                                <td>{{$loop->index+1}}</td>
                                                <td>{{$data->titulo}}</td>
                                                <td>{{$data->descricao}}</td>
                                                <td>{{$disciplina->nome}}</td>

                                                <td> <a href="{{url('/conteudo/visualizar',$data->id)}}"><i style="color:rgb(131, 190, 238); " class="fa fa-eye"></i></a></td>
                                                @if(auth()->user()->id==$data->idProprietario)
                                                    <td> <a title="Eliminar" href="#" data-toggle="modal" data-target="#ModalDelete{{$data->id}}"><i style="color:rgb(209, 91, 91); " class="fa fa-trash"></i></a></td>
                                                    @include('Servicos.Largacaixa.modal.eliminarConteudo')
                                                @else
                                                   <td> <a title="Baixar" href="{{url('/conteudo/baixar',$data->conteudo)}}" ><i style="color:rgb(91, 209, 160); " class="fa fa-download"></i></a></td>
                                                @endif
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                {{-- {{$conteudos->links()}} --}}
                           </div>
                        </div>
                    </div>
                </div>
         @endforeach
        </div>
    </div>
@endsection
