<?php
  $host = "localhost"; 
  $user = "root";
  $pass = "";
  $nama_db = "starcom_upload"; 
  $koneksi = mysqli_connect($host,$user,$pass,$nama_db); 
  if(!$koneksi){ 
    die ("Koneksi dengan database gagal: ".mysql_connect_error());
  }
  
?>
