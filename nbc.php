<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Dashboard</title>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>
    <?php 
	session_start();
 
	// cek apakah yang mengakses halaman ini sudah login
	if($_SESSION['level']==""){
		header("location:index.php?pesan=gagal");
	}
  ?>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">
                      Welcome, <b><?php echo $_SESSION['username']; ?></b><span class="caret"></span>
                    </a>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" tabindex="-1" data-toggle="modal" data-target="#edit-profil" id="<?php echo $row["id"]; ?>" href="#">Edit Profil</a>
                      <a class="dropdown-item" tabindex="-1" href="#">Ubah Password</a>
                      <a class="dropdown-item" tabindex="-1" href="logout.php">Keluar</a>
                      <!-- <div class="dropdown-divider"></div>
                      <a class="dropdown-item" tabindex="-1" href="#">Separated link</a> -->
                    </div>
                  </li>
    </ul>
  </nav>
  <!-- /.navbar -->

                    <!-- The Modal -->
                    <div class="modal fade" id="edit-profil">
                    <div class="modal-dialog"> 
                      <div class="modal-content">

                        <!-- Modal Header -->
                        <div class="modal-header">
                          <h5 class="modal-title">Edit Profil</h5>
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>

                        <!-- Modal body -->
                        <div class="modal-body">
                          <form action="edit_profil.php?act=edit-profil" method="post" role="form">
                            <div class="form-group">
                              <div class="row">
                              <label class="col-sm-3 control-label text-right">Nama</label>         
                              <div class="col-sm-8"><input type="text" class="form-control" name="nama" placeholder="Nama" value=""></div>
                              </div>
                            </div>
                            <div class="form-group">
                              <div class="row">
                              <label class="col-sm-3 control-label text-right">Email</label>         
                              <div class="col-sm-8"><input type="email" class="form-control" name="email" placeholder="Email" value=""></div>
                              </div>
                            </div>
                            <div class="form-group">
                              <div class="row">
                              <label class="col-sm-3 control-label text-right">Username</label>         
                              <div class="col-sm-8"><input type="text" class="form-control" name="username" placeholder="Username" value=""></div>
                              </div>
                            </div>
                          </form> 
                        </div>

                        <!-- Modal footer -->
                        <div class="modal-footer">
                          <button id="nosave" type="button" class="btn btn-danger pull-left" data-dismiss="modal">Batal</button>
                          <input type="submit" name="submit" class="btn btn-primary" value="Simpan">
                        </div>

                      </div>
                    </div>
                  </div>

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
   <!--  <a href="index3.html" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light"></span>
    </a> -->

   

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/userlogo.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="uname">
          <p>&nbsp;<?php echo $_SESSION['username']; ?></p>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Menu Sistem
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                  <a href="./landing.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Home</p>
                  </a>
                </li>
              <li class="nav-item">
                <a href="./nbc.php" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Mulai Perhitungan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./data.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Lihat Data Training</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="riwayat.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Riwayat Perhitungan</p>
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
            <h1 class="m-0">PERHITUNGAN NBC</h1>
          </div><!-- /.col -->
          <!-- <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div> /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Input Nilai</h3>
            </div>
            <!-- card-header -->
            <!-- form start -->
            <form action="proses.php" method="post" name="form1">
              <div class="card-body">
                <div class="form-group">
                  <label for="daerah">Daerah Gempa</label>
                  <input type="text" class="form-control" name="dgb" placeholder="Nama Daerah, contoh: Padang, Sumatra Barat">
                </div>
                <div class="form-group">
                  <label for="sesar">Jenis Sesar</label>
                  <!-- <input type="number" class="form-control" name="js" placeholder="Kode Sesar"> -->
                  <select class="form-control" id="js" name="js">
                    <option value="">-- Pilih --</option>
                    <option value="1">Strike Slip</option>
                    <option value="2">Reverse</option>
                    <option value="2">Normal</option>
                    <option value="3">Oblique Normal</option>
                    <option value="3">Oblique Reverse</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="kedalaman">Kedalaman(Km)</label>
                  <input type="text" class="form-control" name="k" placeholder="Kedalaman Gempa, contoh: 10">
                </div>
                <div class="form-group">
                  <label for="magnitudo">Magnitudo(SR)</label>
                  <input type="text" class="form-control" name="m" placeholder="Besar Skala, contoh: 7.5">
                </div>
                <div class="form-group">
                  <label for="latitude">Latitude</label>
                  <input type="text" class="form-control" name="latitude" placeholder="Latitude">
                </div>
                <div class="form-group">
                  <label for="latitude">Longitude</label>
                  <input type="text" class="form-control" name="longitude" placeholder="Longitude">
                </div>
              </div>
                <!-- card body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary" name="Submit">Proses</button>
                </div>
            </form>
          </div>
        </div>
          <!-- card -->
          <!-- col (left) -->
          <!-- right column -->
          <div class="col-md-6">
            <!-- card1 -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Jenis Sesar</h3>
                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th style="width: 10px">No</th>
                      <th>Jenis Sesar</th>
                      <th>Kategori</th>
        
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1.</td>
                      <td>Strike Slip</td>
                      <td>Horizontal</td>
           
                    </tr>
                    <tr>
                      <td>2.</td>
                      <td>Reverse</td>
                      <td>Vertikal</td>
              
                    </tr>
                    <tr>
                      <td>3.</td>
                      <td>Normal</td>
                      <td>Vertikal</td>

                    </tr>
                    <tr>
                      <td>4.</td>
                      <td>Oblique Normal</td>
                      <td>Oblique</td>
        
                    </tr>
                    <tr>
                      <td>5.</td>
                      <td>Oblique Reverse</td>
                      <td>Oblique</td>
      
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
            <!-- /.card1 -->
            <!-- card2 -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Kedalaman</h3>
                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th style="width: 10px">No</th>
                      <th>Kedalaman</th>
                      <th>Kategori</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1.</td>
                      <td><70</td>
                      <td>Dangkal</td>
                    </tr>
                    <tr>
                      <td>2.</td>
                      <td>>=70 - <300</td>
                      <td>Menengah</td>
                    </tr>
                    <tr>
                      <td>3.</td>
                      <td>>= 300</td>
                      <td>Dalam</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
            <!-- /.card2 -->
            <!-- card3 -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Magnitudo</h3>
                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th style="width: 10px">No</th>
                      <th>Magnitudo</th>
                      <th>Kategori</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1.</td>
                      <td>>=5.0 - <= 6.9</td>
                      <td>Merusak</td>
                    </tr>
                    <tr>
                      <td>2.</td>
                      <td>>=7.0 - <=8.0</td>
                      <td>Besar</td>
                    </tr>
                    <tr>
                      <td>3.</td>
                      <td>>8.0</td>
                      <td>Sangat Besar</td>
                    </tr>
                  </tbody>
                </table>
              </div>
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2021</strong>
    Ridho Maiska Pratama
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
</body>
</html>

