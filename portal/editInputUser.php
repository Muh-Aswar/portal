<?php
include 'koneksi.php';
$id = $_GET['id'];
$data = mysqli_query($koneksi,"select * from inputUser where id='$id'");
while ($d = mysqli_fetch_array($data)) {
  ?>
<div class="containerEditInputUser">
  <form class="editInputuser" action="updateInputuser.php" method="post">
    <div class="userInput">
      <h3>+ Di isi oleh user</h3>
      <div class="containerUserInput">
        <div class="containerUserInputKiri">
          <p>Tanggal</p>
          <input type="date" placeholder="tanggal..." name="tanggal" value="<?php echo $d['tanggal']; ?>">
          <br></br>

          <p>Departemen</p>
          <input type="radio" name="dept" value="IRGA"<?php if ($d['dept']=='IRGA')echo 'checked'; ?>>
          <label for="dept">IRGA</label>
          <input type="radio" name="dept" value="PACKAGING" <?php if ($d['dept']=='PACKAGING')echo 'checked'; ?>>
          <label for="dept">PACKAGING</label>
          <input type="radio" name="dept" value="PRODUKSI" <?php if ($d['dept']=='PRODUKSI')echo 'checked'; ?>>
          <label for="dept">PRODUKSI</label>
          <br></br>

          <p>Status</p>
          <input type="radio" name="status" value="urgent"<?php if ($d['status']=='urgent') echo 'checked'; ?>>
          <label for="urgent">Urgent</label>
          <input type="radio" name="status" value="normal"<?php if ($d['status']=='normal') echo 'checked'; ?>>
          <label for="urgent">Normal</label>
          <br></br>
        </div>

        <div class="containerUserInputKanan">
          <p>Kegiatan</p>
          <input type="radio" name="kegiatan" value="baru"<?php if ($d['kegiatan']=='baru') echo 'checked'; ?>>
          <label for="kegiatan">Ganti Baru</label>
          <input type="radio" name="kegiatan" value="modif"<?php if ($d['kegiatan']=='modif') echo 'checked'; ?>>
          <label for="kegiatan">Modifikasi</label>
          <input type="radio" name="kegiatan" value="repair"<?php if ($d['kegiatan']=='repair') echo 'checked'; ?>>
          <label for="kegiatan">repair</label>
          <br></br>

          <p>Lokasi</p>
          <input type="radio" name="lokasi" value="1"<?php if ($d['lokasi']=='1') echo 'checked'; ?>>
          <label for="radio">1</label>
          <input type="radio" name="lokasi" value="2"<?php if ($d['lokasi']=='2') echo 'checked'; ?>>
          <label for="radio">2</label>
          <input type="radio" name="lokasi" value="3"<?php if ($d['lokasi']=='3') echo 'checked'; ?>>
          <label for="radio">3</label>
          <input type="radio" name="lokasi" value="4"<?php if ($d['lokasi']=='4') echo 'checked'; ?>>
          <label for="radio">4</label>
          <input type="radio" name="lokasi" value="5"<?php if ($d['lokasi']=='5') echo 'checked'; ?>>
          <label for="radio">5</label>
          <br></br>

          <p>Mesin</p>
          <select name="mesin">
            <option value="Line 1"<?php if($d['mesin']=='Line 1') echo "selected"; ?> >Line 1</option>
            <option value="Line 2"<?php if($d['mesin']=='Line 2') echo "selected"; ?> >Line 2</option>
            <option value="Line 3"<?php if($d['mesin']=='Line 4') echo "selected"; ?>>Line 3</option>
          </select>
        </div>
      </div>
      <p>Disertai Lampiran</p>
      <input type="radio" name="lampiran" value="ya"<?php if ($d['lampiranStatus']=='ya') echo 'checked'; ?>>
      <label for="lampiran">Ya</label>
      <input type="radio" name="lampiran" value="tidak"<?php if ($d['lampiranStatus']=='tidak') echo 'checked'; ?>>
      <label for="lampiran">Tidak</label>
      <p>Deskripsi Lampiran</p>
      <textarea name="deskLampiran" rows="3" cols="25" placeholder="<?php echo $d['lampiranDesk']; ?>"></textarea>
      <br></br>
<!-- Untuk form persetujuan -->
      <div class="containerPersetujuan">
        <div class="persetujuan">
          <table>
            <tbody>
              <tr>
                <td bgcolor="#e2e179">Diminta</td>
                <td bgcolor="#e2e179">Diperiksa</td>
                <td bgcolor="#e2e179">Disetujui</td>
              </tr>
              <tr height="70px">
                <td>TTD</td>
                <td>TTD</td>
                <td>TTD</td>
              </tr>
              <tr>
                <td>User</td>
                <td>UH / SH </td>
                <td>DH</td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="serahTerima">
          <table>
            <tbody>
              <tr>
                <td colspan="2" bgcolor="#e2e179">Serah Terima</td>
              </tr>
              <tr height="70px">
                <td>TTD</td>
                <td>TTD</td>
              </tr>
              <tr>
                <td>PIC Area</td>
                <td>UH / SH / DH</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
        <div class="containerBtn">
          <button class="btn-success" type="submit" name="simpan">Simpan</button>
        </div>
      </div>
  </form>
</div>
  <?php
}


?>
