@extends('layouts.painel.principal')
@section('titulo', 'PDC-AIRLINES - Contacto')

@section('content')

	<!-- Breadcrumb section -->
	<div class="site-breadcrumb">
		<div class="container">
			<a href="/"><i class="fa fa-home"></i>Início</a> <i class="fa fa-angle-right"></i>
			<span>Contactos</span>
		</div>
	</div>
	<!-- Breadcrumb section end -->

	<!-- Courses section -->
	<section class="contact-page spad pt-0">
		<div class="container">
			<div class="map-section">
				<div class="contact-info-warp">
					<div class="contact-info">
						<h4>Endereço</h4>
						<p>Rua Direita da Camama e Rua do Estádio 11 de Novembro, Município de Belas, Luanda-Sul – Angola</p>
					</div>
					<div class="contact-info">
						<h4>Telefones</h4>
						<p>(+244) 941 070 592</p>
                        <p>(+244) 927 820 827</p>
					</div>
					<div class="contact-info">
						<h4>E-mail</h4>
						<p>cambllejunior@gmail.com</p>
                        <p>joaomacondo@gmail.com</p>
					</div>
					<div class="contact-info">
						<h4>Atendimento presencial</h4>
						<p>Segunda à Sexta-feira: 08H00 às 15h00</p>
					</div>
				</div>
				<!-- Google map -->
				<div class="map" id="map-canvas"></div>
			</div><br>
			<div class="contact-form spad pb-0">
				<div class="section-title text-center">
					<h3>ENTRE EM CONTACTO</h3>
					<p>Contacte-nos para mais detalhes e orientações</p>
				</div>
				<form class="comment-form --contact">
					<div class="row">
						<div class="col-lg-4">
							<input type="text" placeholder="Seu nome">
						</div>
						<div class="col-lg-4">
							<input type="text" placeholder="Seu email">
						</div>
						<div class="col-lg-4">
							<input type="text" placeholder="Assunto">
						</div>
						<div class="col-lg-12">
							<textarea placeholder="Mensagem"></textarea>
							<div class="text-center">
								<button class="site-btn">SUBMETER</button>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</section>
	<!-- Courses section end-->
@endsection
