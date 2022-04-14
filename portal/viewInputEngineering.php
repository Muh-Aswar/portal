<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>View User Input</title>
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <div class="brandLogo">
      <img src="asset/logo.png" alt="myr">
      <h1> Irga Portal </h1>
    </div>


    <?php
    include 'koneksi.php';
    $no = 1;
    $data = mysqli_query($koneksi,"select * from InputEngineering");
    ?>
      <table>
        <tr>
          <th> NO</th>
          <th> TINDAKAN </th>
          <th> ANALISA </th>
          <th> PELAKSANA </th>
          <th> MULAI </th>
          <th> SELESAI </th>
          <th> DOWN TIME </th>
          <th> LAMA DOWN TIME </th>
          <th> CATATAN </th>
          <th> OPSI </th>
        </tr>
    <?php
      while ($d = mysqli_fetch_array($data)) {
        ?>
          <tr>
            <td> <?php echo $no++; ?> </td>
            <td> <?php echo $d['tindakan']; ?> </td>
            <td> <?php echo $d['analisa']; ?> </td>
            <td> <?php echo $d['pelaksana']; ?> </td>
            <td> <?php echo $d['mulaiPengerjaan']; ?> </td>
            <td> <?php echo $d['selesaiPengerjaan']; ?> </td>
            <td> <?php echo $d['downTime']; ?> </td>
            <td> <?php echo $d['lamaDownTime']; ?> </td>
            <td> <?php echo $d['catatan']; ?> </td>
            <td>
              <a href="editInputUser.php?id=<?php echo $d['id']; ?>"><button class="btn-primary"> Edit </button> </a>
              <a href="hapusInputUser.php?id=<?php echo $d['id']; ?>"><button class="btn-danger"> Hapus </button> </a>
            </td>
          </tr>
        <?php
      }
    ?>
    </table>
  </body>
</html>
