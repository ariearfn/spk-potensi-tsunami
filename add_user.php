<?php 

require_once 'config.php';

if (isset($_POST['submit'])){
// if ($_GET(['act']== 'tambahdata'){
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
 

    $querytambah = $mysqli->query("INSERT INTO user VALUES ('', '$nama', '$email', '$username', '$password')");
    
    if ($querytambah) {
        
        header("location:data_user.php");
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

