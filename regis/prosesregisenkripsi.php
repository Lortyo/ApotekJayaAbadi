<?php
include "../koneksi.php";

$idka = $_POST['idkar'];
$usen=$_POST['username'];
$piw= $_POST['passwor'];
$password_hash = password_hash($piw,PASSWORD_DEFAULT);
$level = $_POST['leveluser'];

$queryu = mysqli_query($koneksi, "SELECT username from loginn where username='$usen'");
$cek = mysqli_num_rows($queryu);

if($cek != 0){
    echo "<script>alert('username sudah ada, silahkan masukkan username yang lain');
    window.location='regis.php';</script>";
}else{
    $hasil=mysqli_query($koneksi, "INSERT into loginn values('$usen','$password_hash','$level','$idka')");

    if(!$hasil) {
        die ("query error : ".mysqli_errno($koneksi)."-".mysqli_error($koneksi));
    }else {
        echo "<script>alert('Data berhasil ditambahkan !');window.location='../index.php';</script>";
        
}
}
?>
