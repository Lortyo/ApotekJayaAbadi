<title>Pelanggan</title>
<?php
$data=mysqli_query($koneksi, "SELECT * FROM `pelanggan` order by idpel desc");
?>
    <style>
        .gbr{
            width: 90px;
        }
    </style>
</head>
<body>
<br>
    <div>
    <center><h1>Data Pelanggan</h1>
    <a href="dashboard.php?page=tambahpelanggan"><button>tambahkan data</button></a>
<br>
<br>
</center>
    <table border="2" align="center" width="80%" class="tinggi">
        <tr>
            <td>Id Pelanggan</td>
            <td>Nama Lengkap</td>
            <td>Alamat</td>
            <td>No Telp</td>
            <td>Usia</td>
            <td>Bukti Resep</td>
            <td>Aksi</td>
        </tr>

        <?php
        while ($hasil = mysqli_fetch_array($data)){
            ?>
        <tr>
            <td class="tengah"><?= $hasil['idpel']; ?></td>
            <td class="tengah"><?= $hasil['namalengkap']; ?></td>
            <td class="tengah"><?= $hasil['alamat']; ?></td>
            <td class="tengah"><?= $hasil['telp']; ?></td>
            <td class="tengah"><?= $hasil['usia']; ?></td>
            <td class="tengah"><?php echo "<img class='gbr' src='$hasil[buktifotoresep]'>";?></td>
            <td class="tengah">
            <a href="dashboard.php?page=editpelanggan&idpel=<?= $hasil['idpel']; ?>"><button type="button" >Edit</button></a>
            <?php
            $idd = $hasil['idpel'];
            $kweri = "SELECT * from transaksi inner join pelanggan on transaksi.idpel = 
            pelanggan.idpel where pelanggan.idpel = $idd";
            $sembunyi = mysqli_query($koneksi, $kweri);
            $tes=mysqli_num_rows($sembunyi);

            if($tes==0){
            ?>
            <a href="dashboard.php?page=hapuspelanggan&idpel=<?= $hasil['idpel']; ?>"><button type="button" >Delete</button></a>
            <?php
            }else{
                echo "";
            }
            
            ?>
            </td>
        </tr>
        <?php
}
        ?>
    </table>