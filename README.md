# FormNilaiSiswa

# Hasil Run Website

https://www.instagram.com/tv/B-me6k0DanP/?utm_source=ig_web_copy_link

# Penjelasan

Menggunakan 6 class : Form tambah,Proses tambah,Tabel,Koneksi,Footer, dan Header

Form Tabel dan Tambah:

Untuk form tabel dan tambah saya menggunakan code seperti Modul Persiapan Ukl, dengan tambahan feature Social Media link yang saya buat menggunakan image scr lalu ditambah link href.

Proses tambah :

untuk penambahan data hampir sama seperti Modul Persiapan Ukl, berbeda di proses rata-rata,predikat dan keterangan. Pada rata-rata saya menggunakan rumus (semua nilai mapel : 5), sedangkan untuk predikat dan keterangan saya menggunakan proses if else if agar dapat diproses sesuai rata-rata yang didapat

Contoh kode:

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
  
