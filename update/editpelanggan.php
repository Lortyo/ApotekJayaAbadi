<?php
  if (isset($_GET['idpel'])) {

    $id = ($_GET["idpel"]);


    $query = "SELECT * FROM pelanggan WHERE idpel='$id'";
    $result = mysqli_query($koneksi, $query);

    if(!$result){
      die ("Query Error: ".mysqli_errno($koneksi).
         " - ".mysqli_error($koneksi));
    }

    $data = mysqli_fetch_assoc($result);
  }
  ?>
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
        margin-left: 305px;
        font-size: 20px;
    }
    div{
        margin-top: 100px;
        background-color: aqua;
        padding: 20px;
        margin-left: 300px;
        margin-right: 300px;
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
    <div>
      <center>
        <h1 class="cum">Edit Data Obat <?php echo $data['namalengkap']; ?></h1>
      <center>
      <form method="POST" action="dashboard.php?page=proseseditpelanggan" enctype="multipart/form-data" >  
        <table border="0">
        <tr>
                <td></td>
                <td></td>
                <td width="50px"></td>
                <td>Cover :</td>
            </tr>
          <tr>
            <td class="cum">ID Obat</td>
            <td>:</td>
            <td><input type="text" name="idpel" value="<?php echo $data['idpel']; ?>" readonly required="" /></td>
            <td style="width: 90px;" rowspan="12">
            <?php echo "<img src='$data[buktifotoresep]'>";?>
            </td>
          </tr>
          <tr>
            <td class="cum">Nama Pelanggan</td>
                <td>:</td>
                <td><input type="text" name="namalengkap" value="<?php echo $data['namalengkap']; ?>" /></td>
          </tr>
          <tr>
            <td class="cum">Alamat</td>
            <td>:</td>
            <td><input type="text" name="alamat" value="<?php echo $data['alamat']; ?>" /></td>
          </tr>
          <tr>
            <td class="cum">telp</td>
            <td>:</td>
            <td><input type="text" name="telp" value="<?php echo $data['telp']; ?>" /></td>
          </tr>
          <tr>
            <td class="cum">usia</td>
            <td>:</td>
            <td><input type="text" name="usia" value="<?php echo $data['usia']; ?>" /></td>
          </tr>
          <tr>
            <td>Bukti</td>
            <td>:</td>
            <td><input style="width: 260px;" class="pendek" type="file" name="buktifotoresepp" id=""></td>
          </tr>
          <tr>
          <input hidden type="text" name="buktifotoresep" value="<?php echo $data['buktifotoresep'];?>">
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
        <a href="dashboard.php?page=pelanggan"><button>Kembali</button></a>
  </body>
</html>