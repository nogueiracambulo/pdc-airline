@extends('layouts.painel.principal')
{{-- @extends('layouts.main') --}}
@section('titulo', 'MULONGI - Perfil')

@section ('content')
	<!-- Breadcrumb section -->
	<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Perfil do Utilizador</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="/">Inicio</a></li>
                    <li class="breadcrumb-item active">Perfil</li>
                </ol>
            </div>
        </div>
    </div>
  </section>
	<!-- Breadcrumb section end -->
  <div class="container">
        <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">

            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                  
                  <img class="profile-user-img img-circle"
                        src={{Auth::user()->profile_photo_url}}
                        alt="User profile picture">
                </div>

                <h3 class="profile-username text-center">{{Auth::user()->name}}</h3>

                <p class="text-muted text-center">{{Auth::user()->email}}</p>

                <ul class="list-group list-group-unbordered mb-3">
                  {{-- <li class="list-group-item">
                    <b>Seguidores</b> <a class="float-right">1,322</a>
                  </li> --}}
                </ul>
                <div class="text-center">
                    <button href="#" class="btn btn-outline-primary rounded-pill"><b>Enviar mensagem</b></button>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <!-- About Me Box -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Sobre mim</h3>
              </div>
              <!-- /.card-header -->
              <div class=" card-body container">
                <strong><i class="fa fa-calendar"></i> Data de Nascimento</strong><br>
                <p class="text-muted">{{ auth()->user()->dataNascimento }}</p>

                <strong><i class="fa fa-venus-mars"></i>Género</strong>
                <p class="text-muted">{{ auth()->user()->genero }}</p>

                <strong><i class="fa fa-map-marker"></i> Morada</strong>
                <p class="text-muted">{{ auth()->user()->morada }}</p>

                <strong><i class="fa fa-graduation-cap"></i>Ano Acadêmico</strong>
                <p class="text-muted">{{ auth()->user()->nivel_academico }}</p>


                <strong><i class="fa fa-password"></i> Número mecanográfico</strong>
                <p class="text-muted">{{ auth()->user()->habilidades }}</p>

                <strong><i class="fa fa-file"></i> Citações</strong>
                <p class="text-muted">{{ auth()->user()->citacoes }}</p>
            </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
          <div class="col-md-9">
            <div class="card">
              <div class="card-header p-2">
                <ul class="nav nav-pills">
                  <li class="nav-item"><a class="nav-link active" href="#timeline" data-toggle="tab">Notificações</a></li>
                  <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Simulação de Histórico</a></li>
                </ul>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
                 
                  <!-- /.tab-pane -->
                  <div class="active tab-pane" id="timeline">
                    <!-- The timeline -->
                    <div class="timeline timeline-inverse">
                  
                      <!-- NOTIFICAÇÃO SOBRE PEDIDO DE ADESÃO A UM GARIMPO CRIADO PELO UTILIZADOR QUE ESTÁ LOGADO -->
                      <!-- timeline item -->
                      <div>
                        @isset($pedidos)
                        <i class="fas fa-envelope bg-primary"></i>
                          @foreach ($pedidos as $pedido)
                            <div class="timeline-item">
                              <span class="time"><i class="far fa-clock"></i>{{$pedido->created_at}}</span>
                              <h3 class="timeline-header"><a href="#">{{$pedido->name}}</a> Enviou um pedido de adesão</h3>
                              <div class="timeline-body">
                                <div class="user-block">
                                  <img class="img-circle img-bordered-sm" src={{asset('template_Admin_lte/dist/img/user1-128x128.jpg')}} alt="user image">
                                  <span class="username"><a href="#">{{$pedido->name}}</a></span>
                                  <span class="description">Enviado aos {{$pedido->created_at}}</span>
                                </div>
                                <div> 
                                  <p><br><br>Pretende aderir ao garimpo de <b>{{$pedido->nome}}</b></p>
                                </div>
                              </div>
                              
                              <div class="timeline-footer">
                                <a href="/aceitar/pedido/{{$pedido->pedidoId}}/{{$pedido->inscritos}}" class="btn btn-success btn-sm"><i class="far fa-thumbs-up mr-1"></i> Aceitar</a>
                                <a href="/eliminar/pedido/{{$pedido->pedidoId}}" class="btn btn-danger btn-sm"><i class="fas fa-ban"></i> Rejeitar</a>
                              </div>
                            </div><br>
                          @endforeach
                        @endisset
                      </div>
                      <!-- END timeline item -->

                      <!-- timeline item -->
                      <div>
                        <i class="fas fa-user bg-info"></i>

                        <div class="timeline-item">
                          <span class="time"><i class="far fa-clock"></i> 5 mins ago</span>

                          <h3 class="timeline-header border-0"><a href="#">Sarah Young</a> accepted your friend request
                          </h3>
                        </div>
                      </div>
                      <!-- END timeline item -->
                      <!-- timeline item -->
                      <div>
                        <i class="fas fa-comments bg-warning"></i>

                        <div class="timeline-item">
                          <span class="time"><i class="far fa-clock"></i> 27 mins ago</span>

                          <h3 class="timeline-header"><a href="#">Jay White</a> commented on your post</h3>

                          <div class="timeline-body">
                            Take me to your leader!
                            Switzerland is small and neutral!
                            We are more like Germany, ambitious and misunderstood!
                          </div>
                          <div class="timeline-footer">
                            <a href="#" class="btn btn-warning btn-flat btn-sm">View comment</a>
                          </div>
                        </div>
                      </div>
                      <!-- END timeline item -->
                   
                      <!-- timeline item -->
                      <div>
                        <i class="far fa-clock bg-gray"></i>

                        <div class="timeline-item">
                          <span class="time"><i class="far fa-clock"></i> 2 days ago</span>

                          <h3 class="timeline-header"><a href="#">Mina Lee</a> uploaded new photos</h3>

                          <div class="timeline-body">
                             <!-- Post -->
                    <div class="post">
                      <div class="user-block">
                        <img class="img-circle img-bordered-sm" src={{asset('template_Admin_lte/dist/img/user1-128x128.jpg')}} alt="user image">
                        <span class="username">
                          <a href="#">Jonathan Burke Jr.</a>
                          <a href="#" class="float-right btn-tool"><i class="fas fa-times"></i></a>
                        </span>
                        <span class="description">Shared publicly - 7:30 PM today</span>
                      </div>
                      <!-- /.user-block -->
                      <p>
                        Lorem ipsum represents a long-held tradition for designers,
                        typographers and the like. Some people hate it and argue for
                        its demise, but others ignore the hate as they create awesome
                        tools to help create filler text for everyone from bacon lovers
                        to Charlie Sheen fans.
                      </p>

                      <p>
                        <a href="#" class="link-black text-sm mr-2"><i class="fas fa-share mr-1"></i> Share</a>
                        <a href="#" class="link-black text-sm"><i class="far fa-thumbs-up mr-1"></i> Like</a>
                        <span class="float-right">
                          <a href="#" class="link-black text-sm">
                            <i class="far fa-comments mr-1"></i> Comments (5)
                          </a>
                        </span>
                      </p>

                      <input class="form-control form-control-sm" type="text" placeholder="Type a comment">
                    </div>
                    <!-- /.post -->
                          </div>
                        </div>
                      </div>
                      <!-- END timeline item -->
                      <div>
                        <i class="far fa-clock bg-gray"></i>
                      </div>
                    </div>
                  </div>
                  <!-- /.tab-pane -->

                  <div class="tab-pane" id="settings">
                    <form class="form-horizontal">
                      <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-10">
                          <input type="email" class="form-control" id="inputName" placeholder="Name">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                          <input type="email" class="form-control" id="inputEmail" placeholder="Email">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputName2" class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputName2" placeholder="Name">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputExperience" class="col-sm-2 col-form-label">Experience</label>
                        <div class="col-sm-10">
                          <textarea class="form-control" id="inputExperience" placeholder="Experience"></textarea>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputSkills" class="col-sm-2 col-form-label">Skills</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputSkills" placeholder="Skills">
                        </div>
                      </div>
                      <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                          <div class="checkbox">
                            <label>
                              <input type="checkbox"> I agree to the <a href="#">terms and conditions</a>
                            </label>
                          </div>
                        </div>
                      </div>
                      <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                          <input type="button" data-toggle="modal" data-target="#Modal_Registar_nota" value="Adicionar" class="btn btn-danger">
                        </div>
                      </div>
                    </form>
                  </div>
                  <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
      
  </div>
@endsection
