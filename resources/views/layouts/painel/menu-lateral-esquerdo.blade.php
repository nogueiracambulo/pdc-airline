


<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-light elevation-4"  >
    <div class="sidebar">
        <div class="col-3">
            <!-- Brand Logo -->
            <a href="/dashboard" title="Área restrita"class="brand-link">
                &nbsp; &nbsp;  <img width="170px" src="/template_admin_lte/dist/img/2/logo-preto.png" alt="" class="" style="opacity: .8">
            </a>
        </div>

        <!-- Sidebar Menu -->
        @isset(Auth::user()->name)
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                {{-- @can('add_role') --}}
                 <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fa fa-cog"></i>
                        <p>
                            Gestão administrativa
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                      
                        
                        <li class="nav-item">
                            <a href="/admin/listar_administradores" class="nav-link">
                                <i class="fa fa-user-lock nav-icon"></i>
                                <p>Administradores</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/admin/listar_utilizadores" class="nav-link">
                                <i class="fas fa fa-users nav-icon"></i>
                                <p>Todos Utilizadores</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/admin/listar_funcoes" class="nav-link">
                                <i class="fas fa-list nav-icon"></i>
                                <p>Funções</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/admin/listar_permissoes" class="nav-link">
                                <i class="fas fa-lock-open nav-icon"></i>
                                <p>Permissões</p>
                            </a>
                        </li><hr>
                    </ul>
                </li>
                {{-- @endcan --}}

                {{-- @can('add_role') --}}
                 <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-plane"></i>
                        <p>
                            Voos
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                      
                        
                        <li class="nav-item">
                            <a href="/voos/listar" class="nav-link">
                                <i class="fas fa-list nav-icon"></i>
                                <p>Voos disponíveis</p>
                            </a>
                        </li>
                     
                        <li class="nav-item">
                            <a href="/frota/listar" class="nav-link">
                                <i class="fa fa-list nav-icon"></i>
                                <p>Frotas (Aviões)</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/tarifas/listar" class="nav-link">
                                <i class="fa fa-list nav-icon"></i>
                                <p>Tarifas</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/regalias/listar" class="nav-link">
                                <i class="fa fa-list nav-icon"></i>
                                <p>Regalias</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/percursos/listar" class="nav-link">
                                <i class="fas fa-route nav-icon"></i>
                                <p>Percursos</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/aeroportos/listar" class="nav-link">
                                <i class="fas fa fa-building nav-icon"></i>
                                <p>Aeroportos (Destinos)</p>
                            </a>
                        </li>
                        <hr>
                    </ul>
                </li>
                {{-- @endcan --}}

                {{-- @can('add_role') --}}
                <li class="nav-item">
                   <a href="#" class="nav-link">
                       <i class="nav-icon fas fa-ticket-alt"></i>
                       <p>
                           Reservas
                           {{-- <i class="fas fa-angle-left right"></i> --}}
                       </p>
                   </a>
                   {{-- <ul class="nav nav-treeview">
                     
                       
                       <li class="nav-item">
                           <a href="/admin/listar_administradores" class="nav-link">
                               <i class="fa fa-plus nav-icon"></i>
                               <p>Reservar voo</p>
                           </a>
                       </li>
                       <li class="nav-item">
                        <a href="/admin/listar_administradores" class="nav-link">
                            <i class="fa fa-edit nav-icon"></i>
                            <p>Alterar reserva</p>
                        </a>
                       </li>
                       <li class="nav-item">
                           <a href="/admin/listar_utilizadores" class="nav-link">
                               <i class="fas fa fa-list nav-icon"></i>
                               <p>Ver reservas</p>
                           </a>
                       </li>
                       <li class="nav-item">
                        <a href="/admin/listar_utilizadores" class="nav-link">
                            <i class="fas fa fa-money-bill-alt nav-icon"></i>
                            <p>Reembolso</p>
                        </a>
                    </li>
                       <hr>
                   </ul> --}}
               </li>
               {{-- @endcan --}}

               {{-- @can('add_role') --}}
               <li class="nav-item">
                  <a href="#" class="nav-link">
                      <i class="nav-icon fas fa-users"></i>
                      <p>
                          Membros PDC
                          <i class="fas fa-angle-left right"></i>
                      </p>
                  </a>
                  <ul class="nav nav-treeview">
                      <li class="nav-item">
                          <a href="/membros/listar" class="nav-link">
                              <i class="fa fa-list nav-icon"></i>
                              <p> Informação de membro</p>
                          </a>
                      </li>
                      <hr>
                  </ul>

              </li>
              {{-- @endcan1 --}}
             </ul>
        </nav>
        @else

        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                 <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fa fa-plane"></i>
                        <p>
                            Voos
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/admin/listar_administradores" class="nav-link">
                                <i class="fa fa-eye nav-icon"></i>
                                <p>Ver estado do voo</p>
                            </a>
                        </li><hr>
                    </ul>
                </li>
                <li class="nav-item">
                   <a href="#" class="nav-link">
                       <i class="nav-icon fas fa-ticket-alt"></i>
                       <p>
                           Reservas
                           <i class="fas fa-angle-left right"></i>
                       </p>
                   </a>
                   <ul class="nav nav-treeview">  
                       <li class="nav-item">
                           <a href="/reservas/procurarMinhas" class="nav-link">
                               <i class="fa fa-list nav-icon"></i>
                               <p>Minhas reservas</p>
                           </a>
                       </li>
                       <li class="nav-item">
                        <a href="/" class="nav-link">
                            <i class="fa fa-plus-circle nav-icon"></i>
                            <p>Nova reserva</p>
                        </a>
                       </li><hr>
                   </ul> 
               </li>
               <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            Membros PDC
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="#" class="nav-link" data-toggle="modal" data-target="#Modal_sobre_pdcClub">
                                <i class="fa fa-list nav-icon"></i>
                                <p> Sobre PDC-Club</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/membros/registo" class="nav-link">
                                <i class="fas fa-sign-out-alt nav-icon"></i>
                                <p> Registar-se</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/login" class="nav-link">
                                <i class="fas fa-sign-in-alt nav-icon"></i>
                                <p> Iniciar sessão</p>
                            </a>
                        </li>
                        <hr>
                    </ul>
                </li>

             </ul>
        </nav>
        {{-- <div class="row ">  
            <div class="col-md-12">
                <br>
                <!-- small box -->
                <div class="small-box bg-info">
                    <div class="inner">
                        <h3>VOOS</h3>
                        <p>Saiba o estado do seu voo</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-plane"></i>
                    </div>
                    <a href="/voos/listar" class="small-box-footer"> Aceder <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <div class="col-md-12 ">
            
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
            <div class="col-md-12">
             
                <!-- small box -->
                <div class="small-box bg-info">
                    <div class="inner">
                        <h3>PDC CLUB</h3>
                        <p>Saber mais sobre o PDC CLUB</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <a href="#" class="small-box-footer"> Aceder <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
        </div> --}}
        
        @endisset
    </div>
</aside>
