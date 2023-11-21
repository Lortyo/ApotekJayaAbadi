<?php
include "koneksi.php";
$id = $_GET['idobat'];

$query=mysqli_query($koneksi, "Delete from obat where idobat='$id'");

if(!$query) {
    die ("Gagal menghapus data: ".mysqli_errno($koneksi).
     " - ".mysqli_error($koneksi));
  } else {
    echo "<script>alert('Data berhasil dihapus.');window.location='dashboard.php?page=obat';</script>";
  }

?>