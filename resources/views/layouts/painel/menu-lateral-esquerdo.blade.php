
@include('layouts/Garimpo/modal_Garimpo/registarGarimpoChat')

<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <div class="sidebar">
        <div class="col-3">
            <!-- Brand Logo -->
            <a href="/dashboard" class="brand-link">
                &nbsp; &nbsp;  <img width="170px" src="/template_admin_lte/dist/img/2/actual.png" alt="" class="" style="opacity: .8">
            </a>
        </div>
        <!-- Settings Dropdown -->

        <!-- Sidebar user panel (optional) -->
        {{-- <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src={{ Auth::user()->profile_photo_url }} class="img-circle elevation-2" alt="Foto perfil">
            </div>
            <div class="info">
                <a href="/perfil" class="d-block">{{ Auth::user()->name }}</a>
            </div>
        </div> --}}

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               
                <li class="nav-item ">
                    <a href="#" class="nav-link ">
                    
                        <i class="nav-icon fa fa-folder-open"></i>
                        <p>
                            Biblioteca
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">

                        <li class="nav-item">
                            <a href="/conteudos/inicio" 
                                class="nav-link">
                                <i class="fas fa fa-list nav-icon"></i>
                                <p>Aceder aos conteúdos</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="#"  data-toggle="modal" data-target="#Modal_Registar_Disciplina" class="nav-link">
                                <i class="fas fa-plus-circle nav-icon"></i>
                                <p>Inserir disciplina</p>
                            </a>
                        </li>
                        <hr>
                    </ul>

                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="#" data-toggle="modal" data-target="#Modal_Registar_Conteudo"
                                class="nav-link">
                                <i class="fas fa fa-search nav-icon"></i>
                                <p>Pesquisar conteúdo</p>
                            </a>
                        </li><hr>
                    </ul>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-chalkboard-teacher "></i>
                        <p>
                            Garimpo
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="ver/garimpo" class="nav-link">
                                <i class="fas fa-list nav-icon"></i>
                                <p>Todos garimpos</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" data-toggle="modal" data-target="#Modal_Registar_Garimpo_Chat" class="nav-link">
                                <i class="fas fa-plus-circle nav-icon"></i>
                                <p>Registar garimpo</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pedidos/garimpo/" class="nav-link">
                                <i class="fas fa fa-bell nav-icon"></i>
                                <p>Pedidos de adesão</p>
                            </a>
                        </li><hr>
                        {{-- <li class="nav-item">
                            <a href="garimpos/usuario/" class="nav-link">
                                <i class="fas fa fa-list nav-icon"></i>
                                    <p>Listar Membros</p>
                            </a>
                        </li> --}}
                    </ul>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="#" data-toggle="modal" data-target="#Modal_Registar_Conteudo"
                                class="nav-link">
                                <i class="fas fa fa-search nav-icon"></i>
                                <p>Pesquisar garimpo</p>
                            </a>
                        </li><hr>
                    </ul>
                </li>
                
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-laptop-code"></i>
                     
                        <p>
                            Trabalhos
                            <i class="fas fa-angle-left right"></i>
                            <span class="badge badge-info right">6</span>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="pages/layout/top-nav.html" class="nav-link">
                                <i class="far fa-eye nav-icon"></i>
                                <p>Ver Projectos</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/layout/top-nav.html" class="nav-link">
                                <i class="fas fa fa-plus nav-icon"></i>
                                <p>Novo projeto </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/layout/top-nav.html" class="nav-link">
                                <i class="far fa-edit nav-icon"></i>
                                <p>Actualizar Projecto</p>
                            </a>
                        </li>


                    </ul>
                </li>
               
                @can('add_role')
                 <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fa fa-cog"></i>
                        <p>
                            Definições avançadas
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/admin/anosLectivos" class="nav-link">
                                <i class="fa fa-calendar nav-icon"></i>
                                <p>Ano Lectivo</p>
                            </a>
                        </li>
                        
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
                        @endcan
                    </ul>
                </li>
             </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
