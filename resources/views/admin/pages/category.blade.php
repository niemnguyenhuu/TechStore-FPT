<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
        <title> Thêm danh mục</title>
  
    <!-- Google Font: Source Sans Pro -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback
">
<!-- Font Awesome Icons -->
<link rel="stylesheet" href="{{URL::asset('assets/admin/backend/plugins/fontawesome-free/css/all.min.css')}}">
<!-- overlayScrollbars -->
<link rel="stylesheet" href="{{URL::asset('assets/admin/backend/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
<!-- Theme style -->
<link rel="stylesheet" href="{{URL::asset('assets/admin/backend/dist/css/adminlte.min.css')}}">
<link rel="stylesheet" href="{{URL::asset('assets/admin/backend/dist/css/tagsinput.css')}}">
<!-- summernote -->
<link rel="stylesheet" href="{{URL::asset('assets/admin/backend/plugins/summernote/summernote-bs4.min.css')}}">
<!-- CodeMirror -->
<link rel="stylesheet" href="{{URL::asset('assets/admin/backend/plugins/codemirror/codemirror.css')}}">
<link rel="stylesheet" href="{{URL::asset('assets/admin/backend/plugins/codemirror/theme/monokai.css')}}">
<!-- SimpleMDE -->
<link rel="stylesheet" href="{{URL::asset('assets/admin/backend/plugins/simplemde/simplemde.min.css')}}">



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js
"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js
"></script>
</head>   
    <body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
        <div class="wrapper">
            <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
  </div>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-dark">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="" class="nav-link">Trang chủ</a>
      </li>
    
      <li class="nav-item d-none d-sm-inline-block">
        <a class="nav-link" href="/logout">
                                            Đăng xuất
                                        </a>

                                        <form id="logout-form" action="/logout" method="POST" class="d-none">
                                            <input type="hidden" name="_token" value="po3RNTO9BYP9GkP8mQ2HBS1WC6b2Z7Abe6Rb0Vgc">                                        </form> 
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>

      <!-- Messages Dropdown Menu -->
      
      <!-- Notifications Dropdown Menu -->
     
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      
    </ul>
  </nav>
  <!-- /.navbar -->
        
            <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="" class="brand-link">
        <img src="" alt="" class="brand-image img-circle elevation-3"
            style="opacity: .8">
        <span class="brand-text font-weight-light"></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{URL::asset('assets/images/lowadmin.jpg')}}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">1</a>
                <span class="account-position">                    Admin
                       </span>
            </div>
        </div>

        <!-- SidebarSearch Form -->
        <form action="/timkiembaiviet" method="POST" data-widget="sidebar-search">
            <input type="hidden" name="_token" value="po3RNTO9BYP9GkP8mQ2HBS1WC6b2Z7Abe6Rb0Vgc">        <div class="form-inline">
            <div class="input-group" >
                <input class="form-control form-control-sidebar" name="search" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button type="submit" class=" btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div></form>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               
                                                <li class="nav-item">
                    <a href="" class="nav-link">
                        <i class="fas fa-book"></i>
                        <p>
                            Danh mục
                        </p>
                    </a>
                </li>
                                                
            </ul>
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               
                    <li class="nav-item">
                    <a href="" class="nav-link">
                        <i class="fas fa-edit"></i>
                        <p>
                             Sản Phẩm
                        </p>
                    </a>
                </li>
                                                
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Thêm danh mục</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Danh mục</a></li>
                        <li class="breadcrumb-item active">Thêm danh mục</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
                                    <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Thêm danh mục</h3>
                </div>

                <!-- /.card-header -->
                <!-- form start -->
                <form method="POST" action="">                   
                    <input type="hidden" name="_token" value="po3RNTO9BYP9GkP8mQ2HBS1WC6b2Z7Abe6Rb0Vgc">     
                     <div class="card-body">
                        <div class="form-group">
                            <label>Tên danh mục</label>
                            <input type="text" class="form-control" name="name" placeholder="Nhập họ và tên">
                        </div>                      
                            </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <button type="submit" name="submit" class="btn btn-primary">Thêm</button>                        
                    </div>
                </form>

            </div>
        </div>
    </section>
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Danh Sách Danh Mục</h4>
            <div class="table-responsive pt-3">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th>
                      STT
                    </th>
                    <th>
                      Tên Danh Mục
                    </th>
                    <th>
                      Hành động
                    </th>
                    
                  </tr>
                </thead>
                <tbody>
                  Tat ca danh muc
                  <tr>
                    <td>
                      1
                    </td>
                    <td>
                      Điện thoại
                    </td>
                    <td style="width: 20%">
                      <a href=""><button type="button" class="btn btn-primary">Sửa</button></a>
                      <a href="" onclick=""><button type="button" class="btn btn-danger">Xóa</button></a>
                  </td> 
                  <tr>
                    <td>
                      2
                    </td>
                    <td>
                      Máy tính
                    </td>
                    <td style="width: 20%">
                      <a href=""><button type="button" class="btn btn-primary">Sửa</button></a>
                      <a href="" onclick=""><button type="button" class="btn btn-danger">Xóa</button></a>
                  </td>   
                  <tr>
                    <td>
                      3
                    </td>
                    <td>
                      Phụ kiện
                    </td>
                    <td style="width: 20%">
                      <a href=""><button type="button" class="btn btn-primary">Sửa</button></a>
                      <a href="" onclick=""><button type="button" class="btn btn-danger">Xóa</button></a>
                  </td>                  
                </tbody>             
              </table>
            </div>
          </div>
        </div>
      </div>
    <!-- /.content -->
            </div>
            <!-- Main Footer -->
  <footer class="main-footer">
    
  
  
  </footer>        </div>
        
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
        <!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="{{URL::asset('assets/admin/backend/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap -->
<script src="{{URL::asset('assets/admin/backend/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- overlayScrollbars -->
<script src="{{URL::asset('assets/admin/backend/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{URL::asset('assets/admin/backend/dist/js/adminlte.js')}}"></script>
<script src="{{URL::asset('assets/admin/backend/dist/js/tagsinput.js')}}"></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="{{URL::asset('assets/admin/backend/plugins/jquery-mousewheel/jquery.mousewheel.js')}}"></script>
<script src="{{URL::asset('assets/admin/backend/plugins/raphael/raphael.min.js')}}"></script>
<script src="{{URL::asset('assets/admin/backend/plugins/jquery-mapael/jquery.mapael.min.js')}}"></script>
<script src="{{URL::asset('assets/admin/backend/plugins/jquery-mapael/maps/usa_states.min.js')}}"></script>
<!-- ChartJS -->
<script src="{{URL::asset('assets/admin/backend/plugins/chart.js/Chart.min.js')}}"></script>
<!-- Summernote -->
<script src="{{URL::asset('assets/admin/backend/plugins/summernote/summernote-bs4.min.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{URL::asset('assets/admin/backend/dist/js/pages/dashboard2.js')}}"></script>

    </body>
</html>