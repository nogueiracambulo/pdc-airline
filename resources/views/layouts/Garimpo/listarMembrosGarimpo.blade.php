@extends('layouts.painel.principal')


@section('content' )
<section class="courses-section spad">
		<div class="container">
		<div class="section-title text-center">
					<h3>Visualizar membros dos garimpo</h3>
					<h2>{{$nomeGarimpo}}</h2>
				</div>
			@if (count($membros) == 0)
				<div class="section-title text-center">
					<h4>Sem Membros</h4>
				</div>
			@else
				
				<div class="row">
					@foreach ($membros as $membro)
						<!-- course item -->
						<div class="col-lg-4 col-md-6 course-item">
							<div class="course-thumb">
								<img src="img/course/1.jpg" alt="">
								<div class="course-cat">
									<span>{{$membro->name}}</span>
								</div>
							</div>
							<div class="course-info">
								<div class="date"><i class="fa fa-clock-o"></i> {{$membro->email}}</div>
							</div>
							<a href="remover/membro/{{$membro->pedidoId}}/{{$inscritos}}">
								<p>Remover Membro</p>
							</a>
					@endforeach				
			@endif
		</div>	
		</div>
	</section>
@endsection