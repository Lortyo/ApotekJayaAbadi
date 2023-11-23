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
    <center><h1>Detail Transaksi</h1>
    <a href="dashboard.php?page=tambahtransaksi"><button class="btn btn-primary">+ Tambahkan Data</button></a>
<br>
<br>
</center>
<div class="container">
    <table class="table table-striped table-hover" align="center">
        <tr>
            <td>Id Transaksi</td>
            <td>Nama Pelanggan</td>
            <td>Nama Karyawan</td>
            <td>Tanggal Transaksi</td>
            <td>Kategori Pelanggan</td>
            <td>Total Bayar</td>
            <td>Bayar</td>
            <td>Kembali</td>
            <td colspan="2">Aksi</td>
        </tr>

        <?php
        $data = mysqli_query($koneksi, "SELECT * FROM transaksi INNER JOIN pelanggan USING(idpel) INNER JOIN karyawan USING(idkar) ORDER BY idtransaksi DESC"); 
        while ($hasil = mysqli_fetch_array($data)){
            ?>
        <tr>
            <td class="tengah"><?= $hasil['idtransaksi']; ?></td>
            <td class="tengah gaa"><?= $hasil['namalengkap']; ?></td>
            <td class="tengah gaa"><?= $hasil['namakar']; ?></td>
            <td class="tengah"><?= $hasil['tgltransaksi']; ?></td>
            <td class="tengah"><?= $hasil['kategoripelanggan']; ?></td>
            <td class="tengah"><?= number_format($hasil['totalbayar'],0,'.','.');?></td>
            <td class="tengah"><?= number_format($hasil['bayar'],0,'.','.'); ?></td>
            <td class="tengah"><?= number_format($hasil['kembali'],0,'.','.'); ?></td>
            <td>
                <a class="btn btn-success" href="dashboard.php?page=transaksidetail&idtransaksi=<?=$hasil['idtransaksi']?>">Lihat</a>
            </td>
            <?php
            ?>
            <td>
                <a class="btn btn-danger" href="dashboard.php?page=deletetransaksi&idtransaksi=<?=$hasil['idtransaksi']?>">Delete</a>
            </td>
            <?php
            ?>
        </tr>
        <?php
        };
        ?>
        </div>
    </table>    