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
            <a class="dropdown-item" tabindex="-1" href="password_user.php">Ubah Password</a>
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
                  <a href="./landing.php" class="nav-link active">
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
      <div class="card-header d-flex p-0">
        <h3 class="card-title p-3">Home</h3>
        <ul class="nav nav-pills ml-auto p-2">
          <li class="nav-item"><a class="nav-link active" href="#tab_1" data-toggle="tab">Tentang Website</a></li>
          <li class="nav-item"><a class="nav-link" href="#tab_2" data-toggle="tab">Cara Penggunaan</a></li>
          <!-- <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">
              Dropdown <span class="caret"></span>
            </a>
            <div class="dropdown-menu">
              <a class="dropdown-item" tabindex="-1" href="#">Action</a>
              <a class="dropdown-item" tabindex="-1" href="#">Another action</a>
              <a class="dropdown-item" tabindex="-1" href="#">Something else here</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" tabindex="-1" href="#">Separated link</a>
            </div>
          </li> -->
        </ul>
      </div><!-- /.card-header -->
      <div class="card-body">
        <div class="tab-content">
          <div class="tab-pane active" id="tab_1">
          <div class="image">
          <h1 style='text-align:center'>SISTEM PENDUKUNG KEPUTUSAN</h1>
          <h2 style='text-align:center'>PENENTUAN GEMPA BUMI POTENSI TSUNAMI DI INDONESIA</h2>
          <img src="dist/img/indo.jpeg" alt="Indo Image" style="width:100%;">
          </div>
          <p style='text-align: justify'>Indonesia merupakan negara yang berada pada 3 lempengan utama dunia yaitu Lempeng Eurasia, Lempeng Indo-Australia, dan Lempeng Pasifik, posisi letak Indonesia dikenal dengan wilayah Ring of Fire (Cincin Api Pasifik) terbentang sejauh 40.000 Km yang menyebabkan sangat sering terjadi gempa bumi serta letusan gunung berapi di wilayah Indonesia. Gempa bumi merupakan bencana alam yang terjadi akibat pergeseran lempeng bumi. BMKG mencatat sebanyak 11.573 gempa bumi yang terjadi sepanjang tahun 2019 di Indonesia. Dampak dari gempa bumi salah satunya adalah tsunami. Maka dari itu dibuatlah website ini sebagai data dukung pengambil keputusan yang cepat dan tepat untuk menentukan gempa bumi berpotensi tsunami atau tidak.</p>
          <br>
          <h4 style='text-align:center'>Sistem Pendukung Keputusan menggunakan Metode Naive Bayes Classifier</h4>
          <p style="text-align: justify">Sistem pendukung keputusan (SPK) atau dalam bahasa Inggris disebut Decision Support System (DSS) adalah teknik yang dapat membuat keputusan secara otomatis. Menurut (Limbong dkk., 2020).</p>
          <p style="text-align: justify">Metode Naive Bayes Classifier merupakan klasifikasi statistik yang dapat digunakan untuk memprediksi probabilitas anggota kelas. Klasifikasi Bayes didasarkan pada teorema Bayes, yang memiliki kemampuan klasifikasi yang mirip dengan decision tree dan neural network. Ketika klasifikasi Bayesian diterapkan pada database dengan data besar, terbukti keakuratan dan kecepatannya yang tinggi (Kusrini dan Luthfi, 2009). Persamaan umum dari teorema bayes:</p>
          <img src="dist/img/rumusNBC.JPG" alt="NBC Image" style="width:30%">
          </div>
          <!-- /.tab-pane -->
          <div class="tab-pane" id="tab_2">
          Cara Penggunaan Website Sistem pendukung keputusan dengan metode naive bayes classifier<br><br>
            1. Untuk melakukan perhitungan, silahkan klik sub menu mulai perhitungan.<br><br>
            2. user memasukkan kriteria data: <br>
                a. daerah gempa (contoh: padang,sumatra barat)  <br>
                b. jenis sesar (contoh: pilih salah satu strike-slip/reverse/normal/oblique normal/oblique vertikal)<br>
                c. kedalaman (contoh: 10)<br>
                d. magnitudo (contoh: 7.5)<br>
                e. latitude (contoh: -1.609972)<br>
                f. longitude(contoh: 103.607254)<br><br>
            3. setelah mengisi seluruh data kemudian klik proses untuk memulai proses perhitungan menggunakan algoritma naive bayes classifier<br><br>
            4. Maka website akan menampilkan hasil perhitungan dan peta lokasi kejadian gempa dari data yang telah dimasukkan.<br><br>
            5. selesai.<br>
          </div>
          <!-- /.tab-pane -->
        </div>
        <!-- /.tab-content -->
      </div><!-- /.card-body -->
    </div>
    <!-- ./card -->
  </div>
  <!-- /.col -->
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
        