@extends('layouts.painel.principal')
{{-- @extends('layouts.main') --}}
@section('titulo', 'MULONGI - Perfil')

@section ('content')
	<!-- Breadcrumb section -->
	<section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Registo de Membro PDC-AIRLINES</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/">Inicio</a></li>
                        <li class="breadcrumb-item active">Informações de Membro</li>
                    </ol>
                </div>
            </div>
        </div>
  </section><br><br>
	<!-- Breadcrumb section end -->
  <div class="container">
        <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
            <!-- Informações de utilizador -->
            <div class="col-md-3">
                <div class="card card-primary card-outline">
                <div class="card-body box-profile">
                    <div class="text-center">
                    
                    <img class="profile-user-img img-circle"
                            src={{$membro->user->profile_photo_url}}
                            alt="User profile picture">
                    </div>

                    <p class="text-muted text-center">{{$membro->user->email}}</p>

                    <ul class="list-group list-group-unbordered mb-3">
                    <li class="list-group-item">
                        <b>Nº Membro </b> <a class="float-right"> {{$membro->numero_membro}}</a>
                    </li>
                    </ul>
                    <div class="text-center">
                        <a href="#" class="btn btn-outline-primary rounded-pill"><b>Reclamar milha</b></a>
                    </div>
                </div>
                <!-- /.card-body -->
                </div>
             
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Sobre mim</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class=" card-body container">

                        <strong><i class="fa fa-calendar"></i> Nome completo</strong><br>
                        <p class="text-muted"> {{$membro->titulo}} {{$membro->user->name}} {{$membro->user->apelido}}</p>
                        
                        <strong><i class="fa fa-calendar"></i> Data de Nascimento</strong><br>
                        <p class="text-muted"> {{$membro->user->dataNascimento}}</p>

                        <strong><i class="fa fa-venus-mars"></i>Género</strong>
                        <p class="text-muted"> {{$membro->user->genero}}</p>
                    </div> 
                </div>
            </div>

            <!-- Conteudo do centro -->
            <div class="col-md-9">
                {{-- Endereço e contacto--}}
                <section class="content">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Endereço e contacto</h3>
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
                            <table class="table table-dark projects">
                                <thead>
                                    <tr>
                                        <th style="width: 20%">
                                           Telefone
                                        </th>
                                        
                                        <th style="width: 30%">
                                            Cidade
                                        </th>
                                        <th style="width: 30%">
                                            País
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {{-- @foreach($membro as $membro) --}}
                                    <tr>
                                        <td>
                                            {{$membro->user->telefone}}
                                        </td>
                                     
                                         <td class="list-inline">
                                            {{$membro->user->morada->cidade}}
                                        </td> 
                                    
                                        <td class="list-inline">
                                            {{$membro->user->morada->pais}}
                                        </td> 
                                    </tr>
                                    {{-- @endforeach --}}
                                </tbody>
                            </table>
                        </div>
                    </div>
                </section>
                {{-- Informações de membro --}}
                <section class="content">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Preferências de viagem</h3>
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
                            <table class="table table-dark projects">
                                <thead>
                                    <tr>
                                        <th style="width: 40%">
                                            Preferência de Refeição
                                        </th>
                                        <th style="width: 40%">
                                            Preferência de tipo de lugar
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {{-- @foreach($membro as $membro) --}}
                                    <tr>
                                        
                                            <td class="list-inline">
                                            {{$membro->preferencia->refeicao}}
                                        </td> 
                                    
                                        <td class="list-inline">
                                            {{$membro->preferencia->tipo_lugar}}
                                        </td>
                                        {{-- <td>
                                            {{$membro->user->morada->cidade}}-{{$membro->user->morada->pais}}
                                        </td> --}}
                                    </tr>
                                    {{-- @endforeach --}}
                                </tbody>
                            </table>
                        </div>
                    </div>
                </section>

                <!-- small box -->
                <div class="small-box bg-info">
                    <div class="inner">
                        <h3>{{$membro->milhas}}</h3>
                        <p>Milhas Acumuladas</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-plane"></i>
                    </div>
                    <a href="/voos/listar" class="small-box-footer">Reclamar<i class="fas fa-arrow-circle-right"></i></a>
                </div>
                
            </div>
        </div>
      </div>
    </section>   
  </div>
@endsection
