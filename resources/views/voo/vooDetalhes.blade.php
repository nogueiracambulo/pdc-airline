@extends('layouts.painel.principal')

@section('titulo', 'MULONGI - Voo')

@section ('content')
	<!-- Breadcrumb section -->
	<section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>INFORMAÇÕES DO VOO</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/">Inicio</a></li>
                        <li class="breadcrumb-item active">Informações do Voo</li>
                    </ol>
                </div>
            </div>
        </div>
  </section>
	<!-- Breadcrumb section end -->
  <div class="container">

    <div class="text-right ">
    {{-- BOTÃO MODAL, LISTAR VOOS --}} 
     <a href="/voos/listar"  class="btn btn-outline-primary rounded-pill" role="button" aria-pressed="false"><i class="fas fa-plane"></i> Voos</a>
        
    {{-- BOTÃO actualizar voo --}} 
     <a href="#" data-toggle="modal" data-target="#Modal_Registar_aviao" 
     class="btn btn-outline-info rounded-pill" role="button" aria-pressed="false"><i class="fas fa-edit"></i> Actualizar</a>
      
    {{-- BOTÃO Cancelar voo --}} 
    <a href="#" data-toggle="modal" data-target="#Modal_Registar_aviao" 
    class="btn btn-outline-danger rounded-pill" role="button" aria-pressed="false"><i class="fas fa-ban"></i> Cancelar</a>
 
    </div><br>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
            <!-- Conteudo do centro -->
            <div class="col-md-9">
                <!-- small box -->
                <div class="small-box bg-info">
                    <div class="inner">
                        <h1> {{$voo->numero_voo}}</h1>
                    </div>
        
                    <div class="icon">
                        <i class="fas fa-plane"></i>
                    </div>
                    <div class="small-box-footer list-inline" style="font-size:52px">
                  
                        @foreach($voo->percurso->aeroportos as $aeroporto)
                            @if ($loop->first)
                                {{ $aeroporto->codigoIATA}} 
                                <i class="fas fa-arrow-circle-right"></i> 
                            @endif
                        
                            @if($loop->last)
                                {{ $aeroporto->codigoIATA}}
                            @endif
                        @endforeach
                    </div>
                </div>
                {{-- Informações da aeronave--}}
                <section class="content">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Informações da Aeronave</h3>
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
                                        <th style="width: 15%">
                                           Matrícula
                                        </th>
                                        <th style="width: 15%">
                                            Marca
                                        </th>
                                        <th style="width: 15%">
                                             Modelo
                                          </th>
                                        <th style="width: 30%">
                                            Capacidade da cabine
                                        </th>
                                        <th style="width: 15%">
                                            Designação
                                         </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {{-- @foreach($membro as $membro) --}}
                                    <tr>
                                        <td>
                                            {{$voo->aeronave->matricula}}
                                        </td>
                                     
                                        <td>
                                            {{$voo->aeronave->marca}}
                                        </td>
                                        <td>
                                            {{$voo->aeronave->modelo}}
                                        </td>
                                        <td class="list-inline">
                                            @foreach($voo->aeronave->cabines as $cabine)
                                                &nbsp; {{$cabine->tarifa->codigo}} &nbsp;&nbsp;
                                            @endforeach <br>
                                            @foreach($voo->aeronave->cabines as $cabine)
                                                {{$cabine->capacidade}}  &nbsp;&nbsp;
                                            @endforeach
                                        </td> <br>
                                    
                                        <td class="list-inline">
                                            {{$voo->aeronave->nome}}
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
                            <h3 class="card-title">Outras Informações</h3>
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
                                            Reservas (Ocupação do voo)
                                        </th>
                                        <th style="width: 40%">
                                            Status do Voo
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {{-- @foreach($membro as $membro) --}}
                                    <tr>
                                        
                                        {{-- <td class="list-inline">
                                            {{$voo->preferencia->refeicao}}
                                        </td> 
                                    
                                        <td class="list-inline">
                                            {{$voo->preferencia->tipo_lugar}}
                                        </td>
                                     --}}
                                    </tr>
                                    {{-- @endforeach --}}
                                </tbody>
                            </table>
                        </div>
                    </div>
                </section>
            </div>

              <!-- Informações de utilizador -->
            <div class="col-md-3">
                <div class="card card-primary card-outline">
                    <div class="card-body box-profile">
                        <div class="text-center">
                            <div class="list-inline" style="font-size:25px">
                  
                                @foreach($voo->percurso->aeroportos as $aeroporto)
                                    @if ($loop->first)
                                        {{ $aeroporto->cidade}} 
                                        <i class="fas fa-arrow-circle-right"></i> 
                                    @endif
                                
                                    @if($loop->last)
                                        {{ $aeroporto->cidade}}
                                    @endif
                                @endforeach
                            </div>
                        
                        </div> 
                      
                        
                    </div>
                </div>
                
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Datas e Horários</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class=" card-body container">
                        <strong><i class="fa fa-calendar"></i> Data de partida</strong><br>
                        <p class="text-muted"> {{$voo->dataPartida}} </p>
                        
                        <strong><i class="fa fa-clock-0"></i> Hora de partida</strong><br>
                        <p class="text-muted"> {{$voo->horaPartida}} </p>

                        <strong><i class="fa fa-clock-0"></i> Hora de Check-in</strong><br>
                        <p class="text-muted"> {{$voo->horaCheckin}} </p>

                        <strong><i class="fa fa-clock-0"></i> Hora de Embarque</strong><br>
                        <p class="text-muted"> {{$voo->horaEmbarque}} </p>
                    </div> 
                </div>
            </div> 
        </div>
      </div>
    </section>   
  </div>
@endsection
