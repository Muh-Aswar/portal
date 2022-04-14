<?php
include 'koneksi.php';

// Menangkap data dari form
$tanggal = $_POST['tanggal'];
$dept = $_POST['dept'];
$status = $_POST['status'];
$kegiatan = $_POST['kegiatan'];
$lokasi = $_POST['lokasi'];
$mesin = $_POST['mesin'];
$lampiran = $_POST['lampiran'];
$deskLampiran = $_POST['deskLampiran'];



// Melakukan pengecekan pada form
if ($tanggal=="") {
  echo "<script>alert('Tanggal Belum Diisi');history.go(-1);</script>";
}
if ($dept=="") {
  echo "<script>alert('Departement Belum Diisi');history.go(-1);</script>";
}
if ($status=="") {
  echo "<script>alert('Status Belum Diisi');history.go(-1);</script>";
}
if ($kegiatan=="") {
  echo "<script>alert('Kegiatan Belum Diisi');history.go(-1);</script>";
}
if ($lokasi=="") {
  echo "<script>alert('Lokasi Belum Diisi');history.go(-1);</script>";
}
if ($mesin=="") {
  echo "<script>alert('Mesin Belum Diisi');history.go(-1);</script>";
}
if ($lampiran=="") {
  echo "<script>alert('Lampiran Belum Diisi');history.go(-1);</script>";
}
if ($deskLampiran=="") {
  echo "<script>alert('Deskripsi Belum Diisi');history.go(-1);</script>";
}


// Menginput data dari form ke database
$input = "insert into inputUser (tanggal,dept,status,lampiranStatus,lampiranDesk,kegiatan,lokasi,mesin) values('$tanggal','$dept','$status','$lampiran','$deskLampiran','$kegiatan','$lokasi','$mesin')";
$query_input = mysqli_query($koneksi, $input);
if ($query_input) {
  echo "<script>alert('Data Berhasil di Input');window.location='form.html'</script>";
}else {
  echo "Gagal....".mysql_error();
}

?>
