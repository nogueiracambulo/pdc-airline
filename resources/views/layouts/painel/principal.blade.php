<!DOCTYPE html>
<html lang="en">
   
<!-- Cabeçalho -->
@include('layouts.painel.header')
{{-- @include('biblioteca_cc/modal_Conteudo/registarConteudo') --}}
{{-- @include('biblioteca_cc/modal_Disciplina/registarDisciplina') --}}

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="/template_Admin_lte/dist/img/graduation.png" alt="STUDENT GUIDER"
                height="80" width="80">
        </div>

    

      

        <!-- Menu topo -->
        {{-- @include('layouts.painel.menu-topo') --}}
        @include('navigation-menu')
        <!-- Menu Lateral Esquerdo -->
        @include('layouts.painel.menu-lateral-esquerdo')

        <!-- Conteúdo principal das Páginas -->
        <div class="content-wrapper">
            <!-- Cabaçalho dos Conteúdos-->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0"></h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Início</a></li>
                                <li class="breadcrumb-item active">Estudante</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            @yield('content')
            @yield('esquerda')
     
            @yield('centro')
           
        </div>

         <!-- Rodapé -->
        @include('layouts.painel.footer')
        
        <!-- Menu lateral Direito -->
        @include('layouts.painel.menu-lateral-direito')
                
     
    </div>
    <!-- Inclusão de arquivos JavaScript -->
    @include('layouts.painel.javascript')
</body>

</html>
