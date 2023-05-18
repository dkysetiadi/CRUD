<?php
// memanggil file koneksi.php untuk melakukan koneksi database
include 'koneksi.php';

	// membuat variabel untuk menampung data dari form
  $nama_produk   = $_POST['nama_produk'];
  $keterangan     = $_POST['keterangan'];
  $harga    = $_POST['harga'];
  $jumlah    = $_POST['jumlah'];

   $query = "INSERT INTO arkademy (nama_produk, keterangan, harga, jumlah) VALUES ('$nama_produk', '$keterangan', '$harga', '$jumlah')";
                  $result = mysqli_query($koneksi, $query);
                  // periska query apakah ada error
                  if(!$result){
                      die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
                           " - ".mysqli_error($koneksi));
                  } else {
                    //tampil alert dan akan redirect ke halaman index.php
                    //silahkan ganti index.php sesuai halaman yang akan dituju
                    echo "<script>alert('Data berhasil ditambah.');window.location='index.php';</script>";
                  }

            

   $query = "INSERT INTO arkademy (nama_produk, keterangan, harga, jumlah) VALUES ('$nama_produk', '$keterangan', '$harga', '$jumlah', null)";
                  $result = mysqli_query($koneksi, $query);
                  // periska query apakah ada error
                  if(!$result){
                      die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
                           " - ".mysqli_error($koneksi));
                  } else {
                    //tampil alert dan akan redirect ke halaman index.php
                    //silahkan ganti index.php sesuai halaman yang akan dituju
                    echo "<script>alert('Data berhasil ditambah.');window.location='index.php';</script>";
                  }

