@extends('layouts.painel.principal')

@section('content')
    <div class="row container-fluid">
        <div class="container text-center">
            <img width="800px" src="/template_admin_lte/dist/img/2/logo-preto.png" alt="" class="" style="opacity: .8">
        </div>
        <div class="col-md-4 ">
            <br>
            <!-- small box -->
            <div class="small-box bg-info">
                <div class="inner">
                    <h3>VOOS</h3>
                    <p>Voos disponíveis</p>
                </div>
                <div class="icon">
                    <i class="fas fa-plane"></i>
                </div>
                <a href="/voos/listar" class="small-box-footer"> Aceder <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <div class="col-md-4 ">
            <br>
            <!-- small box -->
            <div class="small-box bg-info">
                <div class="inner">
                    <h3>RESERVAS</h3>
                    <p>Gerir reservas</p>
                </div>
                <div class="icon">
                    <i class="fas fa-ticket-alt"></i>
                </div>
                <a href="#" class="small-box-footer"> Aceder <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <div class="col-md-4 ">
            <br>
            <!-- small box -->
            <div class="small-box bg-info">
                <div class="inner">
                    <h3>PDC CLUB</h3>
                    <p>Gerir conta PDC</p>
                </div>
                <div class="icon">
                    <i class="fas fa-users"></i>
                </div>
                <a href="#" class="small-box-footer"> Aceder <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
      
    </div>


    
@endsection