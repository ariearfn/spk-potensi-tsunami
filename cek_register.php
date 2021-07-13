<?php

// menghubungkan php dengan koneksi database
include 'config.php';

// menangkap data yang dikirim dari form register
$nama = $_POST['nama'];
$email = $_POST['email'];
$username = $_POST['username'];
$password = md5($_POST['password']); //enkripsi md5
$level = $_POST['level'];

//Query input menginput data kedalam tabel anggota
$sql = "INSERT INTO user (nama, email, username, password, level) VALUES
('$nama','$email','$username','$password','$level')";

//Mengeksekusi/menjalankan query diatas	
$hasil=mysqli_query($mysqli,$sql);

//Kondisi apakah berhasil atau tidak
if ($hasil) {
    echo "<script>alert('Berhasil mendaftar'); window.location.href='index.php'</script>";
	exit;
  }
else {
    echo "<script>alert('Gagal mendaftar'); window.location.href='index.php'</script>";
	exit;
}  

?>