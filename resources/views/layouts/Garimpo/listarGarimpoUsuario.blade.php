@extends('layouts.painel.principal')


@section('content' )
<section class="courses-section spad">
		<div class="container">
			@if (count($garimpos) == 0)
				<div class="section-title text-center">
					<h4>Sem Garimpo Criado por si</h4>
				</div>
			@else
			<div class="section-title text-center">
				<h3>Visualizar Membros dos Garimpo</h3>
			</div>
				<div class="row">
					@foreach ($garimpos as $garimpo)
						<!-- course item -->
						<div class="col-lg-4 col-md-6 course-item">
							<div class="course-thumb">
								<img src="img/course/1.jpg" alt="">
								<div class="course-cat">
									<span>{{$garimpo->nome}}</span>
								</div>
							</div>
							<div class="course-info">
								<div class="date"><i class="fa fa-clock-o"></i> {{$garimpo->name}}</div>
								<h4>{{$garimpo->descricao}}</h4>
								<h4 class="cource-price">5000KZ<span>/mês</span></h4>
								<h5 class="cource-price">Inscritos<span>/{{$garimpo->inscritos}}</span></h5>
								<a href="listar/membro/{{$garimpo->garimpoId}}/{{$garimpo->nome}}/{{$garimpo->inscritos}}">
									<p>Visualizar Membros</p>
								</a>
								<a href="ver/chat/{{$garimpo->garimpoId}}/{{$garimpo->nome}}">
									<p>Entrar</p>
								</a>
							</div>	
					@endforeach			
			@endif
		</div>	
		</div>
	</section>
@endsection