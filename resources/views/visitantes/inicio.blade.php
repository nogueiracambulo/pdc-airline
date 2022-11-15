@extends('layouts.visitante.principal')

@section('titulo', 'MULONGI - Início')

@section('content')
    {{-- @include('publicacoes/modal/registarPublicacao') --}}
    {{-- @include('publicacoes/modal/publicacaoDetalhes') --}}
    {{-- @include('aulas_Apoio/modal/registarAnuncio') --}}


	<main class="container-fluid imgCapa2 " >
		<div id=mainslider class="carousel slide " data-ride="carousel">
			<ol class="carousel-indicators">
                {{-- @forelse($publicacoes as $pub)
                    @if($loop->index<3)
				        <li data-target="#mainslider" data-slide-to="0" class="@if($loop->index==0) active @endif "></li>
                    @endif
                @empty
                @endforelse --}}
			</ol>
			<div class="container" >
				<div class="carousel-inner" style="height: 31.2em" >
                    {{-- @forelse($publicacoes as $pub)
                        @if($loop->index<3)
                            <div  class="carousel-item  @if($loop->index==0) active @endif" style= "transition-duration: 1s; transition-time-function: ease-in">
                                <img src="publicacoes/{{$pub->imagem}}" class="d-block w-100  imgCapa" alt="">
                                <div class="carousel-caption d-none d-md-block  text-left">
                                    <div class="hs-subtitle">{{$pub->legenda}}</div>
                                    <h2 class="hs-titl">{{$pub->legenda}}</h2>
                                    <p class="hs-des">{{$pub->texto}}</p>
                                    <a href="#" class="main-btn" data-toggle="modal" data-target="#Modal_publicacaoDetalhes{{$pub->id}}">Ver Detalhes</a>

                                </div>
                            </div>
                        @endif
                    	@empty
                    @endforelse --}}

                </div>

			</div>

            <a href="#mainslider" class="carousel-control-prev" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="sr-only">Anterior</span>
			</a>

			<a href="#mainslider" class="carousel-control-next" role="button" data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="sr-only">Avançar</span>
                <br><br><br><br>
			</a>


		</div>
	</main>

	<!-- Counter section  -->
	<section class="counter-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-7 col-md-6">
					<div class="big-icon">
						<i class="fa fa-graduation-cap"></i>
					</div>
					<div class="counter-content">
						<h2>ORGANIZAÇÃO & ORIENTAÇÃO ACADÊMICA</h2>
						<p><i class="fa fa-calendar-o"></i>PRESENCIAL: 07H00 - 20H00</p>
					</div>

				</div>
				<div class="col-lg-5 col-md-6">
					<div class="counter">
						{{-- <div class="counter-item"><h4>20</h4>Days</div>
						<div class="counter-item"><h4>08</h4>Hrs</div>
						<div class="counter-item"><h4>40</h4>Mins</div>
						<div class="counter-item"><h4>56</h4>secs</div> --}}
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Counter section end -->


	<!-- Services section -->
	<section class="service-section spad">
		<div class="container services">
			<div class="section-title text-center">
				<h3>SERVIÇOS MULONGI</h3>
				<p>Providenciamos a oportunidade que lhe prepara para uma carreira
                     estudantil brilhante<br> e um potencial profissional de sucesso em TI</p>
			</div>
			<div class="row">
				<div class="col-lg-4 col-sm-6 service-item">
					<div class="service-icon">
						<img src="vendor_visitante/img/cc-icon/biblioteca.png" alt="1">
					</div>
					<div class="service-content">
						<h4>BIBLIOTECA </h4>
						<p>Neste módulo MULONGI, encontrará uma grande facilidade em localizar os conteúdos das suas disciplinas,
                            pois eles estarão organizados aqui de acordo ao ano acadêmico e disciplina.</P>
                        <P> Vai ainda encontrar links associados aos conteúdos, que em algum momento já serviram de auxílio para
                            compreensão da matéria para estudantes que foram bem sucedidos.</p>
					</div>
				</div>
				<div class="col-lg-4 col-sm-6 service-item">
					<div class="service-icon">
						<img src="vendor_visitante/img/services-icons/4.png" alt="1">
					</div>
					<div class="service-content">
						<h4>TRABALHOS</h4>
						<p>Este módulo atenta-se aos projetos semestrais das disciplinas realizados no departamento</p>
                        <p>Permite aos docentes publicarem propostas de projetos e avaliar grupos de estudantes bem como projetos desenvolvidos por eles </p>
                        <p>Aos estudantes são permitidos criar grupos de 2 a 5 elementos para desenvolver o projeto de uma disciplina específica, carregá-lo no MULONGI e aguardar pela avaliação do docente.</p>

                    </div>
				</div>
				<div class="col-lg-4 col-sm-6 service-item">
					<div class="service-icon">
						<img src="vendor_visitante/img/services-icons/3.png" alt="1">
					</div>
					<div class="service-content">
						<h4>GARIMPO</h4>
						<p>O MULONGI lhe proporciona a oportunidade de comaltar as dúvidas nos assuntos de todas a Disciplinas do curso, estudando online com outros estudantes ou agendar estudo presencial com colegas que melhor percebem o assunto específico</p>
					</div>
				</div>

			</div>
		</div>
	</section>
	<!-- Services section end -->


	<!-- Enroll section -->
	<section class="enroll-section spad set-bg" style="background-image: url('vendor_visitante/img/hero_1.jpg')">
		<div class="container">
			<div class="row">
				<div class="col-lg-5">
					<div class="section-title text-white">
						<h3>REGISTO</h3>
						<p>Crie sua conta MULONGI e eleve a experiência ao mais alto nível!</p>
					</div>
					<div class="enroll-list text-white">
						<div class="enroll-list-item">
							<span>1</span>
							<h5>Organização</h5>
							<p>Tenha em suas mãos todos os programas e conteúdos das Disciplinas do curso</p>
						</div>
						<div class="enroll-list-item">
							<span>2</span>
							<h5>Garimpo</h5>
							<p>Solicite na Comunidade académica MULONGI, explicações sobre temas e disciplinas específicas</p>
						</div>
						<div class="enroll-list-item">
							<span>3</span>
							<h5>Trabalhos</h5>
							<p>Acompanhamento em trabalhos por disciplina, alertas de timings e interação com Docentes das cadeiras</p>
						</div>
					</div>
				</div>
				<div class="col-lg-6 offset-lg-1 p-lg-0 p-4">
					{{-- <img src="vendor_visitante/img/projetos.jpg" alt=""> --}}
				</div>
			</div>
		</div>
	</section>
	<!-- Enroll section end -->


	<!-- Courses section -->
	<section class="courses-section spad">
		<div class="container">
			<div class="section-title text-center">
				<h3>AULAS DE APOIO (GARIMPOS)</h3>
				<p>Elimine suas dúvidas com o colega que melhor entendeu a matéria</p>
			</div>
			<div class="row">
				<!-- course item -->
				<div class="col-lg-4 col-md-6 course-item">
					<div class="course-thumb">
						<img src="img/course/1.jpg" alt="">
						<div class="course-cat">
							<span>ANÁLISE MATEMÁTICA</span>
						</div>
					</div>
					<div class="course-info">
						<div class="date"><i class="fa fa-clock-o"></i> 22 Mar 2018</div>
						<h4>Acompanhamento e  <br>resolução de exercícios</h4>
						<h4 class="cource-price">5000KZ<span>/mês</span></h4>
					</div>
				</div>
				<!-- course item -->
				<div class="col-lg-4 col-md-6 course-item">
					<div class="course-thumb">
						<img src="img/course/2.jpg" alt="">
						<div class="course-cat">
							<span>Marketing</span>
						</div>
					</div>
					<div class="course-info">
						<div class="date"><i class="fa fa-clock-o"></i> 22 Mar 2018</div>
						<h4>Google AdWords: Get More<br> Customers with Search Marketing </h4>
						<h4 class="cource-price">$150<span>/month</span></h4>
					</div>
				</div>
				<!-- course item -->
				<div class="col-lg-4 col-md-6 course-item">
					<div class="course-thumb">
						<img src="img/course/3.jpg" alt="">
						<div class="course-cat">
							<span>DESIGN</span>
						</div>
					</div>
					<div class="course-info">
						<div class="date"><i class="fa fa-clock-o"></i> 22 Mar 2018</div>
						<h4>The Ultimate Drawing Course<br> Beginner to Advanced</h4>
						<h4 class="cource-price">$180<span>/month</span></h4>
					</div>
				</div>
				<!-- course item -->
				<div class="col-lg-4 col-md-6 course-item">
					<div class="course-thumb">
						<img src="img/course/4.jpg" alt="">
						<div class="course-cat">
							<span>BASE DE DADOS</span>
						</div>
					</div>
					<div class="course-info">
						<div class="date"><i class="fa fa-clock-o"></i> 22 Mar 2018</div>
						<h4>Mysql actualizado; SQL de iniciante a avançado </h4>
						<h4 class="cource-price">5000kz<span>/mês</span></h4>
					</div>
				</div>
				<!-- course item -->
				<div class="col-lg-4 col-md-6 course-item">
					<div class="course-thumb">
						<img src="img/course/5.jpg" alt="">
						<div class="course-cat">
							<span>PROGRAM</span>
						</div>
					</div>
					<div class="course-info">
						<div class="date"><i class="fa fa-clock-o"></i> 22 Mar 2018</div>
						<h4>Web Developer Bootcamp<br>Make web  applications</h4>
						<h4 class="cource-price">$250<span>/month</span></h4>
					</div>
				</div>
				<!-- course item -->
				<div class="col-lg-4 col-md-6 course-item">
					<div class="course-thumb">
						<img src="img/course/6.jpg" alt="">
						<div class="course-cat">
							<span>BUSINESS</span>
						</div>
					</div>
					<div class="course-info">
						<div class="date"><i class="fa fa-clock-o"></i> 22 Mar 2018</div>
						<h4>How to Start an Amazon<br>FBA Store on a Tight Budget</h4>
						<h4 class="cource-price">$150<span>/month</span></h4>
					</div>
				</div>


			</div>
		</div>
	</section>
	<!-- Courses section end-->


	<!-- Fact section -->
	<section class="fact-section spad set-bg" style="background-image:url('vendor_visitante/img/fact-bg.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
					@if( isset(auth()->user()->id))
							@if(Auth::user()->name=="Cambulo Nogueira")
								<a href="#" data-toggle="modal" data-target="#Modal_Registar_publicacao"  class="main-btn " role="button" aria-pressed="false" >nova publicação</a>
								<a href="#" data-toggle="modal" data-target="#Modal_Registar_anuncioAula"  class="main-btn" role="button" aria-pressed="false" >Nova Aula de Apoio</a>		
							@endif
					@endif
                    <br><br>
                </div>
                <div class="col-sm-6 col-lg-3 fact">
                    <div class="fact-icon">
                        <i class="ti-crown"></i>
                    </div>
                    <div class="fact-text">
                        <h2>06</h2>
                        <p>ANOS</p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3 fact">
                    <div class="fact-icon">
                        <i class="ti-briefcase"></i>
                    </div>
                    <div class="fact-text">
                        <h2>17</h2>
                        <p>PROFESSORES</p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3 fact">
                    <div class="fact-icon">
                        <i class="ti-user"></i>
                    </div>
                    <div class="fact-text">
                        <h2>300</h2>
                        <p>ESTUDANTES</p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3 fact">
                    <div class="fact-icon">
                        <i class="ti-pencil-alt"></i>
                    </div>
                    <div class="fact-text">
                        <h2>40</h2>
                        <p>DISCIPLINAS</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
	<!-- Fact section end-->


	<!-- Event section -->
	<section class="event-section spad">
		<div class="container">
			<div class="section-title text-center">
				<h3>EVENTOS ACADÊMICOS</h3>
				<p>A Equipa MULONGI lhe actualiza sobre os eventos acadêmicos a se realizar
                    <br> no departamento de Ciências da Computação</p>
			</div>
			<div class="row">
				<div class="col-md-6 event-item">
					<div class="event-thumb">
						<img src="img/event/1.jpg" alt="">
						<div class="event-date">
							<span>24 Mar 2018</span>
						</div>
					</div>
					<div class="event-info">
						<h4>Festa dos Caloiros</h4>
						<p><i class="fa fa-calendar-o"></i> 08h00 - 10h00  <i class="fa fa-map-marker"></i> Anfiteatro da Computação</p>
						<a href="" class="event-readmore">REGISTAR-SE <i class="fa fa-angle-double-right"></i></a>
					</div>
				</div>
				<div class="col-md-6 event-item">
					<div class="event-thumb">
						<img src="img/event/2.jpg" alt="">
						<div class="event-date">
							<span>22 Mar 2018</span>
						</div>
					</div>
					<div class="event-info">
						<h4>Semana da Computação:<br>Feira tecnológica</h4>
						<p><i class="fa fa-calendar-o"></i> 09h00 - 17h00  <i class="fa fa-map-marker"></i> Pátio do Departamento da Computação</p>
						<a href="" class="event-readmore">REGISTAR-SE <i class="fa fa-angle-double-right"></i></a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Event section end -->


	<!-- Gallery section -->
	<div class="gallery-section">
		<div class="gallery">
			<div class="grid-sizer"></div>
			<div class="gallery-item gi-big set-bg" data-setbg="img/gallery/1.jpg">
				<a class="img-popup" href="img/gallery/1.jpg"><i class="ti-plus"></i></a>
			</div>
			<div class="gallery-item set-bg" data-setbg="img/gallery/2.jpg">
				<a class="img-popup" href="img/gallery/2.jpg"><i class="ti-plus"></i></a>
			</div>
			<div class="gallery-item set-bg" data-setbg="img/gallery/3.jpg">
				<a class="img-popup" href="img/gallery/3.jpg"><i class="ti-plus"></i></a>
			</div>
			<div class="gallery-item gi-long set-bg" data-setbg="img/gallery/5.jpg">
				<a class="img-popup" href="img/gallery/5.jpg"><i class="ti-plus"></i></a>
			</div>
			<div class="gallery-item gi-big set-bg" data-setbg="img/gallery/8.jpg">
				<a class="img-popup" href="img/gallery/8.jpg"><i class="ti-plus"></i></a>
			</div>
			<div class="gallery-item gi-long set-bg" data-setbg="img/gallery/4.jpg">
				<a class="img-popup" href="img/gallery/4.jpg"><i class="ti-plus"></i></a>
			</div>
			<div class="gallery-item set-bg" data-setbg="img/gallery/6.jpg">
				<a class="img-popup" href="img/gallery/6.jpg"><i class="ti-plus"></i></a>
			</div>
			<div class="gallery-item set-bg" data-setbg="img/gallery/7.jpg">
				<a class="img-popup" href="img/gallery/7.jpg"><i class="ti-plus"></i></a>
			</div>
		</div>
	</div>
	<!-- Gallery section -->


	<!-- ÚLTIMAS NOTÍCIAS -->
	<section class="blog-section spad">
        <div class="container">
            <div class="section-title text-center">
                <h3>ÚLTIMAS NOTÍCIAS</h3>
                <p>receba as últimas notícias de hoje</p>
            </div>
            <div class="row">
                {{-- @forelse($publicacoes as $pub)
                    @if($loop->index<4)
                        <div class="col-xl-6">
                            <div class="blog-item">
                                <div class="blog-thumb set-bg" style="background-image:url('publicacoes/{{$pub->imagem}}')"></div>
                                <div class="blog-content">
                                    <h4>{{$pub->legenda}}</h4>
                                    <div class="blog-meta">
                                        <span><i class="fa fa-calendar-o"></i>{{$pub->created_at}}</span>
                                        <span><i class="fa fa-user"></i> </span>
                                    </div>
                                    <p>{{$pub->texto}}</p>
                                </div>
                            </div>
                        </div>
                    @endif
                    @empty
                @endforelse --}}
            </div>
        </div>
    </section>
@endsection
