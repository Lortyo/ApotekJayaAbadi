<?php
include "koneksi.php";
$id = $_GET['idpel'];

$queryse=mysqli_query($koneksi, "SELECT buktifotoresep from pelanggan where idpel='$id'");
$bar=mysqli_fetch_assoc($queryse);
$deletg=unlink($bar['buktifotoresep']);

$query=mysqli_query($koneksi, "Delete from pelanggan where idpel='$id'");

if(!$query) {
    die ("Gagal menghapus data: ".mysqli_errno($koneksi).
     " - ".mysqli_error($koneksi));
  }elseif(!$deletg){
    die ("Gagal menghapus Gambar: ".mysqli_errno($koneksi).
     " - ".mysqli_error($koneksi));
  } 
  else {
    echo "<script>alert('Data berhasil dihapus.');window.location='dashboard.php?page=pelanggan';</script>";
  }

?>