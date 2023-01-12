


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
                           <i class="fas fa-angle-left right"></i>
                       </p>
                   </a>
                   <ul class="nav nav-treeview">
                     
                       
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
                   </ul>
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
                              <p> Ver membros</p>
                          </a>
                      </li>
                      <hr>
                  </ul>

              </li>
              {{-- @endcan1 --}}
             </ul>
        </nav>
        @else
        
        

        @endisset

        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
