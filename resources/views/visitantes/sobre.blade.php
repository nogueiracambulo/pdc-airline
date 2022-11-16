@extends('layouts.visitante.principal')

@section('titulo', 'MULONGI - Sobre nós')
@section ('content')  
	<!-- Breadcrumb section -->
	<div class="site-breadcrumb">
		<div class="container">
			<a href="/"><i class="fa fa-home"></i> Início</a> <i class="fa fa-angle-right"></i>
			<span>Sobre nós</span>
		</div>
	</div>
	<!-- Breadcrumb section end -->


	<!-- About section -->
	<section class="about-section spad pt-0">
		<div class="container">
			<div class="section-title text-center">
				<h3>BEM-VINDO AO MULONGI</h3>
				<p>Organize a tua carreira estudantil e Desenvolva projetos de forma responsável <br> e profissional, respeitando o tempo e as etapas</p>
			</div>
			<div class="row">
				<div class="col-lg-6 about-text">
					<h5>Sobre nós</h5>
					<p class="text-justify">CC-GUIDER é um produto desenvolvido pelos estudantes finalistas do Curso de Ciências da Computação da Faculdade de Ciências,
                        Universidade Agostinho Neto, com o objetivo de auxiliar aos estudantes do curso antes, durante e depois da sua carreira estudantil,
                        cultivando uma mentalidade de responsabilidade com seus projetos e compromisso com os clientes.</p>

                    <h5 class="pt-4">Nossa História</h5>
					<p class="text-justify">
                        O CC-GUIDER existe desde 2021 mas foi perspectivado nos meiados dos anos 2017 e 2018 atendendo
                         às dificuldades de auto organização acadêmica dos estudantes vistas pelos desenvolvedores. </p>
					<ul class="about-list">
						<li><i class="fa fa-check-square-o"></i> O Curso de Ciencias da Computação existe desde 2007
                            na Faculdade de Ciências, Universidade Agostinho Neto.</li>
						<li><i class="fa fa-check-square-o"></i> À partir de 2012 o curso foi transferido para as novas instalações da Universidade, o Campus Universitário</li>
						<li><i class="fa fa-check-square-o"></i> Desde então, mais de 300 estudantes estão licenciados </li>

					</ul>
				</div>
				<div class="col-lg-6 pt-5 pt-lg-0">
					<img src="vendor_visitante/img/campus.jpg" alt="">
				</div>
			</div>
		</div>
	</section>
	<!-- About section end-->
	<!-- Team section  -->
	<section class="team-section spad">
		<div class="container">
			<div class="section-title text-center">
				<h3>NOSSA EQUIPA</h3>
				<p> A equipa de desenvolvedores é composta por dois estudantes finalistas do curso de Ciências da computação</p>
			</div>
			<div class="row ">
				<div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="member">
                                <div class="member-pic set-bg" style="background-image:url('img/cambulo.png')">
                                    <div class="member-social">
                                        <a href=""><i class="fa fa-facebook"></i></a>
                                        <a href=""><i class="fa fa-twitter"></i></a>
                                        <a href=""><i class="fa fa-pinterest"></i></a>
                                    </div>
                                </div>
                                <h5>Cambulo Nogueira</h5>
                                <p>Desenvolvedor Web, Full stack</p>
                                <p>Finalista em Ciência da Computação</p>
                            </div>
                        </div>
                    </div>
				</div>

				<div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="member">
                                <div class="member-pic set-bg" style="background-image:url('img/joao2.png')">
                                    <div class="member-social">
                                        <a href=""><i class="fa fa-facebook"></i></a>
                                        <a href=""><i class="fa fa-twitter"></i></a>
                                        <a href=""><i class="fa fa-pinterest"></i></a>
                                    </div>
                                </div>
                                <h5>João Macondo</h5>
                                <p>Desenvolvedor Web, Full stack</p>
                                <p>Finalista em Ciência da Computação</p>
                            </div>
                        </div>
                    </div>
				</div>
			</div>
		</div>
	</section>
	<!-- Team section end -->

@endsection
