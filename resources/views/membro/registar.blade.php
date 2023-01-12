@extends('layouts.painel.principal')
@section('titulo', 'PDC-AIRLINES - MEMBROS')


@section('content')
    {{-- {{dd($roles)}} --}}
    <div class="content">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Registar-se ao Clube de Membros PDC</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/">Inicio</a></li>
                            <li class="breadcrumb-item active">Registar-se</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>
        
        <section class="content">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Registar membro</h3>
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
                    <form action="/membro/registar" method="Post" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <span class="description">Informe o nome do utilizador</span>
                            <div class="input-group input-group-sm mb-0">
                                <input type="text" class="form-control form-control-sm @error('nome') is-invalid @enderror" name="nome" placeholder="Informe o nome do utilizador"><br>
                            </div>
                            @error('nome')
                               <span class="description" style="color:red">{{$message}} </span><br>
                            @enderror <br>

                            <span class="description">Informe o sobrenome do utilizador</span>
                            <div class="input-group input-group-sm mb-0">
                                <input type="text" class="form-control form-control-sm @error('apelido') is-invalid @enderror" name="apelido" placeholder="Informe o sobrenome do utilizador"><br>
                            </div>
                            @error('apelido')
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
                                <input type="checkbox" name="genero" value="masculino" active> Masculino  &nbsp;
                                <input type="checkbox" name="genero"value="femenino"> Femenino
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
        
                            <span class="description"> Escolha uma palavra-passe</span>
                            <div class="input-group input-group-sm mb-0">
                                <input type="password" class="form-control form-control-sm @error('password') is-invalid @enderror" name="password" placeholder="Informe a palavra passe"><br>
                            </div>
                            @error('password')
                               <span class="description" style="color:red">{{$message}} </span><br>
                            @enderror <br>
                            
                            <span class="description"> Informe a morada do membro</span>
                            <div class="input-group input-group-sm mb-3">
                                <div class="input-group input-group-sm mb-0">
                                    <input type="text" class="form-control form-control-sm @error('cidade') is-invalid @enderror" name="cidade" placeholder="Informe a cidade"><br>
                               
                                    <input type="text" class="form-control form-control-sm @error('pais') is-invalid @enderror" name="pais" placeholder="Informe o pais"><br>
                                </div>
                                @error('pais')
                                   <span class="description" style="color:red">{{$message}} </span><br>
                                @enderror <br>
                                @error('cidade')
                                    <span class="description" style="color:red">{{$message}} </span><br>
                                 @enderror 
                            </div>

                            <span class="description"> Informe as preferências de viagem(Refeição e tipo de lugar)</span>
                            <div class="input-group input-group-sm mb-3">

                                <select name="refeicao" class="form-control form-control-sm">
                                    <option value="vegetariana">Vegetariana</option>
                                    <option value="carne">Carne</option>
                                    <option value="peixe"> Peixe</option>
                                    
                                </select>

                                <select name="tipo_lugar" class="form-control form-control-sm">
                                    <option value="janela"> Próximo à Janela</option>
                                    <option value="corredor"> Corredor</option>
                                    <option value="saida_emergencia"> Saída de emergência</option>
                                    <option value="atras">Mais atrás possível</option>
                                    <option value="frente">Mais à frente possível</option>
                                </select>
                            </div>
                            <span class="description"> Informe o idioma de preferência</span>
                            <div class="input-group input-group-sm mb-3">
                                <select name="idioma_preferencia" class="form-control form-control-sm">
                                    <option value="portugues">Português</option>
                                    <option value="ingles">Inglês</option>
                                    <option value="frances">Francês</option>
                                </select>
                            </div>

                            <span class="description"> Função do Utilizador</span> 
                            <div class="input-group input-group-sm mb-3">
                                <select name="funcao" class="form-control form-control-sm">
                                @isset($roles)
                                    @foreach ($roles as $role)
                                        @if($role->nome=="membro_pdc_airline")
                                            <option value={{$role->id}}> {{$role->nome}} - {{$role->descricao}} </option>
                                        @endif
                                    @endforeach
                                @endisset
                                </select>
                            </div>
                            
                            <div class="text-right">
                                <a  class="btn btn-success rounded-pill" href="{{ route('login') }}">Já é membro?</a>
                                <button type="submit"  class="btn btn-info rounded-pill">Registar-se</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
