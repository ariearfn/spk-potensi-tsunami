<?php 

// koneksi ke database
include "config.php";

// enkripsi inputan password lama
$password_lama = md5($_POST['pass_lama']);

// panggil username
$username = $_POST['username'];

// uji jika password lama sesuai
$tampil = mysqli_query($mysqli, "SELECT * FROM user WHERE 
								username = '$username' AND password = '$password_lama'");
$data = mysqli_fetch_array($tampil);
// jika data ditemukan maka password sesuai
if($data){
	// uji jika password baru dan konfirmasi password sama
	$password_baru = $_POST['pass_baru'];
	$konfirmasi_password = $_POST['konfirmasi_pass'];

	if($password_baru == $konfirmasi_password){
		// proses ganti password
		// enkripsi password baru
		$pass_ok = md5($konfirmasi_password);
		$ubah = mysqli_query($mysqli, "UPDATE user SET password = '$pass_ok' 
										WHERE id = '$data[id]' ");
		if($ubah){
			echo "<script>alert('Password anda berhasil diubah!');document.location='landing.php'</script>";
		}
	} else {
		echo "<script>alert('Maaf, Password baru anda tidak sama!');document.location='password_user.php'</script>";
	}
} else {
	echo "<script>alert('Maaf, Password lama anda tidak sesuai/tidak terdaftar!');document.location='password_user.php'</script>";
}

 ?>