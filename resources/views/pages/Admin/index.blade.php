@extends("pages.Admin.Layout.App")
@section("title", "Painel administrativo")

    <!-- Page Wrapper -->

    @section("Content")
        <!-- SIDEBAR -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active text-uppercase">
                <a class="nav-link" href="">
                    <i class="fas fa-fw fa-list-ol"></i>
                    <span>Opções</span></a>
            </li>

            <!-- Nav Itens -->

            <li class="nav-item ">
                <a class="nav-link {{Route::currentRouteName() === "admin/index" ? "bg-light text-dark rounded " : "" }} " href="{{Route('admin/index')}}">
                    <i class="fa fa-fw fa-home {{Route::currentRouteName() === "admin/index" ? " text-dark" : "text-light"}} "></i>
                    <span class="">Página Inicial</span>
                </a>
            </li>

            <li class="nav-item">
                <a target="_blank" class="nav-link {{Route::currentRouteName() === "admin/tabela/consultorias" ? "bg-light text-dark rounded" : ""}} " href="{{Route("admin/tabela/consultorias")}}">
                    <i class="fas fa-fw fa-handshake {{Route::currentRouteName() === "admin/tabela/consultorias" ? " text-dark" : "text-light"}} "></i>
                    <span class="">Consultorias</span></a>
            </li>



            <li class="nav-item">
                <a target="_blank" class="nav-link {{Route::currentRouteName() === "admin/tabela/testemunhos" ? "bg-light text-dark rounded" : ""}} " href="{{Route("admin/tabela/testemunhos")}}">
                    <i class="fas fa-fw fa-quote-right {{ Route::currentRouteName() === "admin/tabela/testemunhos" ? " text-dark" : "text-light"}}"></i>
                    <span>Depoimentos</span>
                </a>
            </li>


            <li class="nav-item">
                <a target="_blank" class="nav-link {{Route::currentRouteName() === "tabela/usuarios" ? "bg-light text-dark rounded" : ""}} "  href="{{Route("tabela/usuarios")}}">
                <i class="fas fa-fw fa-users {{Route::currentRouteName() === "tabela/usuarios" ? " text-dark" : "text-light"}} "></i>
                <span>Usuários</span></a>
            </li>

            <li class="nav-item">
                <a target="_blank" class="nav-link {{Route::currentRouteName() === "eventos" ? "bg-light text-dark rounded" : ""}} " href="{{Route('eventos') }}">
                    <i class="fa fa-fw fa-calendar-check {{ Route::currentRouteName() === "eventos" ? " text-dark" : "text-light"}} "></i>
                    <span class="">Eventos</span>
                </a>
            </li>
            <li class="nav-item">
                <a target="_blank" class="nav-link {{Route::currentRouteName() === "fotos.manquez" ? "bg-light text-dark rounded" : ""}}" href="{{Route("fotos.manquez") }}">
                    <i class="fa fa-fw fa-images {{ Route::currentRouteName() === "fotos.manquez" ? " text-dark" : "text-light"}} "></i>
                    <span class="">Galeria</span>
                </a>
            </li>


        </ul>
        <!-- END OF SIDEBAR -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">


            <!-- Main Content -->
            <div id="content">


                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">



                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Dashboard Title -->
                    <div class="d-flex  align-items-center justify-content-center container stitleTop col-md-8">
                        <h4>Painel Administrativo</h4>
                     </div>
                    <ul class="navbar-nav ml-auto">


                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow container text-uppercase">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{ Auth::user()->nome }}</span>
                                 <i class="fas fa-user"></i>
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in text-lowercase"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="/">
                                    <i class="fas fa-home fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Ir para o nício
                                </a>

                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{ route('terminar/sessao') }}">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Terminar sessão
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="text-start mb-4">
                        <h2 class="display-5 text-uppercase">Dados estatísticos</h2>

                    <!-- Audio for notifications -->
                        <audio controls id="audioNotifications">
                            <source src="{{asset("sounds/audio.wav")}}" type="audio/wav">
                        </audio>
                    <!-- Audio for notifications -->

                    </div>

                    <!-- Content Row -->
                    <div class="row justify-content-center">

                        <!-- Earnings (Monthly) Card Example -->

                        <!-- Earnings (Monthly) Card Example -->


                        <!-- Pending Requests Card Example -->



                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-normal text-center font-weight-bold text-warning text-uppercase mb-1">
                                                Usuários
                                            </div>
                                            <div class="h1 text-center  mb-0 font-weight-bold text-gray-800">{{ $usuarios->count() }}</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-users fa-3x text-dark"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-md-6 mb-4">
                         <div class="card border-left-danger shadow h-100 py-2">
                            <a target="_blank" onclick="selectedNotification();" method="post" class="nav-link {{$notifications->count() ? "" : "cursor-no-pointer" }}" href="{{$notifications->count() ? "/admin/tabela/consultorias" : "#"}}">
                                    <div class="card-body p-2">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-normal text-center font-weight-bold text-primary text-uppercase mb-1">
                                                    Notificações
                                                </div>

                                                    <div id="withoutNotificationBox" class="{{$notifications->count() ? "" : "alert-danger  notifications fw-bold  text-center mt-1 p-1"}} ">
                                                        <span id="withoutNotificationText" >{{$notifications->count() ? "" : "Nenhuma notificação!"}}</span>
                                                    </div>
                                            </div>

                                            <div class="col-auto">
                                                <div class="col-md-12 col-sm-12 col-xl-12  d-flex justify-content-center align-items-center container ">
                                                    <!-- Icon Notifications -->
                                                <i id="notificationsIcon" class=" d-flex align-items-center justify-content-center container fas  {{$notifications->count() ? "fa-bell" : "fa-bell-slash"}}  fa-3x text-gray-600 ">
                                                   <!-- Txt notification counter -->
                                                    <span id="notificationsCounter" style="font-size: 18pt; font-family: Arial; border-radius: 1px; margin-left: 2px"  class=" p-1 fw-bold {{$notifications->count() ? "bg-danger" : "text-invisible" }}  text-light">
                                                        {{ "+".$notifications->count() }}
                                                    </span>
                                                 </i>

                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </a>
                                </div>
                        </div>

                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body ">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class=" text-normal text-center  font-weight-bold text-success text-uppercase mb-1">
                                                Consultorias
                                            </div>
                                            <div class="h1 text-center mb-0 font-weight-bold text-gray-800">{{ $consultorias->count() }}</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-handshake fa-3x text-dark"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->


                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-normal text-center font-weight-bold text-primary text-uppercase mb-1">
                                                Depoimentos</div>
                                            <div class="h1 mb-0 text-center font-weight-bold text-gray-800">{{ $testemunhos->count() }}</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-quote-right fa-3x text-dark"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Content Row -->

                    <div class="row">
                        <div class="col-lg-12 mb-4">
                            @yield('conteudo__dinamico')
                        </div>
                    </div>



                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Todos os direitos reservados {{date("Y")}}</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    @endsection
    <!-- End of Page Wrapper -->

