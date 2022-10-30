@extends('layouts.painel.principal')

@section('titulo', 'MULONGI | Biblioteca ')

@section ('content')
    <div class="container">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Biblioteca</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/">Início</a></li>
                            <li class="breadcrumb-item active">{{$ano}}º ANO</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>   
        <section class="">
            <div class="row">
                <div class="col-lg-12 post-list">
                    <div class="container">
                        {{-- LISTA DE DISCIPLINAS DO PRIMEIRO SEMESTRE DE CADA ANO--}}
                        <div class="course-thumb">
                            <div class="">
                                <span>
                                    <br>
                                    {{($ano*2)-1}}º SEMESTRE <hr>
                                </span>
                            </div>
                        </div>
                        <div class="row ">
                            @foreach ($todas_disciplinas as $disc )
                                @if($disc->turma_id==$ano)
                                    <!-- course item -->
                                    <div @if($loop->first) class="offset-1 col-lg-2 col-6" @else class="col-lg-2 col-6" @endif >
                                        <!-- small box -->
                                        <div class="small-box bg-info">
                                            <div class="inner">
                                                <h3>{{$disc->sigla}}</h3>
                                                @if(strlen($disc->nome)<20)    <!-- Aqui comparamos se o tamanho do texto é menor que 20-->
                                                    <p>{{$disc->nome}}</p><br> <!-- Ser for menor, quebramos a linha-->
                                                @else
                                                    @if(strlen($disc->nome)>20) <!-- Ser não for menor, perguntamos se é maior que 33(limite)-->
                                                        <p>{{Str::limit($disc->nome, 33)}}</p> <!-- Ser for maior, limitamos o texto a 33 letras-->                                                        
                                                    @else  
                                                        <p>{{$disc->nome}}</p> <!-- Ser não for maior, listamos de forma normal-->
                                                    @endif                                              
                                                @endif
                                            </div>
                                            <div class="icon"><i class="fas fa-book"></i></div>
                                            <a href="/disciplinas/perfil/{{$disc->id}}" class="small-box-footer">Aceder <i
                                                class="fas fa-arrow-circle-right"></i></a>
                                        </div>
                                    </div>
                                @endif
                                {{-- @endforeach --}}
                            @endforeach
                        </div>

                        {{-- LISTA DE DISCIPLINAS DO SEGUNDO SEMESTRE DE CADA ANO--}}
                        <div class="course-thumb">
                            <div class="">
                                <span><br>
                                    {{($ano*2)}}º SEMESTRE <hr>
                                </span>
                            </div>
                        </div>
                        <div class="row ">
                            @foreach ( $todas_disciplinas as $disc )
                                @if($disc->semestre==2)
                                    <!-- course item -->
                                    <div @if($loop->iteration==4) class="offset-1 col-lg-2 col-6" @else class="col-lg-2 col-6" @endif>
                                        <!-- small box -->
                                        <div class="small-box bg-info">
                                            <div class="inner">
                                                <h3>{{$disc->sigla}}</h3>
                                                @if(strlen($disc->nome)<20)    
                                                    <p>{{$disc->nome}}</p><br>                                                 
                                                @else
                                                    @if(strlen($disc->nome)>20)  
                                                        <p>{{Str::limit($disc->nome, 33)}}</p>                                                         
                                                    @else  
                                                        <p>{{$disc->nome}}</p>
                                                    @endif                                                    
                                                @endif
                                            </div>
                                            <div class="icon"><i class="fas fa-book"></i></div>
                                            <a href="/disciplinas/perfil/{{$disc->id}}" class="small-box-footer">Aceder <i
                                                class="fas fa-arrow-circle-right"></i></a>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>

            <div class="row" >
                <div class="offset-5 col-6">
                    <br><h4>ANO ACADÉMICO</h4>
                </div>
                <div class="offset-4 col-6">
                    <ul class="form-inline " style="list-style-type:none;" >
                        <li><a href="/{{$ano-1}}/{{$ano-1}}" @if($ano==1) hidden @endif>  
                            <button class="btn btn-primary" type="submit" style="border-radius:20%"><i class="fas fa-arrow-circle-left"></i></button>&nbsp;
                        </a></li>
                        <li ><a href="/1/{{1}}" @if($ano==1) class="active" @endif>
                            <button class="btn btn-primary" type="submit" style="border-radius:20%">1</button></a>&nbsp;
                        </li>
                        <li><a href="/2/{{2}}" @if($ano==2) class="active" @endif>
                            <button class="btn btn-primary" type="submit" style="border-radius:20%">2</button></a>&nbsp;
                        </li>
                        <li><a href="/3/{{3}}" @if($ano==3) class="active" @endif>
                            <button class="btn btn-primary" type="submit" style="border-radius:20%">3</button></a>&nbsp;
                        </li>
                        <li><a href="/4/{{4}}" @if($ano==4) class="active" @endif>
                            <button class="btn btn-primary" type="submit" style="border-radius:20%">4</button></a>&nbsp;
                        </li>
                        <li><a href="/5/{{5}}" @if($ano==5) class="active" @endif>
                            <button class="btn btn-primary" type="submit" style="border-radius:20%">5</button></a>&nbsp;
                        </li>
                        {{-- <li><a href="/anexos">Anexos</a></li> --}}
                        <li><a href="/{{$ano+1}}/{{$ano+1}}" @if($ano==5) hidden @endif>
                                <button class="btn btn-primary" type="submit" style="border-radius:20%"><i class="fas fa-arrow-circle-right"></i></button>
                            </a>
                        </li>
                    </ul>
                </div>
            </div> 
            {{-- <div class="offset-3 col-6">
                <div class="text-center " >
                    <a href="#" data-toggle="modal" data-target="#Modal_Registar_Conteudo"  class="link_btn" role="button" aria-pressed="false" ><i class="fa fa-plus-circle fa-4x"></i></a>
                    <br><a href="#" data-toggle="modal" data-target="#Modal_Registar_Disciplina"  class="link_btn" role="button" aria-pressed="false" >Novo Conteúdo</i></a><br>
                </div>
            </div> --}}
        </section>
    </div>
@endsection
