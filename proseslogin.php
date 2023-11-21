<?php
include "koneksi.php";
session_start();

$usn=$_POST['username'];
$pass=$_POST['passwor'];

$queryl=mysqli_query($koneksi,"SELECT username,passwor,leveluser from loginn where username='$usn' and 
passwor='$pass'");
$datauser=mysqli_fetch_assoc($queryl);
$cek=mysqli_num_rows($queryl);

if($cek>0){
$_SESSION['username'] = $usn;
$_SESSION['leveluser'] = $datauser['leveluser'];
echo "<script>alert('Berhasil Login !');window.location='index.php';</script>";
}else{
echo "<script>alert('Username atau Password Salah !'); window.location='login.php';</script>";
}
?>