<?php
include "koneksi.php";

$usn=$_POST['username'];
$pass=$_POST['passwor'];

$queryl=mysqli_query($koneksi,"SELECT * from loginn where username='$usn' and passwor='$pass'");
$datauser=mysqli_fetch_assoc($queryl);
$cek=mysqli_num_rows($queryl);

if($cek>0){
    setcookie('username',$usn,time()+(60*60*24*1),'/');
    setcookie('leveluser',$datauser['leveluser'],time()+(60*60*24*1),'/');
echo "<script>alert('Berhasil Login !');window.location='index.php';</script>";
}else{
echo "<script>alert('Username atau Password Salah !'); window.location='login.php';</script>";
}
?>