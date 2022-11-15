@extends('layouts.painel.principal')


@section('content')

	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1>Chat Garimpo {{$nomeGarimpo}}</h1>
					@if(count($mensagens)==0)
						<p>Seja o primeiro a enviar mensagem</p>
					@endif
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="/">Inicio</a></li>
						<li class="breadcrumb-item active">Garimpo</li>
					</ol>
				</div>
			</div>

			<div class="text-right ">
				{{-- BOTÃO MODAL, LISTAR MEMBROS --}}         
				<a href="#" data-toggle="modal" data-target="#Modal_Registar_Garimpo_Chat" 
				class="btn btn-outline-primary rounded-pill" role="button" aria-pressed="false"><i class="fas fa-list"></i> Membros do Garimpo</a>
			</div>
		</div>
	</section>  
	<div class="row container-fluid">
		<div class="col-md-4"> 
			<div class=" card-outline">
				<div class="small-box bg-info">
					<div class="inner">
						<h5>hkhgjh</h5>
						<h3>grrdgtdhth</h3>
						<br><br>
					</div>
					<div class="icon">
						<i class="fas fa-chalkboard-teacher"></i>
						
					</div>
					{{-- <a href="/conteudos/turma/{{$turma->id}}" class="small-box-footer"> Aceder <i class="fas fa-arrow-circle-right"></i></a> --}}
				</div>
			</div>

			<!-- Caixa sobre mim -->
			<div class="card-info">
				<div class="card-header">
					<h3 class="card-title">Sobre o Garimpo</h3>
				</div>
				<div class="card card-body">
					<strong><i class="fas"></i> Ano académico</strong><br>
					<p class="text-muted">º ano</p><hr>

					<strong><i class="fa fa"></i> Semestre académico</strong>
					<p class="text-muted">º Semestre</p><hr>

					<strong><i class="fas fa-"></i> Professor actual</strong>
					<p class="text-muted"></p><hr>
				</div>
			</div>
		</div>
		<div class="col-md-8 ">
			<div class="card card-body">
				@if(count($mensagens)==0)
					&nbsp;&nbsp;&nbsp;<br><br><br><br><h1>AINDA NÃO HÁ MENSAGENS!!!</h1><br><br><br><br>
				@endif
				@foreach($mensagens as $mensagem)
					@if($mensagem->userId == auth()->user()->id)
						<div class="text-right">
							<label class="">
								<a href="#" class="btn btn-secondary " style="
								text-align: left;
								color:rgb(235, 232, 232);
								background-color:rgba(12, 155, 238, 0.993);
								border-radius:25px;
								border-color:rgba(12, 155, 238, 0.993);">
								<b>{{$mensagem->name}}</b><br>
								{{$mensagem->texto }}
								</a>
							</label><br>
							<span class="description">{{$mensagem->created_at}}<a style="color:rgb(221, 141, 141)" href="#"> Eliminar</a></span><br>
						</div>					
					@else
						<img class="img-circle mr-1" src="#"alt="">
						<label>
							<a href="#" class="btn btn-secondary btn-block" style="
								ext-align: left;
								color:rgb(7, 7, 7);
								background-color:rgb(228, 228, 228);
								border-radius:25px;
								border-color:rgb(228, 228, 228);">
								<b style="color:rgb(87, 85, 85)">{{ $mensagem->name }}</b><br>
									{{ $mensagem->texto }}
							</a>
						</label><br>
						<span class="description">{{$mensagem->created_at }} <a style="color:rgb(221, 141, 141)"href="#"> Eliminar</a></span><br>			
					@endif
				@endforeach
				<!--ENVIAR MENSAGEM NO CHAT-->
				<form action="/enviar_msg/{{$idGarimpo}}" method="POST" enctype="multipart/form-data">
					@csrf
					<div class="input-group input-group-sm mb-0">
						<input type="search"  class="  form-control @error('mensagem') is-invalid @enderror" name="msg" placeholder="Escrever mensagem">
						<div class="input-group-append">
							<input type="submit" class="btn btn-primary" role="button" aria-pressed="true" value="Enviar">
						</div><br>
					</div>
				</form> 
			</div>
		</div>
	</div>
@endsection