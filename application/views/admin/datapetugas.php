<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Dashboard - Admin</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="/assets/fontawesome-free/css/all.min.css">
        <!-- Ionicons -->
        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
        <!-- DataTables -->
        <link rel="stylesheet" href="/assets/datatables-bs4/css/dataTables.bootstrap4.min.css">
        <link rel="stylesheet" href="/assets/datatables-responsive/css/responsive.bootstrap4.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="/assets/css/adminlte.min.css">
        <!-- Google Font: Source Sans Pro -->
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    </head>
    <body class="hold-transition sidebar-mini">
        <div class="wrapper">
            <!-- Navbar -->
            <nav class="main-header navbar navbar-expand navbar-white navbar-light">
                <!-- Left navbar links -->
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                    </li>
                    
                </ul>
                <!-- SEARCH FORM -->
                <form class="form-inline ml-3">
                    <div class="input-group input-group-sm">
                        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn btn-navbar" type="submit">
                            <i class="fas fa-search"></i>
                            </button>
                        </div>
                    </div>
                </form>
                <!-- Right navbar links -->
                <ul class="navbar-nav ml-auto">
                    <!-- Messages Dropdown Menu -->
                    <li class="nav-item">
                        <a class="nav-link" href="/admin/logout" role="button">
                            <i class="fas fa-sign-out-alt"></i>
                        </a>
                    </li>
                    <!-- Notifications Dropdown Menu -->
                    <li class="nav-item dropdown">
                        <a class="nav-link" data-toggle="dropdown" href="#">
                            <i class="far fa-bell"></i>
                            <span class="badge badge-warning navbar-badge">15</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                            <span class="dropdown-item dropdown-header">15 Notifications</span>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item">
                                <i class="fas fa-envelope mr-2"></i> 4 new messages
                                <span class="float-right text-muted text-sm">3 mins</span>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item">
                                <i class="fas fa-users mr-2"></i> 8 friend requests
                                <span class="float-right text-muted text-sm">12 hours</span>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item">
                                <i class="fas fa-file mr-2"></i> 3 new reports
                                <span class="float-right text-muted text-sm">2 days</span>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
                            <i class="fas fa-th-large"></i>
                        </a>
                    </li>
                </ul>
            </nav>
            <!-- /.navbar -->
            <!-- Main Sidebar Container -->
            <aside class="main-sidebar sidebar-dark-primary elevation-4">
                <!-- Brand Logo -->
                <a href="../../index3.html" class="brand-link">
                    <img src="/assets/img/AdminLTELogo.png"
                    alt="AdminLTE Logo"
                    class="brand-image img-circle elevation-3"
                    style="opacity: .8">
                    <span class="brand-text font-weight-light">AdminLTE 3</span>
                </a>
                <!-- Sidebar -->
                <div class="sidebar">
                    <!-- Sidebar user (optional) -->
                    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                        <div class="image">
                            <img src="/assets/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
                        </div>
                        <div class="info">
                            <a href="#" class="d-block"><?php echo $_SESSION["nama_petugas"] ?></a>
                        </div>
                    </div>
                    <!-- Sidebar Menu -->
                    <nav class="mt-2">
                        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                            <!-- Add icons to the links using the .nav-icon class
                            with font-awesome or any other icon font library -->
                            <li class="nav-item has-treeview menu-open">
                                <a href="#" class="nav-link active">
                                    <i class="nav-icon fas fa-tachometer-alt"></i>
                                    <p>
                                        Dashboard
                                        <i class="fas fa-angle-left right"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="/admin" class="nav-link ">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Data Pengaduan</p>
                                        </a>
                                    </li>
                                </ul>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="/admin/dataproses" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Data Proses</p>
                                        </a>
                                    </li>
                                </ul>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="/admin/dataselesai" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Data Selesai</p>
                                        </a>
                                    </li>
                                </ul>
                                <!-- <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="#" class="nav-link active">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Data Pengaduan</p>
                                        </a>
                                    </li>
                                </ul> -->
                            </li>
                            <li class="nav-item">
                                <a href="/app/registersecret" class="nav-link">
                                    <i class="nav-icon fas fa-th"></i>
                                    <p>
                                        Register Petugas
                                        <!-- <span class="right badge badge-danger">New</span> -->
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/admin/datapetugas" class="nav-link">
                                    <i class="nav-icon fas fa-th"></i>
                                    <p>
                                        Data petugas
                                        <!-- <span class="right badge badge-danger">New</span> -->
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/admin/datamasyarakat" class="nav-link">
                                    <i class="nav-icon fas fa-th"></i>
                                    <p>
                                        Data Masyarakat
                                        <!-- <span class="right badge badge-danger">New</span> -->
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/admin/laporan" class="nav-link">
                                    <i class="nav-icon fas fa-file"></i>
                                    <p>
                                        Laporan
                                        <!-- <span class="right badge badge-danger">New</span> -->
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
                    <!-- Content Header (Page header) -->
                    <section class="content-header">
                        <div class="container-fluid">
                            <div class="row mb-2">
                                <div class="col-sm-6">
                                    <h1>Data Petugas</h1>
                                </div>
                                <div class="col-sm-6">
                                    <ol class="breadcrumb float-sm-right">
                                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                                        <li class="breadcrumb-item active">Data Petugas</li>
                                    </ol>
                                </div>
                            </div>
                            </div><!-- /.container-fluid -->
                        </section>
                        <!-- Main content -->
                        <section class="content">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="card">
                                            <div class="card-header">
                                                <h3 class="card-title">Data petugas</h3>
                                            </div>
                                            <!-- /.card-header -->
                                            <div class="card-body">
                                                <table id="datareal" class="table table-bordered table-striped">
                                                    <thead>
                                                        <tr>
                                                            <th>Id</th>
                                                            <th>Nama</th>
                                                            <th>Telp</th>
                                                            <th>Level</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        
                                                    </tbody>
                                                    <tfoot>
                                                        <tr>
                                                            <th>Id</th>
                                                            <th>Nama</th>
                                                            <th>Telp</th>
                                                            <th>Level</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </tfoot>
                                                </table>
                                                    </div>
                                                    <!-- /.card-body -->
                                                </div>
                                                <!-- /.card -->
                                            </div>
                                            <!-- /.col -->
                                        </div>
                                        <!-- /.row -->
                                    </div>
                                    <!-- /.container-fluid -->
                                </section>
                                <!-- /.content -->
                            </div>
                            <!-- /.content-wrapper -->
                            <footer class="main-footer">
                                <div class="float-right d-none d-sm-block">
                                    <b>Version</b> 3.0.5
                                </div>
                                <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong> All rights
                                reserved.
                            </footer>
                            <!-- Control Sidebar -->
                            <aside class="control-sidebar control-sidebar-dark">
                                <!-- Control sidebar content goes here -->
                            </aside>
                            <!-- /.control-sidebar -->
                        </div>
                        <!-- ./wrapper -->
                        <!-- jQuery -->
                        <script src="/assets/jquery/jquery.min.js"></script>
                        <!-- Bootstrap 4 -->
                        <script src="/assets/bootstrap/js/bootstrap.bundle.min.js"></script>
                        <!-- DataTables -->
                        <script src="/assets/datatables/jquery.dataTables.min.js"></script>
                        <script src="/assets/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
                        <script src="/assets/datatables-responsive/js/dataTables.responsive.min.js"></script>
                        <script src="/assets/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
                        <!-- AdminLTE App -->
                        <script src="/assets/js/adminlte.min.js"></script>
                        <!-- AdminLTE for demo purposes -->
                        <script src="/assets/js/demo.js"></script>
                        <!-- page script -->
                        <script>
                            var ourtable;
                        $(function () {
                        ourtable = $("#datareal").DataTable({
                        "responsive": true,
                        "autoWidth": false,
                        ajax: {
                            url: '/admin/getdata_petugas',
                            dataSrc: ''
                        },
                        columns: [
                            {data: 'petugas_id_petugas'},
                            {data: 'petugas_nama_petugas'},
                            {data: 'petugas_telp'},
                            {data: 'petugas_level'},
                            {render: function (data, type, row){
                                    return '<button data-id="'+row.pengaduan_id_pengaduan+'" class="btn btn-info"><i class="fa fa-search" aria-hidden="true"></i></button>'+
                                    '<span> </span>'+
                                    '<button data-id="'+row.pengaduan_id_pengaduan+'" class="del btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></button>'
                            }}
                        ]
                        });
                        });
                        </script>
                        <script type="text/javascript" src="/assets/js/dashboardadmin_pet.js"></script>
                    </body>
                </html>