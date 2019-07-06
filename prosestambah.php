<?php
    require "koneksi.php";
    $id = $_GET['id'];
    $nama = $_GET['nm'];
    $tanggal_lahir = $_GET['tgl'];
    $alamat = $_GET['almt'];
    $jenis_kelamin = $_GET['jk'];
    $perintah = "INSERT INTO datakaryawan VALUES('$id', '$nama', '$tanggal_lahir', '$alamat','$jenis_kelamin')";
    $tambah = mysqli_query($terhubung, $perintah);
    if(!$tambah)
        echo "Maaf, tambah data gagal";
    else
        header("location:programutama.php");
?>