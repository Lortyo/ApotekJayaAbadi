<?php
include "koneksi.php";
$usn=$_POST['username'];
$pass=$_POST['passwor'];

$queryl=mysqli_query($koneksi,"SELECT * from loginn where username='$usn'");
$datauser=mysqli_fetch_assoc($queryl);
echo $cek = password_verify($pass, $datauser['passwor']);

if($cek>0){
    setcookie('username',$usn,time()+(60*60*24*1),'/');
    setcookie('leveluser',$datauser['leveluser'],time()+(60*60*24*1),'/');
    setcookie('idkar',$datauser['idkar'],time()+(60*60*24*1),'/');
header('location:dashboard.php?page=beranda');
}else{
echo "<script>alert('Username atau Password Salah !'); window.location='index.php';</script>";
}
?>