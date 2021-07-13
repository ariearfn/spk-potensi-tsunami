<?php
//including the database connection file
include_once("config.php");

//fetching data in descending order (lastest entry first)
//$result = mysql_query("SELECT * FROM users ORDER BY id DESC"); // mysql_query is deprecated
$result = mysqli_query($mysqli, "SELECT * FROM tb_training ORDER BY id ASC"); // using mysqli_query instead
$jumlahdata = mysqli_query($mysqli, "SELECT COUNT(ID) as JUMLAH FROM `tb_training`");
$jumlahdata_ = mysqli_fetch_array($jumlahdata);

$jumlahdatalabel1 = mysqli_query($mysqli, "SELECT COUNT(Label) AS JUMLAH FROM tb_training WHERE Label = 1");
$jumlahdatalabel1_ = mysqli_fetch_array($jumlahdatalabel1);
$jumlahdatalabel2 = mysqli_query($mysqli, "SELECT COUNT(Label) AS JUMLAH FROM tb_training WHERE Label = 2");
$jumlahdatalabel2_ = mysqli_fetch_array($jumlahdatalabel2);

$jumlahdatajs11 = mysqli_query($mysqli, "SELECT COUNT(Label) AS JUMLAH FROM tb_training WHERE JS = 1 AND Label = 1");
$jumlahdatajs11_ = mysqli_fetch_array($jumlahdatajs11);
$jumlahdatajs12 = mysqli_query($mysqli, "SELECT COUNT(Label) AS JUMLAH FROM tb_training WHERE JS = 1 AND Label = 2");
$jumlahdatajs12_ = mysqli_fetch_array($jumlahdatajs12);
$jumlahdatajs21 = mysqli_query($mysqli, "SELECT COUNT(Label) AS JUMLAH FROM tb_training WHERE JS = 2 AND Label = 1");
$jumlahdatajs21_ = mysqli_fetch_array($jumlahdatajs21);
$jumlahdatajs22 = mysqli_query($mysqli, "SELECT COUNT(Label) AS JUMLAH FROM tb_training WHERE JS = 2 AND Label = 2");
$jumlahdatajs22_ = mysqli_fetch_array($jumlahdatajs22);
$jumlahdatajs31 = mysqli_query($mysqli, "SELECT COUNT(Label) AS JUMLAH FROM tb_training WHERE JS = 3 AND Label = 1");
$jumlahdatajs31_ = mysqli_fetch_array($jumlahdatajs31);
$jumlahdatajs32 = mysqli_query($mysqli, "SELECT COUNT(Label) AS JUMLAH FROM tb_training WHERE JS = 3 AND Label = 2");
$jumlahdatajs32_ = mysqli_fetch_array($jumlahdatajs32);

$jumlahdatak11 = mysqli_query($mysqli, "SELECT COUNT(Label) AS JUMLAH FROM tb_training WHERE K < 70 AND Label = 1");
$jumlahdatak11_ = mysqli_fetch_array($jumlahdatak11);
$jumlahdatak12 = mysqli_query($mysqli, "SELECT COUNT(Label) AS JUMLAH FROM tb_training WHERE K < 70 AND Label = 2");
$jumlahdatak12_ = mysqli_fetch_array($jumlahdatak12);
$jumlahdatak21 = mysqli_query($mysqli, "SELECT COUNT(Label) AS JUMLAH FROM tb_training WHERE (K >= 70 AND K < 300) AND Label = 1");
$jumlahdatak21_ = mysqli_fetch_array($jumlahdatak21);
$jumlahdatak22 = mysqli_query($mysqli, "SELECT COUNT(Label) AS JUMLAH FROM tb_training WHERE (K >= 70 AND K < 300) AND Label = 2");
$jumlahdatak22_ = mysqli_fetch_array($jumlahdatak22);
$jumlahdatak31 = mysqli_query($mysqli, "SELECT COUNT(Label) AS JUMLAH FROM tb_training WHERE K >= 300 AND Label = 1");
$jumlahdatak31_ = mysqli_fetch_array($jumlahdatak31);
$jumlahdatak32 = mysqli_query($mysqli, "SELECT COUNT(Label) AS JUMLAH FROM tb_training WHERE K >= 300 AND Label = 2");
$jumlahdatak32_ = mysqli_fetch_array($jumlahdatak32);

