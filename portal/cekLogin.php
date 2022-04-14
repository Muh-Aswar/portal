<?php
session_start();

include 'koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];


// Menyeleksi data user dengan username dan password yang Sesuai
$login = mysqli_query($koneksi,"select * from aksesRegistrasi where nama='$username' and password='$password'");
// Menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);

// Cek apakah username dan password di temukan pada database
if ($cek > 0 ) {
  $data = mysqli_fetch_assoc($login);

  // Cek jika user login sebagai admin
  if ($data['jabatan']=="UH") {
    // Buat session logi dan Username
    $_SESSION['nama'] = $username;
    $_SESSION['jabatan'] = "UH";
    // Alihkan ke halaman dashboard admin
    header("location:form.php");

  // Cek jika user login sebagai pegawai
}else if ($data['jabatan']=="OPERATOR") {
    // Buat session login dan Username
    $_SESSION['nama'] = $username;
    $_SESSION['jabatan']= "OPERATOR";
    // Alihkan ke halaman dashboard pegawai
    header("location:halamanPegawai.php");


  }elseif ($data['jabatan']=="ADMIN") {
    // Buat session login dan Username
    $_SESSION['nama'] = $username;
    $_SESSION['jabatan'] = "ADMIN";
    // Alihkan ke halaman dashboard pengurus
    header("location:form.php");
  }else {
    // Alihkan ke halaman Login Kembali
    header("location:halaman404.php");
  }
}else {
  echo "terjadi kesalahan".mysqli_error();
  //header("location:login.php?pesan=gagal");
}

?>
