<?php
$kategori=@$_GET['kategoripelanggan'];
$idkar=@$_COOKIE['idkar'];

if($kategori=='umum'){
    $tanggal=date("Y-m-d");
    
    $hasil=mysqli_query($koneksi, "INSERT into transaksi values(null, 30,'$idkar','$tanggal','$kategori',0,0,0)");

    $idtransaksi=mysqli_fetch_row(mysqli_query($koneksi, "SELECT last_insert_id()"));
    setcookie('idtransaksi',$idtransaksi[0],time()+(60*60*24*1),'/');

    if (!$hasil) {
        echo "Gagal Memasukkan Data Transaksi" . mysqli_error($koneksi); 
    }else {
        //echo "<script>alert('Data berhasil ditambahkan !');window.location='dashboard.php?page=pelanggan';</script>";
        header('location:dashboard.php?page=transaksi_detail&idtransaksi='.$idtransaksi[0]);
        exit();
}
}elseif($kategori=='khusus'){
$tanggal=@$_POST['tanggal'];
$namapel=@$_POST['namaPelanggan'];
$idpel=mysqli_fetch_assoc(mysqli_query($koneksi,"SELECT idpel from pelanggan where namalengkap='$namapel'"));
$idpelrill=$idpel['idpel'];

$hasil = mysqli_query($koneksi,"INSERT into transaksi values(NULL,'$idpelrill','$idkar','$tanggal','$kategori',0,0,0)");

$idtransaksi=mysqli_fetch_row(mysqli_query($koneksi, "select last_insert_id()"));
setcookie('idtransaksi',$idtransaksi[0],time()+(60*60*24*1),'/');
if (!$hasil) {
    echo "Gagal Memasukkan Data Transaksi" . mysqli_error($koneksi); 
}else {
    //echo "<script>alert('Data berhasil ditambahkan !');window.location='dashboard.php?page=pelanggan';</script>";
    header('location:dashboard.php?page=transaksi_detail&idtransaksi='.$idtransaksi[0]);
    exit();
}
}
?>