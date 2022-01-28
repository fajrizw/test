<?php

include 'lib/library.php';

$sql = "SELECT * FROM kelas";
    $dataKelas = $mysqli->query($sql) or die($mysqli->error);

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $nis = $_POST['nis'];
    $nama_lengkap = $_POST['nama_lengkap'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $kelas = $_POST['id_kelas'];
   

    $sql = "INSERT INTO siswa (nis, nama_lengkap, jenis_kelamin, id_kelas) VALUES ('$nis','$nama_lengkap','$jenis_kelamin','$kelas')";
    $mysqli->query($sql) or die ($mysqli->error);

    
    header('location: index.php');


}

include 'views/v_tambah.php';

?>
