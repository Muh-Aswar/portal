<?php
$koneksi = mysqli_connect("localhost","root","","portal");

//check connection
if(mysqli_connect_errno()){
  echo "Koneksi ke database GAGAL !!!" .mysqli_connect_error();
}

?>
