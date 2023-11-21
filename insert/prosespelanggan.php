<?php

$nama= $_POST['namalengkap'];
$alamat = $_POST['alamat'];
$telp = $_POST['telp'];
$usia = $_POST['usia'];

$bukti = $_FILES['buktifotoresep'];
$upload = $_FILES['buktifotoresep']['tmp_name'];
$namagambar = $_FILES['buktifotoresep']['name'];
$imgsimpan = "fotoResep/".$namagambar;
move_uploaded_file($upload,'fotoResep/'.$namagambar);


$query = "INSERT INTO pelanggan VALUES ('','$nama','$alamat','$telp','$usia','$imgsimpan')";
$hasil = mysqli_query($koneksi, $query);


if (!$hasil) {
    die ("query error : ".mysqli_errno($koneksi)."-".mysqli_error($koneksi));
}else {
    echo "<script>alert('Data berhasil ditambahkan !');window.location='dashboard.php?page=pelanggan';</script>";
    

}
