<?php
include "koneksi.php";

$id=$_POST['idobat'];
$suplir = $_POST['idsuplir'];
$namaobat = $_POST['namaobat'];
$kategoriobat = $_POST['kategoriobat'];
$hargajual = $_POST['hargajual'];
$hargabeli = $_POST['hargabeli'];
$stokobat = $_POST['stokobat'];
$keterangan = $_POST['keterangan'];

$query = "UPDATE obat SET idsuplir = '$suplir',namaobat = '$namaobat', kategoriobat = '$kategoriobat', 
hargajual='$hargajual',hargabeli='$hargabeli',stokobat='$stokobat' , keterangan = '$keterangan' 
WHERE obat.idobat = '$id'";
$hasil = mysqli_query($koneksi, $query);

if (!$hasil) {
    die("Query Error :" . mysqli_errno($koneksi) . "-" . mysqli_error($koneksi));
} else {
    echo "<script>alert('Data berhasil ditambahkan !');window.location='dashboard.php?page=obat';</script>";
}

?>