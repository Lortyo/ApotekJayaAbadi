<title>Transaksi</title>
</head>
<body>
<div class="container mt-3">
    <div class="row">
        <div class="col-4"></div>
        <div class="col-4">

        <form action="" method="post">
        <select class="form-select" aria-label="Default select example" name="kategoripelanggan">
            <option selected>Pilih Kategori Pelanggan</option>
            <option value="umum">Umum</option>
            <option value="khusus">Khusus</option>
        </select>
        <input type="submit" class="btn btn-success mt-3" value="lanjutkan">
        </form>
<?php
if(@$_POST['kategoripelanggan']=='khusus'){
?>
<form action="dashboard.php?page=prosestambahtransaksi&kategoripelanggan=khusus" method="post">
<div class="input-group flex-nowrap mt-5 mb-3">
                <span class="input-group-text" id="addon-wrapping">Tanggal Transaksi</span>
                <input type="text" value="<?=date("Y-m-d")?>" name="tanggal" readonly class="form-control" aria-label="tangganTransaksi" aria-describedby="addon-wrapping">
            </div>
            <div class="input-group flex-nowrap mt-3 mb-3">
                <span class="input-group-text" id="addon-wrapping">Nama Pelanggan</span>
                <input type="text" list="pelanggan" class="form-control" name="namaPelanggan" aria-label="namaPelanggan" aria-describedby="addon-wrapping">
                <datalist id="pelanggan">
                        <?php
                        $qwry = "SELECT namalengkap from pelanggan";
                        $hsil = mysqli_query($koneksi, $qwry);
                        while($row=mysqli_fetch_assoc($hsil)){
                        ?>
                        <option value="<?=$row['namalengkap'] ?>"></option>
                        <?php    
                        };
                        ?>
                </datalist> 
            </div>
            <input type="submit" class="btn btn-success mt-3" value="lanjutkan">
            </form>
<?php
}elseif(@$_POST['kategoripelanggan']=='umum'){
    header('Location:dashboard.php?page=prosestambahtransaksi&kategoripelanggan=umum');
}
?>
            </div>
        </div>
        <div class="col-4"></div>
        
    </div>
</div>