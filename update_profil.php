<?php
//update_profil.php
$mysqli = $mysqli_connect("localhost", "root", "", "potensi_tsunami");
if(!empty($_POST))
{
    $output = '';
        $nama = mysqli_real_escape_string($mysqli, $_POST["nama"]);
        $email = mysqli_real_escape_string($mysqli, $_POST["email"]);
        $username = mysqli_real_escape_string($mysqli, $_POST["username"]);
        $query = "
        update user set nama = '$nama', email = '$email', username = '$username' where id = '$_POST[id]'
        ";

        if(mysqli_query($mysqli, $query))
        {
            $output .= '<label class="text-success">Data Berhasil Diupdate</label>';
            $select_query = "SELECT * FROM user ORDER BY id DESC";
            $result = mysqli_query($mysqli, $select_query);
            $output .= '
                <table class="table table-bordered">
                                <tr>
                                    <th>Nama User</th>
                                    <th>
        }
}