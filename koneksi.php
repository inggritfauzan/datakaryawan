<?php
    $host = "localhost"; 
    $user = "root";
    $password = "";
    $db = "karyawan";
    $terhubung = mysqli_connect($host,$user,$password,$db);
    if(!$terhubung)
        echo "DATABASE TIDAK TERHUBUNG";

?>