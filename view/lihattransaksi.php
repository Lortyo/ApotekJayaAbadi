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
$data=mysqli_query($koneksi, "SELECT iddetailtransaksi,namalengkap,namaobat,tgltransaksi,kategoripelanggan,totalbayar,bayar,kembali FROM `detail_transaksi` 
inner join transaksi on detail_transaksi.idtransaksi = transaksi.idtransaksi 
inner join pelanggan on transaksi.idpel = pelanggan.idpel
inner join obat on detail_transaksi.idobat = obat.idobat
order by iddetailtransaksi desc;");
?>
    <div>
    <center><h1>Detail Transaksi</h1>
    <a href="dashboard.php?page=tambahtransaksi"><button class="btn btn-primary">+ Tambahkan Data</button></a>
<br>
<br>
</center>
    <table class="table table-bordered border-dark" align="center">
        <tr>
            <td>Id Transaksi</td>
            <td>Nama Pelanggan</td>
            <td>Nama Karyawan</td>
            <td>Tanggal Transaksi</td>
            <td>Kategori Pelanggan</td>
            <td>Total Bayar</td>
            <td>Bayar</td>
            <td>Kembali</td>
        </tr>

        <?php
        while ($hasil = mysqli_fetch_array($data)){
            ?>
        <tr>
            <td class="tengah"><?= $hasil['iddetailtransaksi']; ?></td>
            <td class="tengah gaa"><?= $hasil['namalengkap']; ?></td>
            <td class="tengah gaa"><?= $hasil['namaobat']; ?></td>
            <td class="tengah"><?= $hasil['tgltransaksi']; ?></td>
            <td class="tengah"><?= $hasil['kategoripelanggan']; ?></td>
            <td class="tengah"><?= $hasil['totalbayar']?></td>
            <td class="tengah"><?= $hasil['bayar']; ?></td>
            <td class="tengah"><?= $hasil['kembali']; ?></td>
        </tr>
        <?php
        };
        ?>
    </table>    