@extends('layouts.painel.principal')

@section('titulo', 'PDC-AIRLINES - Início')


@section('content')

	<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
		<ol class="carousel-indicators">
			@foreach ($anuncios as $anuncio)
				@if($anuncio->tipo==1)
					<li data-target="#carouselExampleCaptions" data-slide-to="0" class="@if($loop->first)active @endif"></li>
				@endif
			@endforeach
		</ol>
		<div class="carousel-inner">
			{{-- @dd($anuncios) --}}
			@foreach ($anuncios as $anuncio)
				@if($anuncio->tipo==1)
					<div class="carousel-item @if($loop->first) active @endif">
						<img width="100px" src="/storage/anuncios/{{$anuncio->imagem}}" class="d-block w-100" alt="...">
						<div class="carousel-caption d-none d-md-block">
							<h5>{{$anuncio->titulo}}</h5>
							<h3>{{$anuncio->descricao}}</h3>
						</div>
					</div>
				@endif
			@endforeach
		</div>
		<a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
    </div><br>

	<div class="row container">
		<div class="col-md-12 offset-3">
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;	
			{{-- BOTÃO MODAL, VER ESTADO DO VOO --}} 
			<a href="#" data-toggle="modal" data-target="#Modal_Registar_aviao" class="btn btn-outline-primary rounded-pill" role="button" aria-pressed="false"><i class="fas fa-plane"></i>Estado do voo</a>

			{{-- BOTÃO MODAL, REGISTAR ANÚNCIO --}} 
			<a href="#" data-toggle="modal" data-target="#Modal_Registar_anuncio" class="btn btn-outline-primary rounded-pill text-center" role="button" aria-pressed="false"><i class="fas fa-plus"></i> Registar Anúncio</a>

			{{-- BOTÃO MODAL, SOBRE CLUB PDC--}} 
			<a href="#" data-toggle="modal" data-target="#Modal_sobre_pdcClub" class="btn btn-outline-primary rounded-pill" role="button" aria-pressed="false"><i class="fas fa-users"></i> Sobre PDC Club</a>
		</div>
	</div> <br>
	<!-- ================FORMULÁRIO PARA RESERVA=============-->
	<section class="content">
		<div class="col-md-12 container-fluid">
			<div class="card">
				<div class="card-header p-2">
					<h2> Reservas </h2>
					<ul class="nav nav-pills">
						<li class="nav-item"><a class="nav-link active rounded-pill" href="#timeline" data-toggle="tab">Ida e volta</a></li>
						<li class="nav-item"><a class="nav-link rounded-pill" href="#settings" data-toggle="tab">Apenas de ida</a></li>
					</ul>
				</div>
				<div class="card-body">
					<div class="tab-content">
						<div class="active tab-pane" id="timeline">
							<form action="/reservas/procurar" method="Post" enctype="multipart/form-data">
								@csrf

								<span class="description">Origem:</span>
								<span class="description offset-5">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Destino:</span>
								<div class="input-group input-group-sm mb-3">
									<select name="origem" class="form-control form-control-sm">
										@isset($aeroportos)
											@foreach($aeroportos as $aeroporto)
												<option value={{$aeroporto->id}}>{{$aeroporto->cidade}}</option>
											@endforeach
										@endisset
									</select>
									<select name="destino" class="form-control form-control-sm">
										@isset($aeroportos)
											@foreach($aeroportos as $aeroporto)
												<option value={{$aeroporto->id}}>{{$aeroporto->cidade}}</option>
											@endforeach
										@endisset
									</select>
								</div>

								<span class="description">Data de ida:</span> 
								<span class="description offset-5">Data de volta:</span>
								<div class="input-group input-group-sm mb-0">
									<input type="date" class="form-control form-control-sm @error('dataIda') is-invalid @enderror" name="dataIda" placeholder="Data de ida"><br>
									<input type="date" class="form-control form-control-sm @error('dataVolta') is-invalid @enderror" name="dataVolta" placeholder="Data de volta"><br>
								</div><br>
									
								<span class="description"> Classe: </span>
								<span class="description offset-5">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Passageiros: </span>
								<div class="input-group input-group-sm mb-3">
									<select name="tarifa" class="form-control form-control-sm">
										@isset($tarifas)
											@foreach($tarifas as $tarifa)
												<option value={{$tarifa->id}}>{{$tarifa->nome}}</option>
											@endforeach
										@endisset
									</select>
									<!-- Passageiros -->
									<input type="number" name="passageiros" class="form-control form-control-sm" placeholder="Informe a quantidade de passageiros">
								</div>
								<div class="text-right">
									<button type="submit"  class="btn btn-info rounded-pill">Continuar</button>
								</div>
							
							</form>
						</div>
						<div class="tab-pane" id="settings">
							<form action="/reservas/procurar" method="Post" enctype="multipart/form-data">
								@csrf
								<span class="description">Origem:</span>
								<span class="description offset-5">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Destino:</span>
								<div class="input-group input-group-sm mb-3">
									<select name="origem" class="form-control form-control-sm">
										@isset($aeroportos)
											@foreach($aeroportos as $aeroporto)
												<option value={{$aeroporto->id}}>{{$aeroporto->cidade}}</option>
											@endforeach
										@endisset
									</select>
									<select name="destino" class="form-control form-control-sm">
										@isset($aeroportos)
											@foreach($aeroportos as $aeroporto)
												<option value={{$aeroporto->id}}>{{$aeroporto->cidade}}</option>
											@endforeach
										@endisset
									</select>
								</div>

								<span class="description">Data de ida:</span> 
								<span class="description offset-3">Classe:</span>
								<span class="description offset-3"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Passageiros: </span>
								<div class="input-group input-group-sm mb-0">
									<input type="date" class="form-control form-control-sm @error('dataIda') is-invalid @enderror" name="dataIda" placeholder="Data de ida"><br>
									<select name="tarifa" class="form-control form-control-sm">
										@isset($tarifas)
											@foreach($tarifas as $tarifa)
												<option value={{$tarifa->id}}>{{$tarifa->nome}}</option>
											@endforeach
										@endisset
									</select>
									<!-- Passageiros -->
									<input type="number" name="passageiros" class="form-control form-control-sm" placeholder="Informe a quantidade de passageiros">

								</div><br>
								<div class="text-right">
									<button type="submit"  class="btn btn-info rounded-pill">Continuar</button>
								</div>
							
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- ====================================================-->
	<div class="row container-fluid">
		@foreach($anuncios as $anuncio)
			@if($anuncio->tipo==2)
				<div class="col-md-4">
					<div class="card" style="width: 21rem;">
						<img class="card-img-top" src="/storage/anuncios/{{$anuncio->imagem}}" alt="Card image cap">
						<div class="card-body">
						<h2 >{{$anuncio->titulo}}</h2>
						<p class="card-text">À PARTIR DE </p>
						<h2 class="">{{$anuncio->descricao}}</h2>
						Ida e volta
						<a href="#" class=" offset-5 btn btn-primary rounded-pill text-right">Reservar</a>
						</div>
					</div>
				</div>
			@endif
		@endforeach
	</div>

	<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
		<ol class="carousel-indicators">
			@foreach ($anuncios as $anuncio)
				@if($anuncio->tipo==1)
					<li data-target="#carouselExampleCaptions" data-slide-to="0" class="@if($loop->first)active @endif"></li>
					{{-- <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
					<li data-target="#carouselExampleCaptions" data-slide-to="2"></li> --}}
				@endif
			@endforeach
		</ol>
		<div class="carousel-inner">
			{{-- @dd($anuncios) --}}
			@foreach ($anuncios as $anuncio)
				@if($anuncio->tipo==1)
					<div class="carousel-item @if($loop->first) active @endif">
						<img width="100px" src="/storage/anuncios/{{$anuncio->imagem}}" class="d-block w-100" alt="...">
						<div class="carousel-caption d-none d-md-block">
							<h5>{{$anuncio->titulo}}</h5>
							<h3>{{$anuncio->descricao}}</h3>
						</div>
					</div>
				@endif
			@endforeach
		</div>
		<a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
    </div><br>
@endsection
