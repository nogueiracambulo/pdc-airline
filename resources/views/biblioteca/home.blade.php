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
                        {{-- @foreach($ano_lectivo as $ano_lectivo)
                            Está a visualizar conteúdo do ano lectivo {{$ano_lectivo->descricao}}
                        @endforeach --}}
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/">Inicio</a></li>
                            <li class="breadcrumb-item active">Biblioteca</li>
                        </ol>
                    </div>
                </div>
            </div>
            <div class="list-inline">
                <div class="text-right ">
                    <a href="#" data-toggle="modal" data-target="#Modal_Selecionar_anoLectivo" 
                    class="btn btn-outline-primary rounded-pill outline" role="button" aria-pressed="false"><i class="fa fa-calendar-check"></i> Selecionar ano</a>
                
                    @can('add_role')
                        {{-- BOTÃO MODAL, REGISTAR NOVA TURMA --}}         
                        <a href="#" data-toggle="modal" data-target="#Modal_Registar_turma" 
                        class="btn btn-outline-primary rounded-pill" role="button" aria-pressed="false"><i class="fas fa-plus-circle"></i> Turma</a>
                    @endcan
                </div>
            </div><br>
        </section>   
        <div class="row">
            @foreach($ano_lectivo as $ano_lectivo)
                @foreach($todas_turmas as $turma)
                    @if($turma->anoLectivo_id==$ano_lectivo->id)
                        <div class="@if($loop->first)  @endif  col-md-4 ">
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
    </div>
@endsection
