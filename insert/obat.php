<style>
    .wdba{
    background-color: aqua;
    margin-top: 80px;
    border-radius: 10px;
    }
    .mang{
        padding-left: 450px;
        padding-right: 450px;
    }
    .ka{
        margin-bottom:18px;
    }
</style>
</head>
<body>
<div class="mang">
    <center class="wdba"><br><h2>TAMBAH OBAT</h2><br>
    <form action="dashboard.php?page=prosestambahobat" method="POST">
    <table cellspacing="0" cellpadding="7">
            <tr>
                <td>Id Supplier</td>
                <td>
                    <select name="idsuplir" id="" style="width:170px" >
                        <option value="" selected disabled>Pilih Id Supplier</option>
                            <?php
                                include "../koneksi.php";
                                    $querry="select * from supler";
                                    $data=mysqli_query($koneksi,$querry);
                                    while($baris=mysqli_fetch_assoc($data)){
                                    ?>
                                        <option value="<?= $baris['idsuplir'];?>"><?= $baris['perusahaan'];?></option>
                                    <?php
                                    };

                            ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Nama Obat</td><td><input type="text" name="namaobat" id=""></td>
            </tr>
            <tr>
                <td>Kategori Obat</td><td><input type="text" name="kategoriobat" id=""></td>
            </tr>
            <tr>
                <td>Harga Jual Obat</td><td><input type="text" name="hargajual" id=""></td>
            </tr>
            <tr>
                <td>Harga Beli Obat</td><td><input type="text" name="hargabeli" id=""></td>
            </tr>
            <tr>
                <td>Stok Obat</td><td><input type="text" name="stokobat" id=""></td>
            </tr>
            <tr>
                <td>Keterangan Obat</td><td><input type="text" name="keterangan" id=""></td>
            </tr>
            <tr>
                <td><a href="dashboard.php?page=obat"><input type="button" value="Lihat Obat" class="ka"></a></td><td><input type="submit" class="ka"></td>
            </tr>
            <tr>
                
            </tr>
        </table>
    </form>
    </center>
    </div>