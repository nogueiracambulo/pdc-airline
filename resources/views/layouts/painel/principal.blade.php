<!DOCTYPE html>
<html lang="en">
   
<!-- Cabeçalho -->
{{-- INCLUSÃO DE MODALS QUE SÃO CHAMADAS EM TODAS AS PAGINAS --}}
@include('layouts.painel.header')
@include('admin/modal/acesso/RegistarUtilizador')
@include('admin/modal/acesso/RegistarPermissao')
@include('admin/modal/acesso/RegistarFuncao')
@include('admin/modal/acesso/UserEliminar')
@include('frota/definirCabine') 
@include('aeroporto/registar') 
@include('percurso/registar') 
@include('anuncio/registar')
@include('regalia/registar') 
@include('tarifa/registar') 
@include('frota/registar') 
@include('voo/registar')
@include('membro/sobrePDC')

<body class="hold-transition sidebar-mini layout-fixed" >
   
        <div class="wrapper">
            <!-- Preloader -->
            <div class="preloader flex-column justify-content-center align-items-center">
                <img class="animation__shake" src="/template_Admin_lte/dist/img/2/preload.png" alt="pdc-airline"
                    height="80" width="80">
            </div>
    
            <!-- Menu topo -->
            @include('layouts.painel.menu-topo')

            <!-- Menu Lateral Esquerdo -->
            @include('layouts.painel.menu-lateral-esquerdo')
            <!-- Conteúdo principal das Páginas -->
            <div class="content-wrapper">
                @yield('content')
            </div>
    
            
            
            <!-- Menu lateral Direito -->
            {{-- @include('layouts.painel.menu-lateral-direito') --}}
        </div>

        </div>
       
          
    </div>

    @include('layouts.painel.footer')
    <!-- Inclusão de arquivos JavaScript -->
    @include('layouts.painel.javascript')
    @include('sweetalert::alert')
</body>

</html>
