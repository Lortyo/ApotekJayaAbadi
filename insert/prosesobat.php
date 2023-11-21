<?php
include "koneksi.php";

$idobat=$_POST['idobat'];
$suplir= $_POST['idsuplir'];
$namaobat = $_POST['namaobat'];
$kategoriobat = $_POST['kategoriobat'];
$hargajual = $_POST['hargajual'];
$hargabeli = $_POST['hargabeli'];
$stokobat = $_POST['stokobat'];
$keterangan= $_POST['keterangan'];


$query = "INSERT INTO obat VALUES ('$idobat','$suplir','$namaobat','$kategoriobat','$hargajual','$hargabeli','$stokobat','$keterangan')";
$hasil = mysqli_query($koneksi, $query);


if (!$hasil) {
    die ("query error : ".mysqli_errno($koneksi)."-".mysqli_error($koneksi));
}else {
    echo "<script>alert('Data berhasil ditambahkan !');window.location='dashboard.php?page=obat';</script>";
    

}
