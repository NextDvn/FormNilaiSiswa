<?php
include '../aset/header.php';
include 'koneksi.php';

$sql = "SELECT * FROM nilai_siswa";

$res = mysqli_query($koneksi, $sql);

$pinjam = array();

while ($data = mysqli_fetch_assoc($res)) {
  $pinjam[] = $data;
}

?>
<style>
.container {
  position: relative;
}

.bottomright {
  position: absolute;
  bottom: 16px;
  right: 16px;
}
.bottomright2 {
  position: absolute;
  bottom: 16px;
  right: 70px;
}

img {
  width: 42px;
  height: 42px;
}
thead{
  background-color: #222831;
  color: white;
}
tbody{
  background-color: #414854;
  color: white;
}
</style>
<div class="container">
  <div class="row mt-4">
    <div class="col-md">
      <div class="card bg-dark">
        <div class="card-header">
          <h2 class="card-title text-white"><i class="fas fa-edit"></i>Tabel Nilai Siswa</h2>
        </div>
        <div class="card-body">
          <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">NIS</th>
                <th scope="col">Nama</th>
                <th scope="col">Jurusan</th>
                <th scope="col">Kelas</th>
                <th scope="col">Alamat</th>
                <th scope="col">Nilai Web</th>
                <th scope="col">Nilai PBO</th>
                <th scope="col">Nilai Basdat</th>
                <th scope="col">Nilai Desain</th>
                <th scope="col">Nilai ProgDas</th>
                <th scope="col">Nilai Rata-rata</th>
                <th scope="col">Predikat Nilai</th>
                <th scope="col">Keterangan</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $no = 1;
              foreach ($pinjam as $p ) { ?>
                <tr>
                  <th scope="row"><?= $no ?></th>
                    <td><?= $p['nis'] ?></th>
                    <td><?= $p['nama'] ?></td>
                    <td><?= $p['jurusan'] ?></td>
                    <td><?= $p['kelas'] ?></td>
                    <td><?= $p['alamat'] ?></td>
                    <td><?= $p['nilai_web'] ?></td>
                    <td><?= $p['nilai_pbo'] ?></td>
                    <td><?= $p['nilai_basdat'] ?></td>
                    <td><?= $p['nilai_desain'] ?></td>
                    <td><?= $p['nilai_progdas'] ?></td>
                    <td><?= $p['ratarata'] ?></td>
                    <td><?= $p['predikat'] ?></td>
                    <td><?= $p['keterangan'] ?></td>
                  </tr>
                  <?php
                  $no++;
                }
                ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
  <a href="https://www.instagram.com/gregoriusdevon/" target="_blank">
    <img class="bottomright" src="https://image.flaticon.com/icons/svg/2111/2111463.svg" alt="Instagram">
  </a>
  <a href="https://twitter.com/DevonMalang" target="_blank">
    <img class="bottomright2" src="https://images.vexels.com/media/users/3/137419/isolated/preview/b1a3fab214230557053ed1c4bf17b46c-twitter-icon-logo-by-vexels.png" alt="Instagram">
  </a>

  <?php
  include '../aset/footer.php';
  ?>
