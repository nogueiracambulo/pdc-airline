{{-- @include('biblioteca_cc/modal_Conteudo/registarConteudo') --}}
@include('admin/modal/AnoLectivoRegistar')
@include('admin/modal/AnoLectivoActualizar')
@include('admin/modal/AnoLectivoSelecionar')
@include('biblioteca_cc/modal_Disciplina/registarDisciplina')
<!-- Main Sidebar Container -->

<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <div class="sidebar">
        <div class="user-panel mt-7 pb-8 mb-4 d-flex">
            <!-- Brand Logo -->
            <a href="/biblioteca-cc" class="brand-link">
                {{-- &nbsp;<img src="/template_admin_lte/dist/img/graduation.png" alt="" class="img-circle elevation-4"
                    style="opacity: .8"> --}}
                <span class="text-center" style="color:rgb(233,126,39); font-size: 48px">MULONGI</span>
                {{-- <span class="brand-text font-weight-light"></span> --}}
            </a>
        </div>
        <!-- Settings Dropdown -->

        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src={{ Auth::user()->profile_photo_url }} class="img-circle elevation-2" alt="Foto perfil">
            </div>
            <div class="info">
                <a href="/perfil" class="d-block">{{ Auth::user()->name }}</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               
               <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-table"></i>
                        <p>
                            Definições avançadas
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/admin/anosLectivos" class="nav-link">
                                <i class="fa fa-clock nav-icon"></i>
                                <p>Ano Lectivo</p>
                            </a>
                        </li>
                        @can('add_role')
                        <li class="nav-item">
                            <a href="/admin/listar_administradores" class="nav-link">
                                <i class="fa fa-lock nav-icon"></i>
                                <p>Administradores</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/admin/listar_utilizadores" class="nav-link">
                                <i class="fas fa fa-users nav-icon"></i>
                                <p>Outros Utilizadores</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/admin/listar_funcoes" class="nav-link">
                                <i class="far fa-edit nav-icon"></i>
                                <p>Funções</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/admin/listar_permissoes" class="nav-link">
                                <i class="far fa-edit nav-icon"></i>
                                <p>Permissões</p>
                            </a>
                        </li><hr>
                        @endcan
                    </ul>
                </li>
               
               
                <li class="nav-item menu-open">
                    <a href="#" class="nav-link ">
                        <i class="nav-icon fas fa-book"></i>
                        <p>
                            Biblioteca
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">

                        <li class="nav-item">
                            <a href="#" data-toggle="modal" data-target="#Modal_Registar_Disciplina"
                                class="nav-link">
                                <i class="fas fa fa-plus nav-icon"></i>
                                <p>Inserir Disciplina</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="pages/layout/top-nav.html" class="nav-link">
                                <i class="far fa-edit nav-icon"></i>
                                <p>Actualizar Disciplina</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/layout/top-nav.html" class="nav-link">
                                <i class="fas fa fa-trash nav-icon"></i>
                                <p>Eliminar Disciplinas</p>
                            </a>
                        </li>
                        <hr>
                    </ul>

                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="#" data-toggle="modal" data-target="#Modal_Registar_Conteudo"
                                class="nav-link">
                                <i class="fas fa fa-plus nav-icon"></i>
                                <p>Inserir Conteúdo</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/layout/top-nav.html" class="nav-link">
                                <i class="far fa-edit nav-icon"></i>
                                <p>Actualizar Conteúdo</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="pages/layout/top-nav.html" class="nav-link">
                                <i class="fas fa-trash nav-icon"></i>
                                <p>Eliminar Conteúdos</p>
                                <hr>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-users"></i>
                        <i class="fa-light fa-screen-users"></i>
                        <p>
                            Projectos
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
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-user"></i>
                        <p>
                            Professores
                            <i class="right fas fa-angle-left"></i>
                            <span class="badge badge-info right">6</span>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/admin" class="nav-link">
                                <i class="far fa-eye nav-icon"></i>
                                <p>Ver Professores</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/layout/top-nav.html" class="nav-link">
                                <i class="fas fa fa-user-plus nav-icon"></i>
                                <p>Registar Professor</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/layout/top-nav.html" class="nav-link">
                                <i class="far fa-edit nav-icon"></i>
                                <p>Editar Professor</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-user"></i>
                        <p>
                            Estudantes
                            <i class="fas fa-angle-left right"></i>
                            <span class="badge badge-info right">6</span>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="pages/layout/top-nav.html" class="nav-link">
                                <i class="far fa-eye nav-icon"></i>
                                <p>Ver Estudantes</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/layout/top-nav.html" class="nav-link">
                                <i class="fas fa fa-user-plus nav-icon"></i>
                                <p>Novo Estudante</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/layout/top-nav.html" class="nav-link">
                                <i class="far fa-edit nav-icon"></i>
                                <p>Editar Estudante</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-edit"></i>
                        <p>
                            Garimpo
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="pages/forms/general.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>General Elements</p>
                            </a>
                        </li>

                    </ul>
                </li>
             </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
