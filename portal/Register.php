<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Form Registrasi</title>
    <link rel="stylesheet" href="css/styleRegister.css">
  </head>
  <body>
    <div class="containerHeader">
      <img src="asset/logo.png" alt="myr">
      <h1> Irga Portal </h1>
    </div>
    <div class="containerFormRegister">
      <h1>Registrasi Form</h1>
      <form class="formRegister" action="aksiRegistrasi.php" method="post">
        <p>ID Card</p>
        <input type="number" placeholder="Nomor Induk Karyawan" name="idcard">
        <p>Nama</p>
        <input type="text" placeholder="Nama Untuk Username" name="nama">
        <p>Nomor HP</p>
        <input type="number" placeholder="Nomor HP Yang Dapat Di Hubungi" name="nomorHP">
        <p>Departemen</p>
        <input type="text" placeholder="Departemen" name="dept">
        <p>Jabatan</p>
        <input type="text"placeholder="Jabatan Sesuai Kontrak" name="jabatan">
        <p>Password</p>
        <input type="password" placeholder="Password" name="pass">
        <br></br>
        <button type="submit" name="register">Registrasi</button>
        <h5>Kembali halaman <a href="login.php">Login</a> </h5>
      </form>
    </div>

  </body>
</html>
