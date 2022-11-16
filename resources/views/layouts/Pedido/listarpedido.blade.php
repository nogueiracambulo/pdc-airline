@extends('layouts.painel.principal')


@section('content' )
<section class="courses-section spad">
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1>Pedidos de adesão aos meus Garimpos</h1>

				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="/">Inicio</a></li>
						<li class="breadcrumb-item active">Garimpo</li>
					</ol>
				</div>
			</div>

			<div class="text-right ">
				{{-- BOTÃO MODAL, LISTAR TODOS PEDIDOS DE ADESÃO --}}
				<a href="/pedidos/garimpo"
					class="btn btn-outline-primary rounded-pill" role="button" aria-pressed="false">
					<i class="fas fa-bell"></i> Ver todos pedidos</a>
			</div>
		</div>
	</section>
		<div class="container">
			@if (count($pedidos) == 0)
				<div class="section-title text-center">
					<h4>Sem Pedido Disponível</h4>
				</div>
			@else
				<div class="row">
					@foreach ($pedidos as $pedido)
						<!-- course item -->
						<div class="col-lg-4 col-md-6 course-item">
							<div class="course-thumb">
								<img src="img/course/1.jpg" alt="">
								<div class="course-cat">
									<span>{{$pedido->name}}</span>
								</div>
							</div>
							<div class="course-info">
								<div class="date"><i class="fa fa-clock-o"></i>{{$pedido->created_at}}</div>
								<h4>Garimpo</h4>
								<h4 class="cource-price">{{$pedido->nome}}</h4>
								<h4 class="cource-price">Inscritos: {{$pedido->inscritos}}</h4>
							</div>
								<a href="eliminar/pedido/{{$pedido->pedidoId}}">
									<p>Rejeitar Pedido</p>
								</a>
								<a href="aceitar/pedido/{{$pedido->pedidoId}}/{{$pedido->inscritos}}">
									<p>Aceitar Pedido</p>
								</a>
						</div>
							<!-- course item -->
					@endforeach
				@endif
			</div>
			
		</div>
	</section>
@endsection