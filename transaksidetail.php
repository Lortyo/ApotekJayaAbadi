<?php
$idtransaksi=$_COOKIE['idtransaksi'];

$row=mysqli_fetch_assoc(mysqli_query($koneksi,"SELECT * from transaksi where idtransaksi='$idtransaksi'"));

$datapelanggan=mysqli_fetch_assoc(mysqli_query($koneksi, "SELECT namalengkap from pelanggan inner join transaksi using(idpel) where idtransaksi='$idtransaksi'"));

$datakaryawan=mysqli_fetch_assoc(mysqli_query($koneksi, "SELECT namakar from karyawan inner join transaksi using(idkar) where idtransaksi='$idtransaksi'"));

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

            <form action="" method="POST">
                <div class="input-group">   
                    <span class="input-group-text" id="bassic-addon1">Nama Obat</span>
                    <input type="text" list="obat" class="form-control" name="namaobat" aria-label="Username" aria-describedby="basic-addon1" autocomplete="off">
                </div>
                <div class="input-group mt-3">   
                    <span class="input-group-text" id="bassic-addon1">Jumlah Obat</span>
                    <input type="text" class="form-control" name="jumlah" aria-label="Username" aria-describedby="basic-addon1" autocomplete="off">
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
                <input type="submit" class="btn btn-success mt-3" value="Masukkan Obat Lagi">
                <input type="submit" class="btn btn-success mt-3" value="Selesai">
            </form>
        </div>
        <div class="col-2"></div>
    </div>
</div>