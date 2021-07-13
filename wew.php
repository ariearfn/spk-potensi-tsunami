<?php
include "conn.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>debedeMAP</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="custom.css">
 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAKH2F9gZMQyATwBodQsEr-uM0fokVCvZw&callback=initMap"></script>

   
    <script>
 
 
 
     
    var marker;
      function initialize() {
       
       
       
        // Variabel untuk menyimpan informasi (desc)
        var infoWindow = new google.maps.InfoWindow;
     
        //  Variabel untuk menyimpan peta Roadmap
        var mapOptions = {
           zoom: 4,
           mapTypeId: google.maps.MapTypeId.ROADMAP
        }
     
        // Pembuatan petanya
        var map = new google.maps.Map(document.getElementById('map'), mapOptions);
           
        // Variabel untuk menyimpan batas kordinat
        var bounds = new google.maps.LatLngBounds();

        // Pengambilan data dari database
        <?php
            $query = mysqli_query($conn,"select * from tbl_lokasi");
            if(mysqli_num_rows($query) < 1){?>
               //peta tanpa marker-2.5446949,118.3207873,5.29z
        var properti_peta = {
                    center: new google.maps.LatLng(-2.5446949, 118.3207873),
                    zoom: 4,
                    mapTypeId: google.maps.MapTypeId.ROADMAP
                };
                 var peta = new google.maps.Map(document.getElementById("map"), properti_peta);
             //end
         

<?php
            }else{
            while ($data = mysqli_fetch_array($query))
            {
                $nama = mystripslashesjs($data['namalokasi']);
                $alamat = mystripslashesjs($data['alamat']);
                $lat = $data['lat'];
                $lng = $data['lng'];
                $alamat = str_replace(array("\r","\n"),"",$alamat);
                echo ("addMarker($lat, $lng, '<b>$nama</b><br>$alamat');");             
             
            }
            }
          ?>
       
        // Proses membuat marker
        function addMarker(lat, lng, info) {
            var lokasi = new google.maps.LatLng(lat, lng);
            bounds.extend(lokasi);
            var marker = new google.maps.Marker({
                map: map,
                 position: lokasi,
             
            });     
            map.fitBounds(bounds);
            bindInfoWindow(marker, map, infoWindow, info);
         }
     
        // Menampilkan informasi pada masing-masing marker yang diklik
        function bindInfoWindow(marker, map, infoWindow, html) {
          google.maps.event.addListener(marker, 'click', function() {
            infoWindow.setContent(html);
            infoWindow.open(map, marker);
          });
        }

        }
      google.maps.event.addDomListener(window, 'load', initialize);
 
 
 
     $(document).ready(function(){
        $('#modal-edit').on('show.bs.modal', function (e) {
            var idx = $(e.relatedTarget).data('id');
             $.ajax({
                type : 'post',
                url : 'detaildata.php',
                data :  'idx='+ idx,
                success : function(data){
                $('.hasil-data').html(data);//menampilkan data ke dalam modal
                }
            });
         });
    });


      </script>
      <style>
       
      </style>
</head>
<body>
<nav class="navbar navbar-default">
   <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">debede<b>MAP</b></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="index.php">Home</a></li>
        <li><a href="hitungjarak.php">Hitung Jarak</a></li>
        </ul>
     </div>
  </div>
</nav>


<div class="container-fluid">
<div class="row">
<div class="col-md-6"> 
<div id="map" style="height:500px;"></div>
</div>

<div class="col-md-6"> 

<?php
if(isset($_POST['save'])){
$nama=myaddslashes($_POST['nama']);
$alamat=myaddslashes($_POST['alamat']);
$lat=myaddslashes($_POST['lat']);
$lng=myaddslashes($_POST['lng']);
$save=mysqli_query($conn,"INSERT INTO tbl_lokasi VALUES ('','$nama','$alamat','$lat','$lng')");
if($save){
echo "<p class='alert alert-success'>Data Berhasil Di Simpan</p>";
}else{
echo "<p class='alert alert-danger'>Data Gagal Di SImpan</p>";
}
echo "<script>document.location='index.php'</script>";
}
?>

