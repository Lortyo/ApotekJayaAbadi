<?php
extract($_POST);

if(isset($_FILES['buktifotoresepp']) && $_FILES['buktifotoresepp']['error']== UPLOAD_ERR_OK){
    $id= $_POST['idpel'];
    $buktii = $_POST['buktifotoresep'];
    unlink($buktii);
    $nama= $_POST['namalengkap'];
    $alamat = $_POST['alamat'];
    $telp = $_POST['telp'];
    $usia = $_POST['usia'];
    $bukti = $_FILES['buktifotoresepp'];
    $upload = $_FILES['buktifotoresepp']['tmp_name'];
    $namagambar = $_FILES['buktifotoresepp']['name'];
    $imgsimpan = "fotoResep/".$namagambar;
    move_uploaded_file($upload,'fotoResep/'.$namagambar);
    $query = "UPDATE pelanggan SET namalengkap = '$nama',alamat = '$alamat', telp = '$telp', 
    usia='$usia',buktifotoresep='$imgsimpan' WHERE pelanggan.idpel = '$id'";
} else {
    $id= $_POST['idpel'];
    $nama= $_POST['namalengkap'];
    $alamat = $_POST['alamat'];
    $telp = $_POST['telp'];
    $usia = $_POST['usia'];
    $bukti = $_POST['buktifotoresep'];
    $query = "UPDATE pelanggan SET namalengkap = '$nama',alamat = '$alamat',telp = '$telp', usia='$usia',
    buktifotoresep='$bukti' WHERE pelanggan.idpel = '$id'";
}
$hasil = mysqli_query($koneksi, $query);
if (!$hasil) {
    die("Query Error :" . mysqli_errno($koneksi) . "-" . mysqli_error($koneksi));
}else {
    echo "<script>alert('Data berhasil ditambahkan !');window.location='dashboard.php?page=pelanggan';</script>";
}
?>