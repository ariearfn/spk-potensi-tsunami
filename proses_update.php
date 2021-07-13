<?php

require_once 'config.php';

if(isset($_POST['submit'])) {
    $dgb = $_POST['DGB'];
    $js = $_POST['JS'];
    $k = $_POST['K'];
    $m = $_POST['M'];
    $lat = $_POST['Latitude'];
    $long = $_POST['Longitude'];
    $lab = $_POST['Label'];

    $q = $mysqli->query("UPDATE tb_training SET DGB = '$dgb', JS = '$js', K = '$k', M = '$m', Latitude = '$lat', Longitude = '$long', Label = '$lab' WHERE ID = '$id'");

    if($q) {
        echo "<script>alert('Data berhasil diubah'); window.location.href='$data.php'</script>";
    } else {
        echo "<script>alert('Data gagal diubah'); window.location.href='$data.php'</script>";
    }
} else {
    header('Location: data.php');
}