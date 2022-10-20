    	<!-- Newsletter section -->
	<section class="newsletter-section">
		<div class="container">
			<div class="row">
				<div class="col-md-5 col-lg-7">
					<div class="section-title mb-md-0">
					<h3>BOLETIM DE NOTÍCIAS</h3>
					<p>Subscreva e receba em primeira mão as últimas novidades </p>
				</div>
				</div>
				<div class="col-md-7 col-lg-5">
					<form class="newsletter">
						<input type="text" placeholder="Informe o seu email">
						<button class="site-btn">SUBSCREVER</button>
					</form>
				</div>
			</div>
		</div>
	</section>
	<!-- Newsletter section end -->
    <!-- Footer section -->
    <footer class="footer-section">
        <div class="container footer-top">
            <div class="row">
                <!-- widget -->
                <div class="col-sm-6 col-lg-3 footer-widget">
                    <div class="about-widget">
                        <img src="vendor_visitante/img/logorodape2.png" alt="">
                        <p>CC-GUIDER é um Guião para os estudantes de Ciências da Computação, projetado para os estudantes da Faculdade de Ciências da Universidade Agostinho Neto, aonde os estudantes encontram uma orientação acadêmica </p>
                        <div class="social pt-1">
                            <a href=""><i class="fa fa-twitter-square"></i></a>
                            <a href=""><i class="fa fa-facebook"></i></a>
                            <a href=""><i class="fa fa-google-plus-square"></i></a>
                            <a href=""><i class="fa fa-linkedin-square"></i></a>
                            <a href=""><i class="fa fa-rss-square"></i></a>
                        </div>
                    </div>
                </div>
                <!-- widget -->
                <div class="col-sm-6 col-lg-3 footer-widget">
                    <h6 class="fw-title">Links do site</h6>
                    <div class="dobule-link">
                        <ul>
                            <li><a href="/">Início</a></li>
                            <li><a href="/sobre">Sobre nós</a></li>
                            <li><a href="/contactos">contactos</a></li>
                            <li><a href="/disciplinas1">Grelha Curricular</a></li>
                            <li><a href="/biblioteca_cc">Biblioteca CC</a></li>
                            <li><a href="/projetos">Projetos</a></li>
                        </ul>
                        <ul>

                            <li><a href="">Perfil</a></li>
                            <li><a href="">Garimpos </a></li>
                            <li><a href="">Eventos</a></li>
                            <li><a href="">Termos</a></li>
                            <li><a href="">Ajuda</a></li>
                        </ul>
                    </div>
                </div>

                <!-- widget -->
                <div class="col-sm-6 col-lg-3 footer-widget">
                    <h6 class="fw-title">PUBLICAÇÕES RECENTES</h6>

                    <ul class="recent-post">
                        @if(isset($publicacoes) and isset(Auth::user()->name))
                            @forelse($publicacoes as $pub)
                                @if($loop->index<2)
                                    <li>
                                        <p>{{Auth::user()->name}} publicou<br>{{$pub->texto}}</p>
                                        <span><i class="fa fa-clock-o"></i>{{$pub->created_at}}</span>
                                    </li>
                                @endif
                                @empty
                            @endforelse
                        @else
                        <p>CC-GUIDER <br> Publicações não disponíveis!!!</p>
                        <span><i class="fa fa-clock-o"></i>@php  @endphp</span>
                        @endif
                    </ul>
                    {{-- <ul class="recent-post">
                        <li>
                            <p>Professor Padoca Calado <br> publicou o projeto de Teoria da computação</p>
                            <span><i class="fa fa-clock-o"></i>24 Nov 2021</span>
                        </li>
                        <li>
                            <p>Professor Vicente Lopes<br> marcou o exame de SAD para próxima quarta-feira</p>
                            <span><i class="fa fa-clock-o"></i>24 Nov 2021</span>
                        </li>
                    </ul> --}}
                </div>
                <!-- widget -->
                <div class="col-sm-6 col-lg-3 footer-widget">
                    <h6 class="fw-title">CONTACTOS</h6>
                    <ul class="contact">
                        <li><p><i class="fa fa-map-marker"></i> Rua Direita da Camama e Rua do Estádio 11 de Novembro, Município de Belas, Luanda-Sul – Angola</p></li>
                        <li><p><i class="fa fa-phone"></i> (+244) 941 070 592 | 927 820 827</p></li>
                        <li><p><i class="fa fa-envelope"></i> cambllejunior@gmail.com -joaomacondo@gmail.com</p></li>
                        <li><p><i class="fa fa-clock-o"></i> Segunda à Sexta-feira, 08h00 - 15h00</p></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- copyright -->
        <div class="copyright">
            <div class="container">
                <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                Copyright &copy;<script>document.write(new Date().getFullYear());</script> Todos os direitos reservados | Departamento de Ciências da Computação FCUAN, <a href="https://bc-soft.com" target="_blank">CC-GUIDER</a>
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
            </div>
        </div>
    </footer>
    <!-- Footer section end-->