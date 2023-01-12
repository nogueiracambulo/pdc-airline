<!DOCTYPE html>
<html lang="en">
    <head>
        @include('layouts.visitante.header')
        @include('aeroporto/registar') 
        @include('percurso/registar') 
        @include('regalia/registar') 
        @include('tarifa/registar') 
        @include('frota/registar') 
        @include('voo/registar') 
    </head>

    <body>
        @include('layouts.visitante.info-topo')
        @include('layouts.visitante.menu-topo-principal')

        @yield('content')
        
        @include('layouts.visitante.footer')
        @include('layouts.visitante.javaScript')
    </body>
</html>
