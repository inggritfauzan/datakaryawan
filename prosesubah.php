<?php
    require "koneksi.php";
    $id = $_GET['id'];
    $namaa = $_GET['nm'];
    $tanggallahir = $_GET['tgl'];
    $alamatt= $_GET['almt'];
    $jeniskelamin = $_GET['jk'];
    $perintah = "UPDATE datakaryawan SET nama='$namaa', tanggal_lahir='$tanggallahir', alamat='$alamatt', jenis_kelamin='$jeniskelamin'
                 WHERE id='$id'";
    $ubah = mysqli_query($terhubung, $perintah);
    if(!$ubah)
        echo "Maaf, ubah data gagal";
    else
        header("location:programutama.php");
    
?>
