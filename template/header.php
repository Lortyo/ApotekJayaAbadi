<?php
include "koneksi.php";
session_start();
//ni cookie yg atas session 
if(!@$_COOKIE['username']){
    echo "<script>alert('Login dlu wir');window.location.href='index.php';</script>";
}elseif(@$_COOKIE['leveluser']=='karyawan'){
    echo "<script>alert('Anda Karyawan Silahkan Log In Menggunakan Akun Lain');window.location.href='index.php';</script>";
}
//else{
?>
<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
