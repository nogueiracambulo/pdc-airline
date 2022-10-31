<!DOCTYPE html>
<html lang="en">
   
<!-- Cabeçalho -->
@include('layouts.painel.header')
@include('admin/modal/acesso/RegistarUtilizador')
@include('admin/modal/acesso/RegistarPermissao')
@include('admin/modal/acesso/RegistarFuncao')
@include('admin/modal/AnoLectivoRegistar')
@include('admin/modal/turmaRegistar')
@include('admin/modal/AnoLectivoSelecionar')
@include('biblioteca/modal_Disciplina/registarDisciplina')
{{-- @include('biblioteca/modal_Conteudo/registarConteudo') --}}


<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="/template_Admin_lte/dist/img/graduation.png" alt="STUDENT GUIDER"
                height="80" width="80">
        </div>

    

      

        <!-- Menu topo -->
        @include('layouts.painel.menu-topo')
        {{-- @include('navigation-menu') --}}
        
        <!-- Menu Lateral Esquerdo -->
        @include('layouts.painel.menu-lateral-esquerdo')

        <!-- Conteúdo principal das Páginas -->
        <div class="content-wrapper">
    
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
    @include('sweetalert::alert')
</body>

</html>
