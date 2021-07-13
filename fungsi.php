<?php

function getKategori($nilai)
{
    $ret = '';
    if($nilai == 1)
    {
        $ret = 'Horizontal';
    }else if($nilai == 2)
    {
        $ret = 'Vertikal';
    }else if($nilai == 3)
    {
        $ret = 'Oblique';
    }
    return $ret;
} 

function getLabel($nilai)
{
    $ret = '';
    if($nilai == 1)
    {
        $ret = 'Tsunami';
    }else if($nilai == 2)
    {
        $ret = 'Tidak Tsunami';
    }
    return $ret;
}
function getLabel1($nilai)
{
    $ret = '';
    if($nilai == 1)
    {
        $ret = 'Berpotensi Tsunami';
    }else if($nilai == 2)
    {
        $ret = 'Tidak Berpotensi Tsunami';
    }
    return $ret;
}
function ubahTraining($data){

    global $mysqli;

    $id = $data['ID'];
    $dgb = $data['DGB'];
    $js = $data['JS'];
    $k = $data['K'];
    $m = $data['M'];
    $latitude = $data['Latitude'];
    $longitude = $data['Longitude'];
    $label = $data['Label'];

    mysqli_query($mysqli, "UPDATE tb_training SET
                    DGB = '$dgb',
                    JS = '$js',
                    K = '$k',
                    M = '$m',
                    Latitude = '$latitude',
                    Longitude = '$longitude',
                    Label = '$label'
                WHERE ID = $id
    ");

   return mysqli_affected_rows($mysqli);
}

//Menambah Data Baru
if(isset($_POST['addnewdata'])){
    $dgb = $_POST['DGB'];
    $js = $_POST['JS'];
    $k = $_POST['K'];
    $m = $_POST['M'];
    $latitude = $_POST['Latitude'];
    $longitude = $_POST['Longitude'];
    $label = $_POST['Label'];

    $addtotabel = mysqli_query($mysqli, "insert into tb_training (DGB, JS, K, M, Latitude, Longitude, Label) values('$dgb', '$js', '$k', '$m', '$latitude', '$longitude', '$label')");
    if($addtotabel){
        header('location: data_admin.php');
    } else {
        echo 'Gagal Menambahkan Data!';
        header('location: data_admin.php');
    }
}
?>