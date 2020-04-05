<?php

include 'koneksi.php';

if(isset($_POST['simpan']))
{
  $nis = $_POST['nis'];
  $nama = $_POST['nama'];
  $jurusan = $_POST['jurusan'];
  $kelas = $_POST['kelas'];
  $alamat = $_POST['alamat'];
  $nilai_web = $_POST['nilai_web'];
  $nilai_pbo = $_POST['nilai_pbo'];
  $nilai_basdat = $_POST['nilai_basdat'];
  $nilai_desain = $_POST['nilai_desain'];
  $nilai_progdas = $_POST['nilai_progdas'];
  $jumlah = $nilai_web+$nilai_pbo+$nilai_basdat+$nilai_desain+$nilai_progdas;
  $ratarata = $jumlah/5;
  if($ratarata >= 90)
  {
    $predikat='A';
    $keterangan='Excellent';
  }
  else if($ratarata >= 80)
  {
    $predikat='B';
    $keterangan='Baik';
  }
  else if($ratarata >= 70)
  {
    $predikat='C';
    $keterangan='Cukup';
  }
  else if($ratarata >= 60)
  {
    $predikat='D';
    $keterangan='Kurang';
  }
  else if($ratarata <= 50)
  {
    $predikat='E';
    $keterangan='Rendah';
  }
  $sql = "INSERT INTO nilai_siswa (nis, nama, jurusan, kelas, alamat, nilai_web, nilai_pbo, nilai_basdat, nilai_desain, nilai_progdas, ratarata, predikat, keterangan)
            VALUES ('$nis', '$nama', '$jurusan', '$kelas', '$alamat', '$nilai_web', '$nilai_pbo', '$nilai_basdat', '$nilai_desain', '$nilai_progdas', '$ratarata', '$predikat', '$keterangan')";

$res = mysqli_query($koneksi, $sql);

$count = mysqli_affected_rows($koneksi);

if($count == 1)
{
   header("Location: index.php");
}
else
{
   header("Location: tambah.php");
}
}

?>
