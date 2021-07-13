<?php
include 'fungsi.php'; 
?>
  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Dashboard</title>
    <!-- Bootstrap 4 CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="../../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="../../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="../../plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
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
    <link rel="stylesheet" type="text/css" href="style.css">
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
                  <a href="./nbc.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Mulai Perhitungan</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="./data.php" class="nav-link active">
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
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->
  <?php
  //including the database connection file
  include_once("config.php");

  //fetching data in descending order (lastest entry first)
  //$result = mysql_query("SELECT * FROM users ORDER BY id DESC"); // mysql_query is deprecated
  $result = mysqli_query($mysqli, "SELECT * FROM tb_training ORDER BY id ASC"); // using mysqli_query instead
  
  ?>

  <html>
  <head>  
    <title>Potensi Tsunami</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  </head>

  <body>
  <!-- <a href="add.html">Add New Data</a><br/><br/> -->

  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card">
                  <div class="card-header">
                  <!-- <form method="post" action="add.php">
                    <input type="text" name="DGB" placeholder="Daerah Gempa Bumi">
                    <input type="number" name="JS" placeholder="Jenis Sesar">
                    <input type="text" name="K" placeholder="Kedalaman">
                    <input type="text" name="M" placeholder="Magnitude">
                    <input type="text" name="Latitude" placeholder="Latitude">
                    <input type="text" name="Longitude" placeholder="Longitude">
                    <input type="number" name="Label" placeholder="Label">
                    <input type="submit" name="submit" value="Tambah Data">
                  </form><br/> -->
                    <h3 class="card-title">DATA TRAINING</h3>

                    <!-- <div class="card-tools">
                      <div class="input-group input-group-sm" style="width: 150px;">
                        <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                        <div class="input-group-append">
                          <button type="submit" class="btn btn-default">
                            <i class="fas fa-search"></i>
                          </button>
                        </div>
                      </div>
                    </div> -->
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body table-responsive p-0" style="height: 500px;">
                    <table class="table table-head-fixed text-nowrap">
                      <thead>  
                        <tr>
                          <th>No</th>
                          <th>Daerah Gempa Bumi</th>
                          <th>Jenis Sesar</th>
                          <th>Kedalaman(Km)</th>
                          <th>Magnitudo(SR)</th>
                          <th>Latitude</th>
                          <th>Longitude</th>
                          <th>Label</th>
                          <!-- <th>Aksi</th> -->
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                        // Tampilkan semua data
                        $no = 1;
                        $q = $mysqli->query("SELECT * FROM tb_training");

                        while ($dt = $q->fetch_assoc()) :
                        ?>
                        <tr>  
                          <td><?php echo $no++;?></td>
                          <td><?= $dt['DGB'] ?></td>
                          <td><?= getKategori($dt['JS']) ?></td>
                          <td><?= $dt['K'] ?></td>
                          <td><?= $dt['M'] ?></td>
                          <td><?= $dt['Latitude'] ?></td>
                          <td><?= $dt['Longitude'] ?></td>
                          <td><?= getLabel($dt['Label']) ?></td>  
                        </tr>

                        <?php
                        endwhile;
                        ?> 
                      </tbody>  
                    </table>
                  </div>
        </div>
      </div>
    </div>
  </div>
  </body>
  </body>
  </html>
    <!-- /.content -->
    </div>
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
  <!-- DataTables  & Plugins -->
  <script src="../../plugins/datatables/jquery.dataTables.min.js"></script>
  <script src="../../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
  <script src="../../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
  <script src="../../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
  <script src="../../plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
  <script src="../../plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
  <script src="../../plugins/jszip/jszip.min.js"></script>
  <script src="../../plugins/pdfmake/pdfmake.min.js"></script>
  <script src="../../plugins/pdfmake/vfs_fonts.js"></script>
  <script src="../../plugins/datatables-buttons/js/buttons.html5.min.js"></script>
  <script src="../../plugins/datatables-buttons/js/buttons.print.min.js"></script>
  <script src="../../plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
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
        