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
    $data = mysqli_query($koneksi,"select * from inputUser");
    ?>
      <table>
        <tr>
          <th> NO</th>
          <th> TANGGAL</th>
          <th> STATUS </th>
          <th> KEGIATAN </th>
          <th> LOKASI </th>
          <th> MESIN </th>
          <th> LAMPIRAN </th>
          <th> DESKRIPSI LAMPIRAN </th>
          <th> OPSI </th>
        </tr>
    <?php
      while ($d = mysqli_fetch_array($data)) {
        ?>
          <tr>
            <td> <?php echo $no++; ?> </td>
            <td> <?php echo $d['tanggal']; ?> </td>
            <td> <?php echo $d['status']; ?> </td>
            <td> <?php echo $d['kegiatan']; ?> </td>
            <td> <?php echo $d['lokasi']; ?> </td>
            <td> <?php echo $d['mesin']; ?> </td>
            <td> <?php echo $d['lampiranStatus']; ?> </td>
            <td> <?php echo $d['lampiranDesk']; ?> </td>
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
