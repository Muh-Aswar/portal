<?php
include 'koneksi.php';

// Menangkap data dari form
$tglDikerja = $_POST['tglDikerja'];
$estimasi = $_POST['estimasi'];
$namaTeknisi = $_POST['namaTeknisi'];
$namaPerwakilan = $_POST['namaPerwakilan'];
$potensiKontaminasi = $_POST['potensiKontaminasi'];



// Melakukan pengecekan pada form
if ($tglDikerja=="") {
  echo "<script>alert('Tanggal Belum Diisi');history.go(-1);</script>";
}
if ($estimasi=="") {
  echo "<script>alert('Estimasi Belum Diisi');history.go(-1);</script>";
}
if ($namaTeknisi=="") {
  echo "<script>alert('Nama Teknisi Belum Diisi');history.go(-1);</script>";
}
if ($namaPerwakilan=="") {
  echo "<script>alert('Nama Perwakilan Belum Diisi');history.go(-1);</script>";
}
if ($potensiKontaminasi=="") {
  echo "<script>alert('Potensi Kontaminasi Belum Diisi');history.go(-1);</script>";
}


// Menginput data dari form ke database
$input = "insert into inputKoordinasi (tglDikerja,estimasi,namaTeknisi,namaPerwakilan,potensiKontaminasi) values('$tglDikerja','$estimasi','$namaTeknisi','$namaPerwakilan','$potensiKontaminasi')";
$query_input = mysqli_query($koneksi, $input);
if ($query_input) {
  echo "<script>alert('Data Berhasil di Input');window.location='form.html'</script>";
}else {
  echo "Gagal....".mysql_error();
}

?>
