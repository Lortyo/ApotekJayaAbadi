<style>
    .table{
        width: 95% !important;
        font-size: 14px;
        text-align: center;
    }
    .gaa{
        text-align: left;
    }
</style>
<title>Obat</title>
</head>
<body>
<?php
$data=mysqli_query($koneksi, "SELECT idobat,perusahaan,namaobat,kategoriobat,hargajual,hargabeli,stokobat,obat.keterangan FROM `obat` INNER JOIN supler ON obat.idsuplir = supler.idsuplir order by idobat desc;");
?>
    <div>
    <center><h1>Data Obat</h1>
    <a href="dashboard.php?page=tambahobat"><button class="btn btn-primary">+ Tambahkan Data</button></a>
<br>
<br>
</center>
    <table class="table border-dark" align="center">
        <tr>
            <td>Id Obat</td>
            <td>Nama Perusahaan</td>
            <td>Nama Obat</td>
            <td>Kategori Obat</td>
            <td>Harga Jual</td>
            <td>Harga Beli</td>
            <td>Stok Obat</td>
            <td>Keterangan</td>
            <td>Aksi</td>
        </tr>

        <?php
        while ($hasil = mysqli_fetch_array($data)){
            ?>
        <tr>
            <td class="tengah"><?= $hasil['idobat']; ?></td>
            <td class="tengah"><?= $hasil['perusahaan']; ?></td>
            <td class="tengah"><?= $hasil['namaobat']; ?></td>
            <td class="tengah"><?= $hasil['kategoriobat']; ?></td>
            <td class="tengah"><?= $hasil['hargajual']; ?></td>
            <td class="tengah"><?= $hasil['hargabeli']?></td>
            <td class="tengah"><?= $hasil['stokobat']; ?></td>
            <td class="tengah"><?= $hasil['keterangan']; ?></td>
            <td>
            <a href="dashboard.php?page=editobat&idobat=<?= $hasil['idobat']; ?>"><button type="button" class="btn btn-success" >Edit</button></a>

           
            <?php
            $idd = $hasil['idobat'];
            $kweri = "SELECT * from detail_transaksi inner join obat on detail_transaksi.idobat = 
            obat.idobat where obat.idobat = $idd";
            $sembunyi = mysqli_query($koneksi, $kweri);
            $tes=mysqli_num_rows($sembunyi);

            if($tes==0){
            ?>
            <a href="dashboard.php?page=hapusobat&idobat=<?= $hasil['idobat']; ?>"><button type="button" class="btn btn-danger" >Delete</button></a>
            <?php
            }else{
                echo "";
            }
        };
            ?>
            </td>
        </tr>
        <?php
        ?>
    </table>    