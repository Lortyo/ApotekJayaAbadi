<style>
  img{
    justify-content: center;
    width: 180px;
}
.pendek{
    width: 30px;
}
td{
    font-size: 20px;
}
input{
        font-size: 20px;
    }
    select{
        font-size: 20px;
    }
    button{
        margin-left: 405px;
        font-size: 20px;
    }
    div{
        margin-top: 90px;
        background-color: aqua;
        padding: 20px;
        margin-left: 400px;
        margin-right: 400px;
        margin-bottom: 10px;
        border-radius: 15px;
    }
    .aaaa{
        margin-right: 20px;
    }
    .cet>.makww{
        display: none;
    }
</style>
</head>
<body>
<?php
  if (isset($_GET['idobat'])) {

    $id = ($_GET["idobat"]);


    $query = "SELECT * FROM obat WHERE idobat='$id'";
    $result = mysqli_query($koneksi, $query);

    if(!$result){
      die ("Query Error: ".mysqli_errno($koneksi).
         " - ".mysqli_error($koneksi));
    }

    $data = mysqli_fetch_assoc($result);
  }
  ?>
  
    <div>
      <center>
        <h1 class="cum">Edit Data Obat <?php echo $data['namaobat']; ?></h1>
      <center>
      <form method="POST" action="dashboard.php?page=proseseditobat" enctype="multipart/form-data" >  
        <table border="0">
          <tr>
            <td class="cum">ID Obat</td>
            <td>:</td>
            <td><input type="text" name="idobat" value="<?php echo $data['idobat']; ?>" readonly required="" /></td>
          </tr>
          <tr>
            <td class="cum">Nama Perusahaan</td>
                <td>:</td>
                <td>
          <select name="idsuplir" id="" style="width:250px">
                    <?php
                    $idsupler=$data['idsuplir'];
                    $querysup=mysqli_query($koneksi, "SELECT idsuplir, perusahaan from supler where idsuplir=$idsupler");
                    $datasup=mysqli_fetch_assoc($querysup);

                    $querry="select * from supler";
                    $iya=mysqli_query($koneksi,$querry);
                    while($baris=mysqli_fetch_assoc($iya)){
                    ?>
                <option <?php if($datasup['idsuplir']==$baris['idsuplir']){echo "selected";} ?> 
                value="<?= $baris['idsuplir'];?>"><?= $baris['perusahaan'];?></option>
            <?php
            };

            ?>
          </select>
            </td>
          </tr>
          <tr>
            <td class="cum">Nama Obat</td>
            <td>:</td>
            <td><input type="text" name="namaobat" value="<?php echo $data['namaobat']; ?>" /></td>
          </tr>
          <tr>
            <td class="cum">Kategori Obat</td>
            <td>:</td>
            <td><input type="text" name="kategoriobat" value="<?php echo $data['kategoriobat']; ?>" /></td>
          </tr>
          <tr>
            <td class="cum">Harga Jual</td>
            <td>:</td>
            <td><input type="text" name="hargajual" value="<?php echo $data['hargajual']; ?>" /></td>
          </tr>
          <tr>
            <td class="cum">Harga Beli</td>
            <td>:</td>
            <td><input type="text" name="hargabeli" value="<?php echo $data['hargabeli']; ?>" /></td>
          </tr>
          <tr>
            <td class="cum">Stok Obat</td>
            <td>:</td>
            <td><input type="text" name="stokobat" value="<?php echo $data['stokobat']; ?>" /></td>
          </tr>
          <tr>
            <td class="cum">Keterangan</td>
            <td>:</td>
            <td><input type="text" name="keterangan" value="<?php echo $data['keterangan']; ?>" /></td>
          </tr>
          <tr>
            <td></td>
            <td></td>
            <td><input type="submit" value="Simpan Perubahan"></td>
          </tr>
          <tr>
            <td></td>
          </tr>
          <tr>
            <td></td>
          </tr>
          <tr>
            <td></td>
          </tr>
          <tr>
            <td></td>
          </tr>
          <tr>
            <td></td>
          </tr>
        </table>
      </form>
        </div>
        <a href="dashboard.php?page=obat"><button>Kembali</button></a>
  </body>
</html>