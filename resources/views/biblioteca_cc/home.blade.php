@extends('layouts.painel.principal')
@section('titulo', 'MULONGI - Biblioteca')

@section ('content')
    <div class="container-fluid">
        <!-- Breadcrumb section -->
        {{-- <div class="site-breadcrumb">
            <div class="container">
                <a href="/"><i class="fa fa-home"></i> Início</a> <i class="fa fa-angle-right"></i>
                <span>Biblioteca CC </span>
            </div>
        </div>
         <br><br> --}}

        @include('biblioteca_cc/modal_Disciplina/registarDisciplina')
        @include('biblioteca_cc/modal_Disciplina/sucesso')
        @include('biblioteca_cc/modal_Conteudo/registarConteudo')
        
       
        <div class="row">
            
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
        </div>

        <div class="row">
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
            </div>
        </div> 

        {{-- BOTÃO MODAL, REGISTAR CONTEÚDO --}}
    <div class="row"> 
        <div class=" offset-1 col-lg-4 col-6"></div>
            <div class="text-center " >
                <br>
                <a href="#" data-toggle="modal" data-target="#Modal_Registar_Conteudo"  class="" role="button" aria-pressed="false" ><i class="fa fa-plus-circle fa-4x"></i></a>
                <br><a href="#" data-toggle="modal" data-target="#Modal_Registar_Conteudo"  class="" role="button" aria-pressed="false" >Novo Conteúdo</i></a><br>
            </div>
            
         </div> 
    </div>
@endsection
