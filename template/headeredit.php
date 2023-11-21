<?php
include "koneksi.php";
session_start();
//ni cookie yg atas session 
if(!@$_COOKIE['username']){
    echo "<script>alert('Login dlu wir');window.location.href='../login.php';</script>";
}elseif(@$_COOKIE['leveluser']=='karyawan'){
    echo "<script>alert('Anda Karyawan Silahkan Log In Menggunakan Akun Lain');window.location.href='../index.php';</script>";
}
//else{
$data=mysqli_query($koneksi, "SELECT idobat,perusahaan,namaobat,kategoriobat,hargajual,hargabeli,stokobat,obat.keterangan FROM `obat` INNER JOIN supler ON obat.idsuplir = supler.idsuplir order by idobat desc;");
?>
<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>kelamin</title>
    <link rel="stylesheet" href="edit.css">
    <link rel="stylesheet" href="gggga.css">
</head>
<body>