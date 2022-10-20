@extends('layouts.main')
@section('titulo', 'CCGUIDER - Grelha Curricular')
@section ('content')
	<!-- Breadcrumb section -->
	<div class="site-breadcrumb">
		<div class="container">
			<a href="/"><i class="fa fa-home"></i> Início</a> <i class="fa fa-angle-right"></i>
			<span>Grelha Curricular</span>
		</div>
	</div>
	<!-- Breadcrumb section end -->


	<!-- Courses section -->
	<section class="full-courses-section spad pt-0">
		<div class="container ">
            <div class="section-title text-center">
                <h3>DISCIPLINAS DO CURSO DE CIÊNCIAS DA COMPUTAÇÃO</h3>
                <p>Disciplinas do primeiro ao quarto ano de Licenciatura em ciências da Computação</p>
            </div>


			<span>  2º ANO</span> <hr>
			<div class="row ">
                <div class="course-thumb">
                    <div class="">
                        <span> III SEMESTRE </span>
                    </div>
                </div>
                <!-- course item -->
                <div class="col-md-2 course-item">
                    <div class="course-thumb">
                        <img src="vendor_visitante/img/course/1.jpg" alt="">
                        <div class="course-cat2">
                            <span><a href="#" class="disc">ANÁLISE NUMÉRICA</a></span>
                        </div>
                    </div>
                </div>
                <!-- course item -->
                <div class="col-md-2 course-item">
                    <div class="course-thumb">
                        <img src="vendor_visitante/img/course/1.jpg" alt="">
                        <div class="course-cat2">
                            <span><a href="#" class="disc">PARAD.PROGRAMAÇÃO</a></span>
                        </div>
                    </div>
                </div>
                <!-- course item -->
                <div class="col-md-2 course-item">
                    <div class="course-thumb">
                        <img src="vendor_visitante/img/course/1.jpg" alt="">
                        <div class="course-cat2">
                            <span><a href="#" class="disc">ALG. E EST. DADOS</a></span>
                        </div>
                    </div>
                </div>

                <!-- course item -->
                <div class="col-md-2 course-item">
                    <div class="course-thumb">
                        <img src="vendor_visitante/img/course/1.jpg" alt="">
                        <div class="course-cat2">
                            <span><a href="#" class="disc">PROG. OR. OBJETOS</a></span>
                        </div>
                    </div>
                </div>

                <!-- course item -->
                <div class="col-md-2 course-item">
                    <div class="course-thumb">
                        <img src="vendor_visitante/img/course/1.jpg" alt="">
                        <div class="course-cat2">
                            <span><a href="#" class="disc">ARQU.COMPUTADORES </a></span>
                        </div>
                    </div>
                </div>
                <br>

            </div>
            <div class="row ">
                <div class="course-thumb">
                    <div class="">
                        <span> IV SEMESTRE </span>
                    </div>
                </div>
                <!-- course item -->
                <div class="col-md-2 course-item">
                    <div class="course-thumb">
                        <img src="vendor_visitante/img/course/1.jpg" alt="">
                        <div class="course-cat2">
                            <span><a href="#" class="disc">PROB. ESTATÍSTICA</a></span>
                        </div>
                    </div>
                </div>
                <!-- course item -->
                <div class="col-md-2 course-item">
                    <div class="course-thumb">
                        <img src="vendor_visitante/img/course/1.jpg" alt="">
                        <div class="course-cat2">
                            <span><a href="#" class="disc">COMP.ALG. COMPLEX</a></span>
                        </div>
                    </div>
                </div>
                <!-- course item -->
                <div class="col-md-2 course-item">
                    <div class="course-thumb">
                        <img src="vendor_visitante/img/course/1.jpg" alt="">
                        <div class="course-cat2">
                            <span><a href="#" class="disc">SISTEMAS OPERATIVOS</a></span>
                        </div>
                    </div>
                </div>

                <!-- course item -->
                <div class="col-md-2 course-item">
                    <div class="course-thumb">
                        <img src="vendor_visitante/img/course/1.jpg" alt="">
                        <div class="course-cat2">
                            <span><a href="#" class="disc">LING FORMAIS E AUT.</a></span>
                        </div>
                    </div>
                </div>

                <!-- course item -->
                <div class="col-md-2 course-item">
                    <div class="course-thumb">
                        <img src="vendor_visitante/img/course/1.jpg" alt="">
                        <div class="course-cat2">
                            <span><a href="#" class="disc">INT. PESSOA MÁQUINA</a></span>
                        </div>
                    </div>
                </div>
                <br>

            </div>
			<div class="text-center">
                <h4>Ano acadêmico</h4><br>
				<ul class="site-pageination">
					<li><a href="/disciplinas1">1</a></li>
					<li><a href="/disciplinas2" class="active">2</a></li>
					<li><a href="/disciplinas3">3</a></li>
					<li><a href="/disciplinas4">4</a></li>
                    <li><a href="/disciplinas5">5</a></li>
					{{-- <li><a href="#"><i class="fa fa-angle-right"></i></a></li> --}}
				</ul>
			</div>
		</div>
	</section>
	<!-- Courses section end-->

@endsection
