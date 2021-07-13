<?php 

require_once 'config.php';

if (isset($_POST['submit'])){
// if ($_GET(['act']== 'tambahdata'){
    $dgb = $_POST['DGB'];
    $js = $_POST['JS'];
    $k = $_POST['K'];
    $m = $_POST['M'];
    $lat = $_POST['Latitude'];
    $long = $_POST['Longitude'];
    $lab = $_POST['Label'];

    $querytambah = $mysqli->query("INSERT INTO tb_training VALUES ('', '$dgb', '$js', '$k', '$m', '$lat', '$long', '$lab')");
    
    if ($querytambah) {
        
        header("location:data_admin.php");
    }else{
        echo "ERROR, tidak berhasil".mysqli_error();
    }

}
//     $q = $mysqli->query("INSERT INTO tb_training VALUES ('', '$dgb', '$js', '$k', '$m', '$lat', '$long', '$lab')");

//     if ($q) {
//         echo "<script>alert('Data berhasil ditambahkan'); window.location.href='data_admin.php'</script>";
//     } else {
//         echo "<script>alert('Data gagal ditambahkan'); window.location.href='data_admin.php'</script>";
//     }
// } else {
//     header('Location: data_admin.php');
// }

