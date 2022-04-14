<?php
include 'koneksi.php';

// Menangkap data dari form
$tindakan = $_POST['tindakan'];
$analisa = $_POST['analisa'];
$pelaksana = $_POST['pelaksana'];
$mulaiPengerjaan = $_POST['mulaiPengerjaan'];
$selesaiPengerjaan = $_POST['selesaiPengerjaan'];
$downTime = $_POST['downTime'];
$lamaDownTime = $_POST['lamaDownTime'];
$catatan = $_POST['catatan'];

// Melakukan Pengecekanpada form
if ($tindakan=="") {
  echo "<script>alert('Tindakan Belum Diisi');history.go(-1);</script>";
}
if ($analisa=="") {
  echo "<script>alert('Analisa Belum Diisi');history.go(-1);</script>";
}
if ($pelaksana=="") {
  echo "<script>alert('Pelasanaan Belum Diisi');history.go(-1);</script>";
}
if ($mulaiPengerjaan=="") {
  echo "<script>alert('Mulai Pengerjaan Belum Diisi');history.go(-1);</script>";
}
if ($selesaiPengerjaan=="") {
  echo "<script>alert('Selesai Pengerjaan Belum Diisi');history.go(-1);</script>";
}
if ($downTime=="") {
  echo "<script>alert('Down Time Belum Diisi');history.go(-1);</script>";
}
if ($lamaDownTime=="") {
  echo "<script>alert('Lama Down Time Belum Diisi');history.go(-1);</script>";
}
if ($catatan=="") {
  echo "<script>alert('Catatan Belum Diisi');history.go(-1);</script>";
}
// Menginput data dari form ke database
$input = "insert into InputEngineering (tindakan,analisa,pelaksana,mulaiPengerjaan,selesaiPengerjaan,downTime,lamaDownTime,catatan) values ('$tindakan','$analisa','$pelaksana','$mulaiPengerjaan','$selesaiPengerjaan','$downTime','$lamaDownTime','$catatan')";
$query_input = mysqli_query($koneksi,$input);
if ($query_input) {
  echo "<script>alert('Data Berhasil di Input');window.location='form.html'</script>";
}else {
  echo "Gagal......".mysql_error();
}

?>
