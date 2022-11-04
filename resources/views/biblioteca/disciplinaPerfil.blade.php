{{-- @extends('layouts.main') --}}
@extends('layouts.painel.principal') 
@section('titulo', 'MULONGI | Biblioteca-Conteúdos')

@section('content')
    <div class="container-fluid">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Biblioteca</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/">Início</a></li>
                            @foreach ($disciplina as $discipl)
                            <li class="breadcrumb-item active">{{$discipl->turma_id}}º ANO</li>
                            @endforeach
                        </ol>
                    </div>
                </div>
            </div>
            <div class="list-inline">
                <div class="text-right ">
                    @can('add_role')
                        {{-- BOTÃO MODAL, REGISTAR NOVA DISCIPLINA --}}         
                        <a href="#" data-toggle="modal" data-target="#Modal_Registar_Conteudo" 
                        class="btn btn-outline-primary rounded-pill" role="button" aria-pressed="false"><i class="fas fa-plus-circle"></i> Adicionar Conteúdo</a>
                    @endcan
                </div>
            </div><br>
        </section>  
     
        <div class="row">
            @foreach ($disciplina as $disciplina)
            {{-- MENU LATERAL ESQUERDO --}}
                <div class="col-md-3 ">
                   
                    <div class=" card-outline">
                        <div class="small-box bg-info">
                            <div class="inner">
                                <h5>{{$disciplina->nome}}</h5>
                                <h3>{{$disciplina->sigla}}</h3>
                            </div>
                            <div class="icon">
                                <i class="fas fa-graduation-cap"></i>
                            </div>
                            {{-- <a href="/conteudos/turma/{{$turma->id}}" class="small-box-footer"> Aceder <i class="fas fa-arrow-circle-right"></i></a> --}}
                        </div>
                    </div>

                    <!-- Caixa sobre mim -->
                    <div class="card-info">
                        <div class="card-header">
                            <h3 class="card-title">Sobre a Disciplina</h3>
                        </div>
                        <div class="">
                            <strong><i class="fas"></i> Ano académico</strong><br>
                            <p class="text-muted">{{$disciplina->turma_id}}º ano</p><hr>

                            <strong><i class="fa fa"></i> Semestre académico</strong>
                            <p class="text-muted">{{$disciplina->semestre}}º Semestre</p><hr>

                            <strong><i class="fas fa-"></i> Professor actual</strong>
                            <p class="text-muted">{{$disciplina->nome_professor}}</p><hr>
                        </div>
                    </div>
                </div>
            {{-- MENU LATERAL ESQUERDO TERMINA AQUI--}}


            {{-- CONTEÚDO CENTRAL --}}
                <div class="col-md-9">
                    
                        <blockquote class="">
                            <b>ABAIXO, TODOS OS CONTEÚDOS DA DISCIPLINA {{$disciplina->nome}}</b><br>
                            Tenha acesso aos conteúdos desta disciplina de forma rápida e fácil, para lhe servir de apoio aos estudos.
                            Receba dicas de preparação para provas e principais conteúdos a estudar para dominar as matérias. "CC, computação é uma família".
                        </blockquote>
                
                    <div class="col-md-12">
                        <div class="card">
                          <div class="card-header p-2">
                            <ul class="nav nav-pills">
                              <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">Vídeos</a></li>
                              <li class="nav-item"><a class="nav-link" href="#timeline" data-toggle="tab">PDF</a></li>
                              <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Imagens</a></li>
                            </ul>
                          </div>
                          
                          <!-- /.Conteúdo do tipo Vídeo -->
                          <div class="card-body">
                            <div class="tab-content">
                              <div class="active tab-pane" id="activity">
                                    <h3>VIDEOS</h3>
                                    <table class=""> 
                                        @foreach ($conteudos as $data ) 
                                           {{-- {{ dd($data->getClientOriginalExtension())}} --}}
                                            <tbody >
                                                <tr>
                                                    <div class="row">
                                                    <td>
                                                        <div class="col-lg-4">                                            
                                                            <iframe src="{{$data->ficheiro}}" frameborder="0" scrolling="no"></iframe>
                                                            {{-- <iframe width="300%" height="50%" src="https://www.youtube.com/embed/lxYikfwyXcQ" title="Add Video to Webpages with Video and iFrame Elements #tryminim" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" ></iframe> --}}
                                                        </div>
                                                    </td>  
                                                    <td >
                                                        <div class="col-lg-12"> 
                                                            {{-- <a href="#">   --}}
                                                            <h4>{{$data->titulo}}</h4>
                                                            {{$data->descricao}}<br>
                                                            {{-- </a>  --}}
                                                        <a href="#" class="btn btn-outline-success"><i class="fas fa-download"></i></a>
                                                        <a href="#" class="btn btn-outline-info"><i class="fas fa-eye"></i></a>
                                                        <a href="#" class="btn btn-outline-danger"><i class="fas fa-trash"></i></a>
                                                        </div>
                                                    </td>
                                                </div>
                                                </tr>
                                            </tbody>
                                        @endforeach
                                    
                                    </table>
                              </div>
                              <!-- /.Conteúdo do tipo PDF -->
                              <div class="tab-pane" id="timeline">
                                <h3>PDFS</h3>
                                <table class=""> 
                                    @foreach ($conteudos as $data ) 
                                        <tbody >
                                            <tr>
                                                <div class="row">
                                                <td>
                                                    <div class="col-lg-3">                                            
                                                        <iframe src="http://127.0.0.1:8000/" frameborder="0" scrolling="no"></iframe>
                                                        {{-- <iframe width="300%" height="50%" src="https://www.youtube.com/embed/lxYikfwyXcQ" title="Add Video to Webpages with Video and iFrame Elements #tryminim" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" ></iframe> --}}
                                                    </div>
                                                </td>  
                                                <td >
                                                    <div class="col-lg-10"> 
                                                        {{-- <a href="#">   --}}
                                                        <h4>{{$data->titulo}}</h4>
                                                        {{$data->descricao}}<br>
                                                        {{-- </a>  --}}
                                                    <a href="#" class="btn btn-outline-success"><i class="fas fa-download"></i></a>
                                                    <a href="#" class="btn btn-outline-info"><i class="fas fa-eye"></i></a>
                                                    <a href="#" class="btn btn-outline-danger"><i class="fas fa-trash"></i></a>
                                                    </div>
                                                </td>
                                            </div>
                                            </tr>
                                        </tbody>
                                    @endforeach                                
                                </table>
                              </div>
                              <!-- /.tab-pane -->
            
                              <div class="tab-pane" id="settings">
                                <h3>IMAGENS</h3>
                                <table class=""> 
                                    @foreach ($conteudos as $data ) 
                                        <tbody >
                                            <tr>
                                                <div class="row">
                                                <td>
                                                    <div class="col-lg-3">                                            
                                                        <iframe src="http://127.0.0.1:8000/" frameborder="0" scrolling="no"></iframe>
                                                        {{-- <iframe width="300%" height="50%" src="https://www.youtube.com/embed/lxYikfwyXcQ" title="Add Video to Webpages with Video and iFrame Elements #tryminim" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" ></iframe> --}}
                                                    </div>
                                                </td>  
                                                <td >
                                                    <div class="col-lg-10"> 
                                                        {{-- <a href="#">   --}}
                                                        <h4>{{$data->titulo}}</h4>
                                                        {{$data->descricao}}<br>
                                                        {{-- </a>  --}}
                                                    <a href="#" class="btn btn-outline-success"><i class="fas fa-download"></i></a>
                                                    <a href="#" class="btn btn-outline-info"><i class="fas fa-eye"></i></a>
                                                    <a href="#" class="btn btn-outline-danger"><i class="fas fa-trash"></i></a>
                                                    </div>
                                                </td>
                                            </div>
                                            </tr>
                                        </tbody>
                                    @endforeach
                                
                                </table>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                @endforeach
        </div>
    </div>
@endsection
