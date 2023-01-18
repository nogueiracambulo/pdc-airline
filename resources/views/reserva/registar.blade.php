@extends('layouts.painel.principal')
@section('titulo', 'PDC-AIRLINES - MEMBROS')


@section('content')
    {{-- {{dd($roles)}} --}}
    <div class="content">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Reservas <i class="fas fa-arrow-right"></i> Concluir compra</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/">Inicio</a></li>
                            <li class="breadcrumb-item active">Reserva</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>
        
        <section class="content">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Dados do titular</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <form action="/reserva/registar" method="Post" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <span class="description">Informe o nome do titular</span>
                            <div class="input-group input-group-sm mb-0">
                                <input type="text" class="form-control form-control-sm @error('nome') is-invalid @enderror" name="nome" placeholder="Informe o nome do titular"><br>
                            </div>
                            @error('nome')
                               <span class="description" style="color:red">{{$message}} </span><br>
                            @enderror <br>

                            <span class="description">Informe o sobrenome do titular</span>
                            <div class="input-group input-group-sm mb-0">
                                <input type="text" class="form-control form-control-sm @error('sobrenome') is-invalid @enderror" name="sobrenome" placeholder="Informe o sobrenome do titular"><br>
                            </div>
                            @error('sobrenome')
                               <span class="description" style="color:red">{{$message}} </span><br>
                            @enderror <br>

                            <span class="description"> Informe a data de nascimento</span>
                            <div class="input-group input-group-sm mb-0">
                                <input type="date" class="form-control form-control-sm @error('dataNascimento') is-invalid @enderror" name="dataNascimento" placeholder="Informe a data de nascimento"><br>
                            </div>
                            @error('dataNascimento')
                               <span class="description" style="color:red">{{$message}} </span><br>
                            @enderror <br>

                            <span class="description"> Informe o Género</span>
                            <div class="input-group input-group-sm mb-3">
                                <input type="radio" name="genero" value="masculino" active> Masculino  &nbsp;
                                <input type="radio" name="genero"value="femenino"> Femenino
                            </div>

                            <div class="input-group input-group-sm mb-0">
                                <input type="telefone" class="form-control form-control-sm @error('telefone') is-invalid @enderror" name="telefone" placeholder="Informe o telefone"><br>
                            </div>
                            @error('telefone')
                               <span class="description" style="color:red">{{$message}} </span><br>
                            @enderror <br>

                            <div class="input-group input-group-sm mb-0">
                                <input type="email" class="form-control form-control-sm @error('email') is-invalid @enderror" name="email" placeholder="Informe o e-mail"><br>
                            </div>
                            @error('email')
                               <span class="description" style="color:red">{{$message}} </span><br>
                            @enderror <br>
                                    
                            <span class="description"> Classe (Tarifa)</span>
                            <span class="description offset-5" > Número do voo</span>
                            <div class="input-group input-group-sm mb-0">
                                <select name="tarifa" class="form-control form-control-sm"  >
                                    @foreach($tarifas as $Tarifa)
                                        @if($Tarifa->nome==$tarifa)
                                            <option value={{$Tarifa->id}}> {{$Tarifa->nome}}</option>
                                        @endif
                                    @endforeach
                                </select>                               
                                 <select name="voo" class="form-control form-control-sm" >
                                    @foreach($voos as $voo)
                                        @if($voo->id==$voo_id)
                                            <option value={{$voo->id}}> {{$voo->numero_voo}}</option>
                                        @endif
                                    @endforeach
                                </select>
                                <input type="number" class="form-control form-control-sm"  name="passageiros" value="{{$passageiros}}" style="display:none">
                                <select name="origem_id" class="form-control form-control-sm" style="display:none">
                                    @foreach($aeroportos as $aeroporto)
                                        @if($aeroporto->cidade==$origem_id)
                                            <option value={{$aeroporto->id}}> {{$aeroporto->cidade}}</option>
                                        @endif
                                    @endforeach
                                </select>
                                <select name="destino_id" class="form-control form-control-sm" style="display:none">
                                    @foreach($aeroportos as $aeroporto)
                                        @if($aeroporto->cidade==$destino_id)
                                            <option value={{$aeroporto->id}}> {{$aeroporto->cidade}}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div><br>
                           
                            <div class="text-right">
                                <button type="submit"  class="btn btn-info rounded-pill">Registar-se</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
