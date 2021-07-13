<?php

require_once 'config.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $q = $mysqli->query("DELETE FROM user WHERE ID = '$id'");

    if ($q) {
        echo "<script>alert('Data berhasil dihapus'); window.location.href='data_user.php'</script>";
    } else {
        echo "<script>alert('Data gagal dihapus'); window.location.href='data_user.php'</script>";
    }
} else {
    header('Location:data_user.php');
}
?>