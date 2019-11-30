<!DOCTYPE html>
<html> 
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>BakofTec System</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ url('plugins/fontawesome-free/css/all.min.css') }}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="{{url('plugins/datatables-bs4/css/dataTables.bootstrap4.css')}}">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="{{ url('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{ url('plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{ url('plugins/jqvmap/jqvmap.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ url('dist/css/adminlte.min.css') }}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{ url('plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{ url('plugins/daterangepicker/daterangepicker.css') }}">
  <!-- summernote -->
  <link rel="stylesheet" href="{{ url('plugins/summernote/summernote-bs4.css') }}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <div class="row">
          <div class="col-sm-10">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
        </li>
          </div>
          <div class="col-sm-1">
          <a href="{{route('logout')}}" class='nav-link'>Logout</a>
          </div>
      {{-- <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contato</a>
      </li> --}}
    </ul>

  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{url('/')}}" class="brand-link">
      <img src="{{url('dist/img/bakof_logo.png')}}" alt="AdminLTE Logo" class="img-responsive"
           style="opacity: .8">
      <span class="brand-text font-weight-light"></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{url('dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{auth()->user()->name}}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="{{route('inicio')}}" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Início
                <!-- <i class="right fas fa-angle-left"></i> -->
              </p>
            </a>
            
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
            <i class="fas fa-truck-loading"></i>
              <p>
                Entregas
                <i class="fas fa-angle-left right"></i>
                {{-- <span class="badge badge-info right">4</span> --}}
              </p>
            </a>
            <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="{{route('entrega.create')}}" class="nav-link">
                <i class="fas fa-plus"></i>
                  <p>Cadastrar</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('entregaandamento') }}" class="nav-link">
                  <i class="fas fa-hourglass"></i>
                  <p> Andamento</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('entregaefetuada')}}" class="nav-link">
                  <i class="fas fa-check"></i>
                  <p>
                    Efetuadas</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('entregadivergencia')}}" class="nav-link">
                  <i class="fas fa-exclamation-triangle"></i>
                  <p>
                    Divergência</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
            <i class="fas fa-pallet"></i>
              <p>
                Produtos
                <i class="fas fa-angle-left right"></i>
                {{-- <span class="badge badge-info right">3</span> --}}
              </p>
            </a>
            <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="{{route('produto.create')}}" class="nav-link">
                  <i class="fas fa-plus"></i>
                  <p>Cadastrar</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('produto.index')}}" class="nav-link">
                  <i class="fas fa-box-open"></i>
                  <p>Estoque</p>
                </a>
              </li>
            
            </ul>

          </li>



          <li class="nav-item has-treeview">
              <a href="#" class="nav-link">
              <i class="fas fa-pallet"></i>
                <p>
                  Categorias
                  <i class="fas fa-angle-left right"></i>
                  {{-- <span class="badge badge-info right">3</span> --}}
                </p>
              </a>
              <ul class="nav nav-treeview">
              <li class="nav-item">
                  <a href="{{route('categoria.create')}}" class="nav-link">
                    <i class="fas fa-plus"></i>
                    <p>Cadastrar</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{route('categoria.index')}}" class="nav-link">
                    <i class="fas fa-box-open"></i>
                    <p>Listar</p>
                  </a>
                </li>
              
              </ul>

            </li>

          <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="fas fa-users"></i>
              <p>
                Clientes
                <i class="fas fa-angle-left right"></i>
                {{-- <span class="badge badge-info right">2</span> --}}
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('cliente.create')}}" class="nav-link">
                  <i class="fas fa-plus"></i>
                  <p>Cadastrar</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('cliente.index')}}" class="nav-link">
                  <i class="far fa-eye"></i>
                  <p>Visualizar</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="fas fa-user-tie"></i>
              <p>
                Motoristas
                <i class="fas fa-angle-left right"></i>
                {{-- <span class="badge badge-info right">2</span> --}}
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
              <a href="{{ route('motorista.create') }}" class="nav-link">
                  <i class="fas fa-plus"></i>
                  <p>Cadastrar</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('motorista.index') }}" class="nav-link">
                  <i class="far fa-eye"></i>
                  <p>Visualizar</p>
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

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          </div><!-- /.col -->

        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    @yield('content')
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer text-center">
    <strong>Copyright &copy; 2014-2019 Hackathon.</strong>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{ url('plugins/jquery/jquery.min.js') }}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{ url('plugins/jquery-ui/jquery-ui.min.js') }}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{ url('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- ChartJS -->
<script src="{{ url('plugins/chart.js/Chart.min.js') }}"></script>
<!-- Sparkline -->
<script src="{{ url('plugins/sparklines/sparkline.js') }}"></script>
<!-- JQVMap -->
<script src="{{ url('plugins/jqvmap/jquery.vmap.min.js') }}"></script>
<script src="{{ url('plugins/jqvmap/maps/jquery.vmap.usa.js') }}"></script>
<!-- jQuery Knob Chart -->
<script src="{{ url('plugins/jquery-knob/jquery.knob.min.js') }}"></script>
<!-- daterangepicker -->
<script src="{{ url('plugins/moment/moment.min.js') }}"></script>
<script src="{{ url('plugins/daterangepicker/daterangepicker.js') }}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{ url('plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
<!-- Summernote -->
<script src="{{ url('plugins/summernote/summernote-bs4.min.js') }}"></script>
<!-- overlayScrollbars -->
<script src="{{ url('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ url('dist/js/adminlte.js') }}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ url('dist/js/pages/dashboard.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ url('dist/js/demo.js') }}"></script>
<!-- DataTables -->
<script src="{{ url('plugins/datatables/jquery.dataTables.js') }}"></script>
<script src="{{ url('plugins/datatables-bs4/js/dataTables.bootstrap4.js') }}"></script>

</body>
</html>
