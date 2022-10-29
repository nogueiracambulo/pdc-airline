@extends('layouts.main')
@section('titulo', 'CCGUIDER - Biblioteca CC')
@section ('content')
<div class="container">
	<!-- Breadcrumb section -->
	<div class="site-breadcrumb">
		<div class="container">
			<a href="/"><i class="fa fa-home"></i> Início</a> <i class="fa fa-angle-right"></i>
			<a href="/biblioteca_cc"><span>Biblioteca CC </span></a>
            <i class="fa fa-angle-right"></i>
            <span>ANEXOS</span>
		</div>
	</div>
	<!-- Breadcrumb section end -->

    <!-- Blog page section  -->
    <section class="blog-page-section spad pt-0">
        <div class="row">
            <div class="col-lg-9 post-list">
                <div class="container">
                    <div class="row ">
                        <div class="course-thumb">
                            <div class="">
                                <span> MOTIVACIONAL </span>
                            </div>
                        </div>
                        <!-- course item -->
                        <div class="col-md-2 course-item">
                            <div class="course-thumb">
                                <img src="vendor_visitante/img/course/1.jpg" alt="">
                                <div class="course-cat2">
                                    <span><a href="#" class="disc">ÁLGEBRA LINEAR I</a></span>
                                </div>
                            </div>
                        </div>
                        <!-- course item -->
                        <div class="col-md-2 course-item">
                            <div class="course-thumb">
                                <img src="vendor_visitante/img/course/1.jpg" alt="">
                                <div class="course-cat2">
                                    <span><a href="#" class="disc">ANÁL. MATEMÁTICA I</a></span>
                                </div>
                            </div>
                        </div>
                        <!-- course item -->
                        <div class="col-md-2 course-item">
                            <div class="course-thumb">
                                <img src="vendor_visitante/img/course/1.jpg" alt="">
                                <div class="course-cat2">
                                    <span><a href="#" class="disc">INGLÊS TÉCNICO</a></span>
                                </div>
                            </div>
                        </div>

                        <!-- course item -->
                        <div class="col-md-2 course-item">
                            <div class="course-thumb">
                                <img src="vendor_visitante/img/course/1.jpg" alt="">
                                <div class="course-cat2">
                                    <span><a href="#" class="disc">INT À INFORMÁTICA</a></span>
                                </div>
                            </div>
                        </div>

                        <!-- course item -->
                        <div class="col-md-2 course-item">
                            <div class="course-thumb">
                                <img src="vendor_visitante/img/course/1.jpg" alt="">
                                <div class="course-cat2">
                                    <span><a href="#" class="disc">LÓG.PROGRAMAÇÃO</a></span>
                                </div>
                            </div>
                        </div>
                        <br>

                    </div>
                    <div class="row ">
                        <div class="course-thumb">
                            <div class="">
                                <span> CALENDÁRIOS </span>
                            </div>
                        </div>
                        <!-- course item -->
                        <div class="col-md-2 course-item">
                            <div class="course-thumb">
                                <img src="vendor_visitante/img/course/1.jpg" alt="">
                                <div class="course-cat2">
                                    <span><a href="#" class="disc">ÁLGEBRA LINEAR II</a></span>
                                </div>
                            </div>
                        </div>
                        <!-- course item -->
                        <div class="col-md-2 course-item">
                            <div class="course-thumb">
                                <img src="vendor_visitante/img/course/1.jpg" alt="">
                                <div class="course-cat2">
                                    <span><a href="#" class="disc">ANÁL.MATEMÁTICA II</a></span>
                                </div>
                            </div>
                        </div>
                        <!-- course item -->
                        <div class="col-md-2 course-item">
                            <div class="course-thumb">
                                <img src="vendor_visitante/img/course/1.jpg" alt="">
                                <div class="course-cat2">
                                    <span><a href="#" class="disc">EST. DISCRETAS</a></span>
                                </div>
                            </div>
                        </div>

                        <!-- course item -->
                        <div class="col-md-2 course-item">
                            <div class="course-thumb">
                                <img src="vendor_visitante/img/course/1.jpg" alt="">
                                <div class="course-cat2">
                                    <span><a href="#" class="disc">FUND.PROGRAMAÇÃO</a></span>
                                </div>
                            </div>
                        </div>

                        <!-- course item -->
                        <div class="col-md-2 course-item">
                            <div class="course-thumb">
                                <img src="vendor_visitante/img/course/1.jpg" alt="">
                                <div class="course-cat2">
                                    <span><a href="#" class="disc">PROG. IMPERATIVA</a></span>
                                </div>
                            </div>
                        </div>
                        <br>

                    </div>


                    <div class="text-center">
                        <h4>Ano acadêmico</h4><br>
                        <ul class="site-pageination">
                            <li><a href="/1_ano" >1</a></li>
                            <li><a href="/2_ano">2</a></li>
                            <li><a href="/3_ano">3</a></li>
                            <li><a href="/4_ano">4</a></li>
                            <li><a href="/5_ano">5</a></li>
                            <li><a href="/anexos"  class="active">Anexos</a></li>
                            {{-- <li><a href="#"><i class="fa fa-angle-right"></i></a></li> --}}
                        </ul>
                    </div>
                    <div class="text-center" >
                        <a href="#" style="color: rgb(228, 97, 21)"  class="text-center " role="button" aria-pressed="false" ><i class="fa fa-plus-circle fa-4x"></i></a>
                        <br><a href="#" style="color: rgb(126, 105, 94)" class="text-center " role="button" aria-pressed="false">Registar conteúdo</i></a><br>
                    </div>

                </div>

            </div>
            <div class="col-md-3 float-right">
                <div class="widget">
                    <form class="search-widget">
                        <input type="search" class="form-control form-control-sm" placeholder="pesquisar tema ou disciplina ">
                        <button><i class="ti-search"></i></button>
                    </form>
                </div>

                <div class="widget">
                    <h5 class="widget-title">Conteúdos Recentes</h5>
                    <div class="recent-post-widget">

                        <!-- recent post -->
                        <div class="rp-item">
                            <div class="rp-thumb set-bg" style="background-image: url('vendor_visitante/img/blog/recent-post/1.jpg')"></div>
                            <div class="rp-content">
                                <h6>Snackable study:How to break up your master's degree</h6>
                                <p><i class="fa fa-clock-o"></i> 24 Mar 2018</p>
                            </div>
                        </div>

                        <!-- recent post -->
                        <div class="rp-item">
                            <div class="rp-thumb set-bg" style="background-image: url('vendor_visitante/img/blog/recent-post/2.jpg')"></div>
                            <div class="rp-content">
                                <h6>Op en University plans major ts to number of staff</h6>
                                <p><i class="fa fa-clock-o"></i> 24 Mar 2018</p>
                            </div>
                        </div>

                        <!-- recent post -->
                        <div class="rp-item">
                            <div class="rp-thumb set-bg" style="background-image: url('vendor_visitante/img/blog/recent-post/3.jpg')"></div>
                            <div class="rp-content">
                                <h6>My postgrad: ‘I worked on essays as giraffes walked by’</h6>
                                <p><i class="fa fa-clock-o"></i> 24 Mar 2018</p>
                            </div>
                        </div>

                        <!-- recent post -->
                        <div class="rp-item">
                            <div class="rp-thumb set-bg" style="background-image: url('vendor_visitante/img/blog/recent-post/4.jpg')"></div>
                            <div class="rp-content">
                                <h6>How to use the Guardian University Guide</h6>
                                <p><i class="fa fa-clock-o"></i> 24 Mar 2018</p>
                            </div>
                        </div>

                        <!-- recent post -->
                        <div class="rp-item">
                            <div class="rp-thumb set-bg" style="background-image: url('vendor_visitante/img/blog/recent-post/1.jpg')"></div>
                            <div class="rp-content">
                                <h6>Snackable study:How to break up your master's degree</h6>
                                <p><i class="fa fa-clock-o"></i> 24 Mar 2018</p>
                            </div>
                        </div>

                        <!-- recent post -->
                        <div class="rp-item">
                            <div class="rp-thumb set-bg" style="background-image: url('vendor_visitante/img/blog/recent-post/2.jpg')"></div>
                            <div class="rp-content">
                                <h6>Op en University plans major ts to number of staff</h6>
                                <p><i class="fa fa-clock-o"></i> 24 Mar 2018</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Blog page section end -->
@endsection
