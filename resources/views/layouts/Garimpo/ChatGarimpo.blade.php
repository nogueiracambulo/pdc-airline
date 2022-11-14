@extends('layouts.painel.principal')


@section('content')
	<h4>Chat Garimpo</h4>
	<h5>{{$nomeGarimpo}}</h5>
	@if(count($mensagens)==0)
		<p>Seja o primeiro a Comentar</p>
	@endif
	<div class="col-md-12 float-center"><br><br><br><br><br>
	
	
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
				<img class="img-circle mr-1"
				src="#"alt="">
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
		<!-- <form action="enviar_msg/{{$idGarimpo}}" method="POST" enctype="multipart/form-data">
                @csrf
				<div class="input-group input-group-sm mb-0">
                    <input type="search" class="form-control @error('mensagem') is-invalid @enderror" id="msg" name="msg" placeholder="Escrever mensagem">
                    <div class="input-group-append">
                        <input type="submit" class="btn btn-primary" role="button" aria-pressed="true" value="Enviar">
                    </div><br>
                </div>
			</div>
        </form> -->
		<div class="form-floating">
			<textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
			<label for="floatingTextarea">Comments</label>
			<div class="input-group-append">
                <input type="submit" class="btn btn-primary" role="button" aria-pressed="true" value="Enviar">
            </div><br>
		</div>

		
@endsection