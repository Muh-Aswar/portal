<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Form Login</title>
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>


      <div class="brandLogo">
        <img src="asset/logo.png" alt="myr">
        <h1> Irga Portal </h1>
      </div>


    <?php
     if (isset($_GET['pesan'])) {
       if ($_GET['pesan']=="gagal") {
         echo "<div class='alert'> Username dan Password tidak sesuai! </div>";
       }
     }
    ?>

    <section class="containerLogin">
      <div class="containerFormLogin">
        <form class="formLogin" action="cekLogin.php" method="post">
          <h3>Welcome</h3>
          <p>Username</p>
          <input type="text" name="username" placeholder="Username">
          <p>Password</p>
          <input type="password" name="password" placeholder="Password">
          <br></br>
          <button type="submit" name="login">LOGIN</button>
          <h5>Belum punya akun ? <a href="Register.php"> Register</a> </h5>
        </form>

      </div>
      <div class="containerLogologin">
        <img src="asset/login.jpg" alt="">
      </div>
    </section>

  </body>
</html>
