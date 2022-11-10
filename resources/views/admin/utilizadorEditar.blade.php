@extends('layouts.painel.principal')
@section('titulo', 'MULONGI - Utilizadores')

{{-- {{dd($utilizador)}} --}}
@section('content')
    {{-- {{dd($roles)}} --}}
    <div class="content">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Actualizar dados do Utilizadores</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/">Inicio</a></li>
                            <li class="breadcrumb-item active">Utilizadores</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>
             
        <section class="content">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Editar Utilizador</h3>
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
                
                    <form action="/registar_utilizador" method="PUT" enctype="multipart/form-data">
                        @csrf
                        <div class="modal-body">
                            <div class="input-group input-group-sm mb-0">
                                <input type="text" class="form-control form-control-sm @error('name') is-invalid @enderror" value="{{$utilizador->name}}" name="name" placeholder="Informe o nome do utilizador"><br>
                            </div>
                            @error('name')
                               <span class="description" style="color:red">{{$message}} </span><br>
                            @enderror <br>
        
                            <div class="input-group input-group-sm mb-0">
                                <input type="email" class="form-control form-control-sm @error('email') is-invalid @enderror" value="{{$utilizador->email}}" name="email" placeholder="Informe o e-mail"><br>
                            </div>
                            @error('email')
                               <span class="description" style="color:red">{{$message}} </span><br>
                            @enderror <br>
        
                            <div class="input-group input-group-sm mb-0">
                                <input type="password" class="form-control form-control-sm @error('password') is-invalid @enderror" value="{{$utilizador->password}}" name="password" placeholder="Informe a palavra passe"><br>
                            </div>
                            @error('password')
                               <span class="description" style="color:red">{{$message}} </span><br>
                            @enderror <br>
                            
                            <span class="description"> Função do Utilizador</span>
                          
                            <div class="input-group input-group-sm mb-3">
                                <select name="funcao" class="form-control form-control-sm">
                                @isset($roles)
                                    @foreach ($roles as $role)
                                        <option value={{$role->id}}> {{$role->nome}} - {{$role->descricao}} </option>
                                    @endforeach
                                @endisset
                                </select>
                            </div>
                            <div class="input-group input-group-sm mb-3  text-right">
                                <button type="submit"  class="btn btn-primary">Actualizar</button>
                            </div>
                        </div>
        
                     
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