$jumlahdatam11 = mysqli_query($mysqli, "SELECT COUNT(Label) AS JUMLAH FROM tb_training WHERE (M >= 5.0 AND M <= 6.9) AND Label = 1");
$jumlahdatam11_ = mysqli_fetch_array($jumlahdatam11);
$jumlahdatam12 = mysqli_query($mysqli, "SELECT COUNT(Label) AS JUMLAH FROM tb_training WHERE (M >= 5.0 AND M <= 6.9) AND Label = 2");
$jumlahdatam12_ = mysqli_fetch_array($jumlahdatam12);
$jumlahdatam21 = mysqli_query($mysqli, "SELECT COUNT(Label) AS JUMLAH FROM tb_training WHERE (M >= 7.0 AND M <= 8.0) AND Label = 1");
$jumlahdatam21_ = mysqli_fetch_array($jumlahdatam21);
$jumlahdatam22 = mysqli_query($mysqli, "SELECT COUNT(Label) AS JUMLAH FROM tb_training WHERE (M >= 7.0 AND M <= 8.0) AND Label = 2");
$jumlahdatam22_ = mysqli_fetch_array($jumlahdatam22);
$jumlahdatam31 = mysqli_query($mysqli, "SELECT COUNT(Label) AS JUMLAH FROM tb_training WHERE M > 8.0 AND Label = 1");
$jumlahdatam31_ = mysqli_fetch_array($jumlahdatam31);
$jumlahdatam32 = mysqli_query($mysqli, "SELECT COUNT(Label) AS JUMLAH FROM tb_training WHERE M > 8.0 AND Label = 2");
$jumlahdatam32_ = mysqli_fetch_array($jumlahdatam32);

$jumlahdata_["JUMLAH"];
$jumlahdatalabel1_["JUMLAH"];
$jumlahdatalabel2_["JUMLAH"];

$label1 = $jumlahdatalabel1_["JUMLAH"] / $jumlahdata_["JUMLAH"];
$label2 = $jumlahdatalabel2_["JUMLAH"] / $jumlahdata_["JUMLAH"]; 

$js11 = $jumlahdatajs11_["JUMLAH"] / $jumlahdatalabel1_["JUMLAH"];
$js12 = $jumlahdatajs12_["JUMLAH"] / $jumlahdatalabel2_["JUMLAH"];
$js21 = $jumlahdatajs21_["JUMLAH"] / $jumlahdatalabel1_["JUMLAH"];
$js22 = $jumlahdatajs22_["JUMLAH"] / $jumlahdatalabel2_["JUMLAH"];
$js31 = $jumlahdatajs31_["JUMLAH"] / $jumlahdatalabel1_["JUMLAH"];
$js32 = $jumlahdatajs32_["JUMLAH"] / $jumlahdatalabel2_["JUMLAH"];

$k11 = $jumlahdatak11_["JUMLAH"] / $jumlahdatalabel1_["JUMLAH"];
$k12 = $jumlahdatak12_["JUMLAH"] / $jumlahdatalabel2_["JUMLAH"];
$k21 = $jumlahdatak21_["JUMLAH"] / $jumlahdatalabel1_["JUMLAH"];
$k22 = $jumlahdatak22_["JUMLAH"] / $jumlahdatalabel2_["JUMLAH"];
$k31 = $jumlahdatak31_["JUMLAH"] / $jumlahdatalabel1_["JUMLAH"];
$k32 = $jumlahdatak32_["JUMLAH"] / $jumlahdatalabel2_["JUMLAH"];

$m11 = $jumlahdatam11_["JUMLAH"] / $jumlahdatalabel1_["JUMLAH"];
$m12 = $jumlahdatam12_["JUMLAH"] / $jumlahdatalabel2_["JUMLAH"];
$m21 = $jumlahdatam21_["JUMLAH"] / $jumlahdatalabel1_["JUMLAH"];
$m22 = $jumlahdatam22_["JUMLAH"] / $jumlahdatalabel2_["JUMLAH"];
$m31 = $jumlahdatam31_["JUMLAH"] / $jumlahdatalabel1_["JUMLAH"];
$m32 = $jumlahdatam32_["JUMLAH"] / $jumlahdatalabel2_["JUMLAH"];

if(isset($_POST['Submit'])) {   
    $dgb = mysqli_real_escape_string($mysqli, $_POST['dgb']);
    $js = mysqli_real_escape_string($mysqli, $_POST['js']);
    $k = mysqli_real_escape_string($mysqli, $_POST['k']);
    $m = mysqli_real_escape_string($mysqli, $_POST['m']);
    $latitude = mysqli_real_escape_string($mysqli, $_POST['latitude']);
    $longitude = mysqli_real_escape_string($mysqli, $_POST['longitude']);
    
    // $result = mysqli_query($mysqli, "INSERT INTO `tb_input` 
 //    (`DGB`, `JS`, `K`, `M`, `Latitude`, `Longitude`) 
 //    VALUES 
 //    ('$dgb', '$js', '$k', '$m', `$latitude`, `$longitude`)"
 //    );
}
?>

