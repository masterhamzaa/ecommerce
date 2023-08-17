<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.slices.head')
</head>

<body class="hold-transition  sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
    <div class="wrapper">

        <!-- Loading -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__wobble" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
        </div>

        <!-- Navbar -->
        <nav class="main-header navbar navbar-dark navbar-expand ">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i
                            class="fas fa-bars"></i></a>
                </li>
                {{-- <li class="nav-item d-none d-sm-inline-block">
                    <a href="index3.html" class="nav-link">github</a>
                </li>
                --}}
            </ul>
            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="{{ route('logout') }}"
                        role="button">
                        <i class="fas fa-th-large"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('logout') }}">

                        <i class="fas fa-sign-out-alt" style="font-size: 18.5px;margin-top:2.5px"></i>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /Navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="https://github.com/masterhamzaa" class="brand-link">
                <img src="dist/img/ieizlzqDRGXeXsHyWvHTZvjfdyKMe0G1650GIK98.jpg" alt="D. Lufff"
                    class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-bold">H A M Z A</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                        <li class="nav-item menu-open">
                            <a href="#" class="nav-link active">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Dashboard
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">

                                <li class="nav-item">
                                    <a href="{{ route('gestion', ['dashboard']) }}" class="nav-link active">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Dashboard</p>
                                    </a>
                                </li>



                                <li class="nav-item">
                                    <a href="{{ route('getdata') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Products Export</p>
                                    </a>
                                </li>


                                <li class="nav-item">
                                    <a href="{{ route('gestion', ['import']) }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Products Import</p>
                                    </a>
                                </li>


                                <li class="nav-item">
                                    <a href="{{ route('generate') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Imprimer les factures</p>
                                    </a>
                                </li>




                            </ul>
                        </li>



                        <li class="nav-item">
                            <a href="{{ route('gestion', ['categories']) }}" class="nav-link">
                                <i class="nav-icon fas fa-th"></i>
                                <p>
                                    Gestion des catégories

                                </p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('gestion', ['produits']) }}" class="nav-link">
                                <i class="nav-icon fas fa-th"></i>
                                <p>
                                    Gestion des produits

                                </p>
                            </a>
                        </li>


                        <li class="nav-item">
                            <a href="{{ route('gestion', ['users']) }}" class="nav-link">
                                <i class="nav-icon fas fa-th"></i>
                                <p>
                                    Gestion des clients

                                </p>
                            </a>
                        </li>





                        <li class="nav-item">
                            <a href="{{ route('gestion', ['comm']) }}" class="nav-link">
                                <i class="nav-icon fas fa-th"></i>
                                <p>
                                    Gestion des commandes

                                </p>
                            </a>
                        </li>







                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">

            @include('admin.slices.content')

        </div>
        <!-- /.content-wrapper -->

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->

        @include('admin.slices.footer')
    </div>
    @include('admin.slices.scripts')

</body>

</html>
