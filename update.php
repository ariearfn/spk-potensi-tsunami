<?php

require_once 'config.php';

if (isset($_GET['ID'])) {
    $id = $_GET['ID'];

    $q = $mysqli->query("SELECT * FROM tb_training WHERE ID = '$id'");

    foreach ($q as $dt) :
    ?>

    <h1>ABCDEFG</h1>
    <h2>Halaman Ubah Data<h2>

    <form action="proses_update.php" method="post">
        <input type="hidden" name="ID" value="<?= $dt['ID'] ?>">
        <input type="text" name="DGB" value="<?= $dt['DGB'] ?>">
        <input type="number" name="JS" value="<?= $dt['JS'] ?>">
        <input type="text" name="K" value="<?= $dt['K'] ?>">
        <input type="text" name="M" value="<?= $dt['M'] ?>">
        <input type="text" name="Latitude" value="<?= $dt['Latitude'] ?>">
        <input type="text" name="Longitude" value="<?= $dt['Longitude'] ?>">
        <input type="number" name="Label" value="<?= $dt['Label'] ?>">

        <input type="submit" name="submit" value="Ubah Data">
    </form>

    <?php
    endforeach;
}