<?php
if(isset($_POST['update'])){
$nama=myaddslashes($_POST['nama']);
$alamat=myaddslashes($_POST['alamat']);
$lat=$_POST['lat'];
$lng=$_POST['lng'];
mysqli_query($conn,"UPDATE tbl_lokasi SET namalokasi='$nama', alamat='$alamat', lat='$lat', lng='$lng' WHERE id_lokasi='".$_POST['id_lokasi']."'") or die (mysqli_error());
echo "<script>document.location='index.php'</script>";
}?>

<?php
if(isset($_GET['hapus'])){
$id=$_GET['hapus'];
mysqli_query($conn,"DELETE FROM tbl_lokasi WHERE id_lokasi='$id'");
echo "<script>document.location='index.php'</script>";
}?>

 <div class="panel panel-primary">
    <div class="panel-heading">
                <h2><i class="fa fa-map-marker"></i> Tabel Lokasi</h2>

    </div>
    <div class="panel-body">
     
        <div class="table-responsive">
        <table class="table table-striped">
                <thead>
                <tr>
                <th>NAMA LOKASI</th>
                <th>ALAMAT</th>
                <th>LATITUDE</th>
                <th>LONGITUDE</th>
                <td class='text-center'><a class="btn btn-primary" data-target='#modal-add' data-toggle='modal'><i class="fa fa-plus-circle"></a></td>
                </tr>
                </thead>
        <tbody>
        <?php
         $tampil=mysqli_query($conn,"SELECT*FROM tbl_lokasi");
         while($datatampil=mysqli_fetch_assoc($tampil)){
         echo "<tr>";
         echo "<td>".mystripslashes($datatampil['namalokasi'])."</td>";
         echo "<td>".mystripslashes($datatampil['alamat'])."</td>";
         echo "<td>".$datatampil['lat']."</td>";
         echo "<td>".$datatampil['lng']."</td>";
         echo "<td class='text-center'><a href='#modal-edit' data-id='$datatampil[id_lokasi]' data-toggle='modal'><i class='fa fa-pencil-square'></i></a>
         <a href='?hapus=$datatampil[id_lokasi]'><i class='fa fa-trash'></i></a></td>";
         echo "</tr>";
         }
         ?>
         </tbody>
         </table>
         </div>
       
     </div>
</div>


 <div id="modal-edit" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header bg-primary">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"><i class="fa fa-pencil-square"></i> Update Data</h4>
      </div>
      <div class="modal-body">
                <div class="hasil-data"></div>

        </div>
     </div>

  </div>
</div>


 <div id="modal-add" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header bg-primary">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"><i class="fa fa-plus-circle"></i> Tambah Data</h4>
      </div>
      <div class="modal-body">
       
         <form method="POST" action="">
        <div class="form-group">
            <label for="nama">Nama Lokasi</label>
            <input type="text" name="nama" class="form-control" id="nama" placeholder="Nama Lokasi" required>
        </div>
        <div class="form-group">
            <label for="alamat">Alamat</label>
            <textarea name="alamat" class="form-control" id="alamat" Placeholder="Alamat" required></textarea>
         </div>
        <div class="form-group">
            <label for="lat">Latitude</label>
            <input type="text" name="lat" class="form-control" id="lat" placeholder="Posisi Latitude" required>
        </div>
        <div class="form-group">
            <label for="lng">Longitude</label>
            <input type="text" name="lng" class="form-control" id="lng" placeholder="Posisi Longitude" required>
        </div>
        <hr>
        <button type="submit" name="save" class="btn btn-primary">Simpan Data</button>
        </form>

        </div>
     </div>

  </div>
</div>




</div>

  </div>
 </div>

  </body>
</html>