<html>
<head>  
    <title>Perhitungan</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCYgd6G3F2DTPax4Mg4s7shnVbUYiRRx7g&callback=initMap"></script>
	
    <script>
		function initMap() {
            
            // membuat objek untuk titik koordinat
            const myLatLng = { lat: <?=$latitude;?>, lng: <?=$longitude;?> };
            
            // membuat objek peta   
            const map = new google.maps.Map(document.getElementById("map"), {
            zoom: 7,
            center: myLatLng,
            });

            // membuat marker   
            const marker = new google.maps.Marker({
                position: myLatLng,
                map: map,
                animation: google.maps.Animation.BOUNCE
            });

            // membuat konten untuk info window
            // const contentString = '<div>Daerah Gempa Bumi: <?=$dgb;?></div>';

            // membuat objek info window
            const infowindow = new google.maps.InfoWindow({
                content: contentString,
                position: myLatLng,
            });

            // event saat marker diklik
            marker.addListener('click', function() {
            // tampilkan info window di atas marker
            infowindow.open(map);   
            });
            
}
	</script>
</head>

<body>
<br>
<div class="container">
    <h5>Proses Perhitungan Naive Bayes</h5>
    <div class="row">
        <div class="col">
            <br>
            <h5>Hasil Input untuk Diklasifikasi</h5>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">Daerah Gempa Bumi</th>
                        <th scope="col">Jenis Sesar</th>
                        <th scope="col">Kedalaman(Km)</th>
                        <th scope="col">Magnitudo(SR)</th>
                        <th scope="col">Latitude</th>
                        <th scope="col">Longitude</th>
                    </tr>   
                </thead>
                  <tbody>
                    <tr>
                      <?php 
                        echo "<tr>";
                        echo "<td>".$dgb."</td>";
                        echo "<td>".$js."</td>";    
                        echo "<td>".$k."</td>";
                        echo "<td>".$m."</td>";
                        echo "<td>".$latitude."</td>";
                        echo "<td>".$longitude."</td>"; 
                        ?>
                    </tr>
                  </tbody>
            </table>
            <br>
            <h5>Maka, Probabilitasnya adalah = </h5>
            <?php 
                if ($js == 1) {
                    $xjs = $js11;
                    
                } elseif ($js == 2) {
                    $xjs =  $js21;
                    
                } elseif ($js == 3) {
                    $xjs =  $js31;
                    
                } 

                if ($k < 70) {
                    $xk = $k11;
                    
                } elseif ($k >= 70 && $k < 300) {
                    $xk =  $k21;
                    
                } elseif ($k >= 300) {
                    $xk =  $k31;
                    
                } 

                if ($m >=  0 && $m <= 6.9) {
                    $xm = $m11;
                    
                } elseif ($m >= 7.0 && $m <= 8.0 ) {
                    $xm = $m21;
                    
                } elseif ($m > 8.0 ) {
                    $xm =  $m31;
                    
                }
                
                $pl1 = $xjs*$xk*$xm*$label1;
                
            ?>
            <?php
                if ($js == 1) {
                    $yjs = $js12;
                    
                } elseif ($js == 2) {
                    $yjs =  $js22;
                    
                } elseif ($js == 3) {
                    $yjs =  $js32;
                    
                } 

                if ($k < 70) {
                    $yk = $k12;
                    
                } elseif ($k >= 70 && $k < 300) {
                    $yk =  $k22;
                    
                } elseif ($k >= 300) {
                    $yk =  $k32;
                    
                } 

                if ($m >=  0 && $m <= 6.9) {
                    $ym = $m12;
                    
                } elseif ($m >= 7.0 && $m <= 8.0 ) {
                    $ym = $m22;
                    
                } elseif ($m > 8.0 ) {
                    $ym =  $m32;
                    
                }
                
                $pl2 = $yjs*$yk*$ym*$label2;
                
                $persen1 = $pl1 / ($pl1 + $pl2);
                $persen2 = $pl2 / ($pl1 + $pl2);

                echo "P (X | Group = 1) = ".$persen1."<br>";
                echo "P (X | Group = 2) = ".$persen2."<br>";

                $satu = '1';
                $dua = '2';

                if ($persen1 > $persen2){
                    echo "<br>";
                    echo "<p> <font color=red size='44p' weight='bold'> Berpotensi Tsunami ! </font> </p>";
                    echo "<br>";
                    $result = mysqli_query($mysqli, "INSERT INTO `tb_input` 
                        (`DGB`, `JS`, `K`, `M`, `Latitude`, `Longitude`, `Label`) 
                        VALUES 
                        ('$dgb', '$js', '$k', '$m', '$latitude', '$longitude', '$satu')"
                        );
                } else if ($persen1 < $persen2) {
                    echo "<br>";
                    echo "<p> <font size='44p'> Tidak Berpotensi Tsunami </font> </p>" ;
                    echo "<br>";
                    $result = mysqli_query($mysqli, "INSERT INTO `tb_input` 
                        (`DGB`, `JS`, `K`, `M`, `Latitude`, `Longitude`, `Label`) 
                        VALUES 
                        ('$dgb', '$js', '$k', '$m', '$latitude', '$longitude', '$dua')"
                        );
                }
            ?>
            <br>
            <a href="./nbc.php" class="btn btn-primary">Kembali</a>
        </div>
        <div class="w-100"></div>
    </div>
    <div id="map" style="width:100%;height:600px;"></div>
            </div>
</div>
</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>
