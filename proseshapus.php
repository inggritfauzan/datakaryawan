<?php
    require "koneksi.php";
    $id = $_GET['id'];
    $perintah = "DELETE FROM datakaryawan WHERE id='$id'";
    $hapus = mysqli_query($terhubung, $perintah);
    if(!$hapus)
        echo "Maaf, hapus data gagal";
    else
        header("location:programutama.php");
?>