<?php
// memanggil file koneksi.php untuk melakukan koneksi database
include 'koneksi.php';

	// membuat variabel untuk menampung data dari form
  $id = $_POST['id'];
  $nama_produk   = $_POST['nama_produk'];
  $keterangan     = $_POST['keterangan'];
  $harga    = $_POST['harga'];
  $jumlah    = $_POST['jumlah'];

   $query  = "UPDATE arkademy SET nama_produk = '$nama_produk', keterangan = '$keterangan', harga = '$harga', jumlah = '$jumlah'";
                    $query .= "WHERE id = '$id'";
                    $result = mysqli_query($koneksi, $query);
                    // periska query apakah ada error
                    if(!$result){
                        die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
                             " - ".mysqli_error($koneksi));
                    } else {
                      //tampil alert dan akan redirect ke halaman index.php
                      //silahkan ganti index.php sesuai halaman yang akan dituju
                      echo "<script>alert('Data berhasil diubah.');window.location='index.php';</script>";
                    }
      // jalankan query UPDATE berdasarkan ID yang produknya kita edit
      $query  = "UPDATE arkademy SET nama_produk = '$nama_produk', keterangan = '$keterangan', harga = '$harga', jumlah = '$jumlah'";
      $query .= "WHERE id = '$id'";
      $result = mysqli_query($koneksi, $query);
      // periska query apakah ada error
      if(!$result){
            die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
                             " - ".mysqli_error($koneksi));
      } else {
        //tampil alert dan akan redirect ke halaman index.php
        //silahkan ganti index.php sesuai halaman yang akan dituju
          echo "<script>alert('Data berhasil diubah.');window.location='index.php';</script>";
      }