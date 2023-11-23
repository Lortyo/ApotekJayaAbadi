<?php
if (isset($_GET['idtransaksi'])) {

    $idtransaksi=$_GET['idtransaksi'];


    $query = "SELECT * FROM transaksi WHERE idtransaksi='$idtransaksi'";
    $result = mysqli_query($koneksi, $query);

    if(!$result){
      die ("Query Error: ".mysqli_errno($koneksi).
         " - ".mysqli_error($koneksi));
    }

    $data = mysqli_fetch_assoc($result);
  }

$row=mysqli_fetch_assoc(mysqli_query($koneksi,"SELECT * from transaksi where idtransaksi='$idtransaksi'"));

$datapelanggan=mysqli_fetch_assoc(mysqli_query($koneksi, "SELECT namalengkap from pelanggan inner join transaksi using(idpel) where idtransaksi='$idtransaksi'"));

$datakaryawan=mysqli_fetch_assoc(mysqli_query($koneksi, "SELECT namakar from karyawan inner join transaksi using(idkar) where idtransaksi='$idtransaksi'"));

if(@$_POST['more']){
    $jumlah=$_POST['jumlah'];
    $namaobat=$_POST['namaobat'];
    $rowobat=mysqli_fetch_assoc(mysqli_query($koneksi, "SELECT * FROM obat where namaobat='$namaobat'"));
    $idobat=$rowobat['idobat'];
    $harga=$rowobat['hargajual'];
    $total=$jumlah*$harga;
    mysqli_query($koneksi,"INSERT into detail_transaksi values('','$idtransaksi','$idobat','$jumlah','$harga','$total')");
}

if(@$_POST['tombolbayar']){
    $bayar=$_POST['inputBayar'];
        $queribayar=mysqli_fetch_row(mysqli_query($koneksi,"SELECT SUM(totalharga) FROM detail_transaksi where idtransaksi='$idtransaksi'"));
            $totalbayar=$queribayar['0'];
            $kembalian=$bayar-$totalbayar;
    mysqli_query($koneksi,"UPDATE transaksi set totalbayar='$totalbayar',bayar='$bayar',kembali='$kembalian' where idtransaksi='$idtransaksi'");
        
}

?>
<div class="container mt-5">
    <div class="row">
        <div class="col-2"></div>
        <div class="col-8">
            <table class="table table-striped-columns">
                <tbody>
                    <tr>
                        <td>ID Transaksi</td>
                        <td><?=$row['idtransaksi'] ?></td>
                    </tr>
                    <tr>
                        <td>Tanggal Transaksi</td>
                        <td><?=$row['tgltransaksi']?></td>
                    </tr>
                    <tr>
                        <td>Pelanggan</td>
                        <td><?=$datapelanggan['namalengkap']?></td>
                    </tr>
                    <tr>
                        <td>Kategori Pelanggan</td>
                        <td><?=$row['kategoripelanggan']?></td>
                    </tr>
                    <tr>
                        <td>Nama Karyawan</td>
                        <td><?=$datakaryawan['namakar']?></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="col-2"></div>

        <div class="col-4">
            <?php
            if(@$_POST['bayar']){
            ?>
            <form action="" method="POST">
            <div class="input-group">
                <span class="input-group-text" id="basic-addon1">Jumlah Bayar</span>
                <input type="number" class="form-control" name="inputBayar" aria-label="Username" aria-describedby="basic-addon1" autocomplete="off">
            </div>
            <input type="submit" name="tombolbayar" class="btn btn-success mt-3 mb-3" value="Bayar">
            <?php
            }else{
            ?>

            <form action="" method="POST">
                <div class="input-group">   
                    <span class="input-group-text" id="bassic-addon1">Nama Obat</span>
                    <input type="text" list="obat" class="form-control" name="namaobat" aria-label="Username" aria-describedby="basic-addon1" autocomplete="off">
                </div>
                <div class="input-group mt-3">   
                    <span class="input-group-text" id="bassic-addon1">Jumlah Obat</span>
                    <input type="number" class="form-control" name="jumlah" aria-label="Username" aria-describedby="basic-addon1" autocomplete="off">
                </div>
                <datalist id="obat">
                    <?php
                    $query="SELECT namaobat from obat";
                    $hasil=mysqli_query($koneksi, $query);
                    while($row=mysqli_fetch_assoc($hasil)){
                    ?>
                    <option value="<?=$row['namaobat'];?>"></option>
                    <?php
                    }
                    ?>
                </datalist>
                <input type="submit" name="more" class="btn btn-success mt-3" value="Masukkan Obat Lagi">
                <input type="submit" name="bayar" class="btn btn-success mt-3" value="Bayar">
            </form>
            <?php
            };
            ?>
        </div>
            <!-- input obat -->


            <!-- tabel bawah detail_transaksi -->
        <div class="col-8">
            <table class="table">
                    <thead>
                        <tr>
                            <td>Nama Obat</td>
                            <td>Jumlah</td>
                            <td>Harga Satuan</td>
                            <td>Total Harga</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $queryDetail="SELECT * from detail_transaksi where idtransaksi='$idtransaksi'";
                        $hasilDetail=mysqli_query($koneksi, $queryDetail);
                        while($rowDetail=mysqli_fetch_assoc($hasilDetail)){
                        ?>
                        <tr>
                            <td>
                            <?php
                            $idobatt=$rowDetail['idobat'];
                            $rownamaobat=mysqli_fetch_assoc(mysqli_query($koneksi,"SELECT namaobat from obat where idobat='$idobatt'"));
                            echo $rownamaobat['namaobat'];
                            ?>

                            </td>
                            <td><?=$rowDetail['jumlah'];?></td>
                            <td><?=number_format($rowDetail['hargasatuan'],0,'.','.');?></td>
                            <td><?=number_format($rowDetail['totalharga'],0,'.','.');?></td>
                        </tr>
                        <?php
                        };
                        ?>
                        <tr>
                            <td colspan="3">Grand Total</td>
                            <td>
                                <?php
                                    $grandtot=mysqli_fetch_row(mysqli_query($koneksi,"SELECT SUM(totalharga) FROM detail_transaksi where idtransaksi='$idtransaksi'"));
                                    echo number_format($grandtot['0'],0,'.','.');
                                ?>
                            </td>
                        </tr>
                    </tbody>
            </table>
            
            <!-- tabel bayar dan kembalian -->
            <?php
            $rowbayar=mysqli_fetch_assoc(mysqli_query($koneksi,"SELECT totalbayar,bayar,kembali from transaksi where idtransaksi='$idtransaksi'"));
            if($rowbayar['bayar'] !=0){
            ?>
            <table class="table">
                <tbody>
                    <tr>
                        <td>Bayar</td>
                        <td><?=number_format($rowbayar['bayar'],0,'.','.');?></td>
                    </tr>
                    <tr>
                        <td>Total Bayar</td>
                        <td><?=number_format($rowbayar['totalbayar'],0,'.','.');?></td>
                    </tr>
                    <tr>
                        <td>Kembalian</td>
                        <td><?=number_format($rowbayar['kembali'],0,'.','.');?></td>
                    </tr>
                </tbody>
            </table>
            <?php
            };
            ?>
        </div>
    </div>
</div>