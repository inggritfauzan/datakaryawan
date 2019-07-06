<html>
<head>
    <title> Daftar Karyawan </title>
    <meta charset="utf-8">
    <meta name content="viewport" content="width = device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2 align="center">Daftar Karyawan </h2>     
  <p> Tambah data karyawan
  <td><a href="tambahdata.php"><button type="button" class="btn btn-success">Tambah </button></a></td>    
  </p>
  <table class="table table-hover">
    <thead>
      <tr align="center">
        <th>Id</th>
        <th>Nama</th>
        <th>Tanggal_lahir</th>
        <th>Alamat</th>
        <th>Jenis_Kelamin</th>
        <th>Aksi</th>
      </tr>
    </thead>
    <tbody>
       <?php
        include "koneksi.php";
        $perintah = "SELECT * FROM datakaryawan";
        $tampil = mysqli_query($terhubung,$perintah);
        while($hasil = mysqli_fetch_array($tampil)){    
    ?>
    
    <tr>
        <td align="center"><?php echo $hasil[0]; ?></td>
        <td align="center"><?php echo $hasil[1]; ?></td>
        <td align="center"><?php echo $hasil[2]; ?></td>
        <td align="center"><?php echo $hasil[3]; ?></td>
        <td align="center"><?php echo $hasil[4]; ?></td>
        <td><a href="ubahdata.php?id=<?php 
        echo $hasil[0]; ?>&nm=<?php 
        echo $hasil[1]; ?>&tgl=<?php 
        echo $hasil[2]; ?>&almt=<?php 
        echo $hasil[3]; ?>&jk=<?php
        echo $hasil[4]; ?>"<button type="button" class="btn btn-success">Ubah</button></a> 
        <a href="hapusdata.php?id=<?php 
        echo $hasil[0]; ?>&nm=<?php 
        echo $hasil[1]; ?>&tgl=<?php 
        echo $hasil[2]; ?>&almt=<?php
        echo $hasil[3]; ?>&jk=<?php
        echo $hasil[4]; ?>"<button type="button" class="btn btn-warning">Hapus</button></a>
        </td>
    </tr>
    
    <?php
        }

    ?>
    </tbody>
  </table>
</div>
</body>
</html>

