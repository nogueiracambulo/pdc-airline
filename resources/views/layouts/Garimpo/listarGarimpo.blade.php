@extends('layouts.painel.principal')


@section('content' )
<section class="courses-section spad">
		<div class="container">
			<div class="section-title text-center">
				<h3>AULAS DE APOIO (GARIMPOS)</h3>
				<p>Elimine suas dúvidas com o colega que melhor entendeu a matéria</p>
			</div>

			@if (count($garimpos) == 0)
				<div class="section-title text-center">
					<h4>Sem Garimpo Disponível</h4>
				</div>
			@else
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
							</div>
							<?php $sinal=false ?>
							<?php $id=0 ?>
							<?php $idlogado = auth()->user()->id?>
							<?php $std="a" ?>

							@if(auth()->user()->id == $garimpo->userId)
								<a href="ver/chat/{{$garimpo->garimpoId}}/{{$garimpo->nome}}">
									<p>Entrar</p>
								</a>
								<a href="eliminar/garimpo/{{$garimpo->garimpoId}}">
									<p>Eliminar Garimpo</p>
								</a>
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
									<a href="eliminar/pedido/{{$id}}">
										<p>Cancelar pedido de Adesão </p>
									</a>
								@elseif(($sinal==true) and ($std=="aceito"))
									<a href="ver/chat/{{$garimpo->garimpoId}}/{{$garimpo->nome}}">
										<p>Entrar</p>
									</a>
								@else
									<a href="inscrever/garimpo/{{$garimpo->garimpoId}}">
										<p>Inscrever-se no Garimpo</p>
									</a>
								@endif
							@endif
						</div>
							<!-- course item -->
					@endforeach
			@endif
		</div>	
		</div>
	</section>
@endsection