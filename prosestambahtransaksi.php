<?php
$kategori=@$_GET['kategoripelanggan'];
$tanggal=@$_POST['tanggal'];
$namapel=@$_POST['namaPelanggan'];
$idpel=mysqli_fetch_assoc(mysqli_query($koneksi,"SELECT idpel from pelanggan where namalengkap='$namapel'"));
$idpelrill=$idpel['idpel'];
$idkar=@$_COOKIE['idkar'];

$hasil = mysqli_query($koneksi,"INSERT into transaksi values(NULL,'$idpelrill','$idkar','$tanggal','$kategori',0,0,0)");

mysqli_fetch_row(mysqli_query($koneksi, "select last_insert_id()"));

if (!$hasil) {
    echo "Gagal Memasukkan Data Transaksi" . mysqli_error($koneksi); 
}else {
    //echo "<script>alert('Data berhasil ditambahkan !');window.location='dashboard.php?page=pelanggan';</script>";
    header('location:dashboard.php?page=transaksi_detail');
    exit();
}
?>