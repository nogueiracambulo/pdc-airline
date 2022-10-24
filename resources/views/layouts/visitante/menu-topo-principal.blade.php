<nav class="nav-section">
        <div class="container" >             
            <div class="nav-right">
                @if(isset(auth()->user()->id))
                    <div class="user-block">
                        <img class="img-circle  "  src="/img/{{auth()->user()->fotoPerfil}}" alt="">
                    </div>
                    <div class="container">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle imgPerfil" style="color:white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    {{ Auth::user()->name }}
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <x-jet-dropdown-link href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                            this.closest('form').submit();">
                                            <h6 class="log_out">Terminar Sessão</h6>
                                        </x-jet-dropdown-link>
                                    </form>
                                </div>
                            </li>
                        </ul>
                    </div>
                @else
                    <div class="container">
                        <a class="a" href="/login">Login</a>
                    </div>
                @endif          
            </div>
        </div>
        <div class="container">
            <ul class="main-menu" >
                <li class="active"><a href="/">Início</a></li>
                <li><a href="/sobre">Sobre nós</a></li>
                <li><a href="/contactos">Contactos</a></li>
                <li><a href="/disciplinas1">Grelha Curricular</a></li>
                {{-- <li><a href="/biblioteca_cc">Biblioteca CC</a></li> --}}
                <li><a href="/projetos">Serviços</a></li>

                @if(isset(auth()->user()->id))
                    <li><a href="/profile">Perfil</a></li>
                @endif

            </ul>
            
        </div>
    </div>
</nav>