<?php
//koneksi database
include 'koneksi.php';

//menangkap data yang dikirim dari form
$idCard = $_POST['idcard'];
$nama = $_POST['nama'];
$nomorHP = $_POST['nomorHP'];
$dept = $_POST['dept'];
$jabatan = $_POST['jabatan'];
$pass = $_POST['pass'];

//menginput data ke database
mysqli_query($koneksi,"insert into aksesRegistrasi values('$idCard','$nama','$nomorHP','$dept','$jabatan','$pass')");

header("location:Register.php")
?>
