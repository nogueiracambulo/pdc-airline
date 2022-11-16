@extends('layouts.painel.principal')


@section('content' )
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1>BEM - VINDO AO GARIMPO!</h1>
					<p>Elimine suas dúvidas com o colega que melhor entendeu a matéria</p>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="/">Inicio</a></li>
						<li class="breadcrumb-item active">Garimpo</li>
					</ol>
				</div>
			</div>

			<div class="text-right ">
				{{-- BOTÃO MODAL, LISTAR TODOS PEDIDOS DE ADESÃO AOS GARIMPOS DO UTILIZADOR LOGADO --}}         
				<a href="/pedidos/garimpo" 
				class="btn btn-outline-primary rounded-pill" role="button" aria-pressed="false">
				<i class="fas fa-bell"></i> Ver pedidos de adesão</a>

				{{-- BOTÃO MODAL, REGISTAR GARIMPO --}}         
				<a href="#" data-toggle="modal" data-target="#Modal_Registar_Garimpo_Chat" 
				class="btn btn-outline-primary rounded-pill" role="button" aria-pressed="false"><i class="fas fa-plus-circle"></i> Criar novo Garimpo</a>
			</div>
		</div><br>
	</section>  

	<section class="courses-section spad">
		<div class="container">
			<div class="text-center col-12 card rounded-pill">
				<h3 class="text-center">Garimpos disponíveis
			</div>
			{{-- <div class=" ">
				<div class=""> --}}
					@if (count($garimpos) == 0)
						<div class="section-title text-center">
							<h4>Sem Garimpo Disponível</h4>
						</div>
					@else
						<div class="row">
							@foreach ($garimpos as $garimpo)
							
								<div class="col-md-5">
									<br>
									<img class="rounded" src="/{{$garimpo->fotoCapa}}" alt="" width="430" >
								</div>
								
								<div class="col-md-7">
									<blockquote class="primary" style="color:black;">
										<div>
											<h3><i style="color:black;" class="fas fa-chalkboard-teacher"></i> Garimpo de {{$garimpo->nome}}</h3>
											<h5 style="color:rgb(12, 80, 126);"><i  class="fas fa-graduation-cap"></i> {{$garimpo->descricao}}<br></h5>
											<i class="fas fa-user"> </i> com <b><a href="/perfil">{{ $garimpo->name}}</a></b><br>
											
											<i class="fas fa-money-bill"></i> {{$garimpo->Preco}} kz<span>/mês</span><br>
											<i class="fas fa-users"></i> Inscritos - <span>{{$garimpo->inscritos}}</span><br>
											<i class="fas fa-star" style="color:gold"></i> Nível de recomendação - <span>{{$garimpo->inscritos}} %</span><br>
											<br>
										</div>
									</blockquote>
									
									<?php $sinal=false ?>
									<?php $id=0 ?>
									<?php $idlogado = auth()->user()->id?>
									<?php $std="a" ?>
									<blockquote class="primary">
									@if(auth()->user()->id == $garimpo->userId)
										<a class="btn btn-primary" href="/ver/chat/{{$garimpo->garimpoId}}/{{$garimpo->nome}}"><i class="fas fa-comment"></i> Aceder ao Chat</a>
										<a class="btn btn-danger" href="/eliminar/garimpo/{{$garimpo->garimpoId}}"><i class="fas fa-trash"></i> Eliminar garimpo </a>
									@else
										@foreach($inscritos as $inscrito)
											@if(($garimpo->garimpoId == $inscrito->garimpo_id))
												<?php $id=$inscrito->pedidoId?>
												@if($inscrito->estado == "pendente")
													<?php $sinal = true; ?>
													<?php $std="pendente"; ?>
													<?php $id = $inscrito->pedidoId; ?>
												@else
													<?php $sinal = true; 
													$std="aceito";?>
													<?php $id = $inscrito->pedidoId;?>
												@endif
											@endif
										@endforeach
									
										@if(($sinal==true) and ($std=="pendente"))
												<a class="btn btn-warning" href="/eliminar/pedido/{{$id}}"><i class="fas fa-ban"></i> Cancelar pedido de Adesão</a>
											@elseif(($sinal==true) and ($std=="aceito"))
												<a class="btn btn-primary" href="/ver/chat/{{$garimpo->garimpoId}}/{{$garimpo->nome}}"><i class="fas fa-comment"></i> Aceder ao chat</a>
											@else 
												<a class="btn btn-primary" href="/inscrever/garimpo/{{$garimpo->garimpoId}}"><i class="fas fa-plus-circle"></i> Inscrever-se no Garimpo</a>
										@endif
									@endif
								 	</blockquote>
									
								</div>
							@endforeach
						</div>
					@endif
				{{-- </div>
			</div>	 --}}
		</div>
	</section>
@endsection