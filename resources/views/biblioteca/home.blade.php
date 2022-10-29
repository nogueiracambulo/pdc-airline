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
            @foreach($todos_anos as $ano_lectivo)
                @if($ano_lectivo->selecionado==1)
                    {{-- {{dd($todos_semestres)}} --}}
                    @foreach($todos_semestres as $semestre)
                        @if($semestre->anoLectivo_id==$ano_lectivo->id)
                            @foreach($todas_turmas as $turma)
                                @if($turma->semestre_id==$semestre->id)
                                    <div class="@if($loop->first) offset-1 @endif  col-lg-3 col-6">
                                        <!-- small box -->
                                        <div class="small-box bg-info">
                                            <div class="inner">
                                                <h3>{{$turma->descricao}}</h3>
                                                <p>I e II Semestre</p>
                                            </div>
                                            <div class="icon">
                                                <i class="fas fa-graduation-cap"></i>
                                            </div>
                                            <a href="1/{{1}}" class="small-box-footer">Aceder <i
                                                class="fas fa-arrow-circle-right"></i></a>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        @endif
                    @endforeach
                @endif
            @endforeach
        </div>

        {{-- <div class="row">
            <div class=" offset-1 col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-info">
                    <div class="inner">
                        <h3>1º ANO</h3>
                        <p>I e II Semestre</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-graduation-cap"></i>
                    </div>
                    <a href="1/{{1}}" class="small-box-footer">Aceder <i
                        class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
      
     
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-info">
                    <div class="inner">
                        <h3>2º ANO</h3>
                        <p>III e IV Semestre</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-graduation-cap"></i>
                    </div>
                    <a href="1/{{2}}" class="small-box-footer">Aceder <i
                        class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-info">
                    <div class="inner">
                        <h3>3º ANO</h3>
                        <p>V e VI Semestre</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-graduation-cap"></i>
                    </div>
                    <a href="1/{{3}}" class="small-box-footer">Aceder <i
                        class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
        </div> --}}

        {{-- <div class="row">
            <!-- ./col -->
            <div class="offset-1 col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-info">
                    <div class="inner">
                        <h3>4º ANO</h3>
                        <p>VII e VIII Semestre</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-graduation-cap"></i>
                    </div>
                    <a href="1/{{4}}" class="small-box-footer">Aceder <i
                        class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
             <!-- ./col -->
             <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-info">
                    <div class="inner">
                        <h3>5º ANO</h3>
                        <p>IX Semestre</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-graduation-cap"></i>
                    </div>
                    <a href="1/{{5}}" class="small-box-footer">Aceder <i
                        class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
             <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-info">
                    <div class="inner">
                        <h3>ANEXOS</h3>
                        <p>Conteúdos extras</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-paperclip"></i>
                    </div>
                    <a href="/anexos" class="small-box-footer">Aceder <i
                        class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>--}}
        {{-- </div>   --}}

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
