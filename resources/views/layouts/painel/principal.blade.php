<!DOCTYPE html>
<html lang="en">
   
<!-- Cabeçalho -->
{{-- INCLUSÃO DE MODALS QUE SÃO CHAMADAS EM TODAS AS PAGINAS --}}
@include('layouts.painel.header')
@include('admin/modal/acesso/RegistarUtilizador')
@include('admin/modal/acesso/RegistarPermissao')
@include('admin/modal/acesso/RegistarFuncao')
@include('admin/modal/AnoLectivoRegistar')
@include('admin/modal/acesso/UserEliminar') 

<body class="hold-transition sidebar-mini layout-fixed" >
    @include('layouts.painel.menu-topo')
    {{-- <div class="masthead" style="background-image: url('/template_admin_lte/dist/img/2/mulongi-fundo.jpg');" >
        <div class="color-overlay d-flex justify-content-center align-items-center"> --}}
            <div class="wrapper">
                <!-- Preloader -->
                <div class="preloader flex-column justify-content-center align-items-center">
                    <img class="animation__shake" src="/template_Admin_lte/dist/img/2/preload.png" alt="pdc-airline"
                        height="80" width="80">
                </div>
        
                <!-- Menu topo -->
                
                <!-- Menu Lateral Esquerdo -->
                @include('layouts.painel.menu-lateral-esquerdo')
        
                <!-- Conteúdo principal das Páginas -->
                <div class="content-wrapper">
                    @yield('content')
                </div>
        
              
                
                <!-- Menu lateral Direito -->
                @include('layouts.painel.menu-lateral-direito')
            {{-- </div>

        </div> --}}
           <!-- Rodapé -->
          
    </div>

    @include('layouts.painel.footer')
    <!-- Inclusão de arquivos JavaScript -->
    @include('layouts.painel.javascript')
    @include('sweetalert::alert')
</body>

</html>
