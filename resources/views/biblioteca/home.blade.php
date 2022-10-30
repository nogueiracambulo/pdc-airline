@extends('layouts.painel.principal')
@section('titulo', 'MULONGI - Biblioteca')

@section ('content')
{{-- {{dd($todos_anos)}} --}}
    <div class="container-fluid">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>BEM - VINDO A BIBLIOTECA!</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/">Inicio</a></li>
                            <li class="breadcrumb-item active">Biblioteca</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>   
        <div class="row">
            @foreach($ano_lectivo as $ano_lectivo)
                @foreach($todas_turmas as $turma)
                    @if($turma->anoLectivo_id==$ano_lectivo->id)
                        <div class="@if($loop->first) offset-1 @endif  col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-info">
                                <div class="inner">
                                    <h3>{{$turma->descricao}}</h3>
                                    <p>{{$ano_lectivo->descricao}}</p>
                                </div>
                                <div class="icon">
                                    <i class="fas fa-graduation-cap"></i>
                                </div>
                                <a href="/conteudos/turma/{{$turma->id}}" class="small-box-footer"> Aceder <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                    @endif
                @endforeach
            @endforeach
        </div>

    {{-- BOTÃO MODAL, REGISTAR CONTEÚDO --}}
    <div class="row"> 
        <div class=" offset-1 col-lg-4 col-6"></div>
            <div class="text-center " >
                <br>
                <a href="#" data-toggle="modal" data-target="#Modal_Registar_Conteudo"  class="" role="button" aria-pressed="false" ><i class="fa fa-plus-circle fa-4x"></i></a>
            </div> 
         </div> 
    </div>
@endsection
