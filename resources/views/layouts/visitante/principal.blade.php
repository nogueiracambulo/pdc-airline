<!DOCTYPE html>
<html lang="en">
    <head>
        @include('layouts.visitante.header')
    </head>

    <body>
        @include('layouts.visitante.info-topo')
        @include('layouts.visitante.menu-topo-principal')

        @yield('content')
        
        @include('layouts.visitante.footer')
        @include('layouts.visitante.javaScript')
    </body>
</html>
