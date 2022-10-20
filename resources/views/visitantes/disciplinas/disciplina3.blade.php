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


			<span>  3º ANO</span> <hr>
			<div class="row ">
                <div class="course-thumb">
                    <div class="">
                        <span> V SEMESTRE </span>
                    </div>
                </div>
                <!-- course item -->
                <div class="col-md-2 course-item">
                    <div class="course-thumb">
                        <img src="vendor_visitante/img/course/1.jpg" alt="">
                        <div class="course-cat2">
                            <span><a href="#" class="disc">REDES DE COMPUT</a></span>
                        </div>
                    </div>
                </div>
                <!-- course item -->
                <div class="col-md-2 course-item">
                    <div class="course-thumb">
                        <img src="vendor_visitante/img/course/1.jpg" alt="">
                        <div class="course-cat2">
                            <span><a href="#" class="disc">FUND. BASE DE DADOS</a></span>
                        </div>
                    </div>
                </div>
                <!-- course item -->
                <div class="col-md-2 course-item">
                    <div class="course-thumb">
                        <img src="vendor_visitante/img/course/1.jpg" alt="">
                        <div class="course-cat2">
                            <span><a href="#" class="disc">PROG. NÃO PROCED</a></span>
                        </div>
                    </div>
                </div>

                <!-- course item -->
                <div class="col-md-2 course-item">
                    <div class="course-thumb">
                        <img src="vendor_visitante/img/course/1.jpg" alt="">
                        <div class="course-cat2">
                            <span><a href="#" class="disc">GEST. SOC. ORG</a></span>
                        </div>
                    </div>
                </div>

                <!-- course item -->
                <div class="col-md-2 course-item">
                    <div class="course-thumb">
                        <img src="vendor_visitante/img/course/1.jpg" alt="">
                        <div class="course-cat2">
                            <span><a href="#" class="disc">MET. INV. CIENTÍFICA</a></span>
                        </div>
                    </div>
                </div>
                <br>

            </div>
            <div class="row ">
                <div class="course-thumb">
                    <div class="">
                        <span> VI SEMESTRE </span>
                    </div>
                </div>
                <!-- course item -->
                <div class="col-md-2 course-item">
                    <div class="course-thumb">
                        <img src="vendor_visitante/img/course/1.jpg" alt="">
                        <div class="course-cat2">
                            <span><a href="#" class="disc">TEOR. COMPUTAÇÃO</a></span>
                        </div>
                    </div>
                </div>
                <!-- course item -->
                <div class="col-md-2 course-item">
                    <div class="course-thumb">
                        <img src="vendor_visitante/img/course/1.jpg" alt="">
                        <div class="course-cat2">
                            <span><a href="#" class="disc">TECN. BASE DE DADOS</a></span>
                        </div>
                    </div>
                </div>
                <!-- course item -->
                <div class="col-md-2 course-item">
                    <div class="course-thumb">
                        <img src="vendor_visitante/img/course/1.jpg" alt="">
                        <div class="course-cat2">
                            <span><a href="#" class="disc">CONF. GEST. REDES</a></span>
                        </div>
                    </div>
                </div>

                <!-- course item -->
                <div class="col-md-2 course-item">
                    <div class="course-thumb">
                        <img src="vendor_visitante/img/course/1.jpg" alt="">
                        <div class="course-cat2">
                            <span><a href="#" class="disc">ANAL. DES. SISTEMAS</a></span>
                        </div>
                    </div>
                </div>

                <!-- course item -->
                <div class="col-md-2 course-item">
                    <div class="course-thumb">
                        <img src="vendor_visitante/img/course/1.jpg" alt="">
                        <div class="course-cat2">
                            <span><a href="#" class="disc">COMPUT. GRÁFICA</a></span>
                        </div>
                    </div>
                </div>
                <br>

            </div>
			<div class="text-center">
                <h4>Ano acadêmico</h4><br>
				<ul class="site-pageination">
					<li><a href="/disciplinas1" >1</a></li>
					<li><a href="/disciplinas2">2</a></li>
					<li><a href="/disciplinas3" class="active">3</a></li>
					<li><a href="/disciplinas4">4</a></li>
                    <li><a href="/disciplinas5">5</a></li>
					{{-- <li><a href="#"><i class="fa fa-angle-right"></i></a></li> --}}
				</ul>
			</div>
		</div>
	</section>
	<!-- Courses section end-->

@endsection
