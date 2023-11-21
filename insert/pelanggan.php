    <style>
        center{
            background-color: aqua;
            margin-top: 80px;
            border-radius: 10px;
            padding-bottom: 20px;
        }
        .ming{
        padding-left: 440px;
        padding-right: 440px;
        }
        .ass{
            font-size: 10px;
        }
    </style>
</head>
<body>
<div class="ming">
    <center><br><h2>TAMBAH Pelanggan</h2><br>
    <form action="dashboard.php?page=prosespelanggan" method="POST" enctype="multipart/form-data">
    <table cellspacing="0" cellpadding="7">
            <tr>
                <td>Nama Pelanggan</td><td><input type="text" name="namalengkap" id=""></td>
            </tr>
            <tr>
                <td>Alamat</td><td><input type="text" name="alamat" id=""></td>
            </tr>
            <tr>
                <td>No Telp</td><td><input type="text" name="telp" id=""></td>
            </tr>
            <tr>
                <td>Usia</td><td><input type="text" name="usia" id=""></td>
            </tr>
            <tr>
                <td>Bukti Foto Resep</td><td>
                    <input class="ass" type="file" name="buktifotoresep"></td>
            </tr>
            <tr>
                <td><a href="dashboard.php?page=pelanggan"><input type="button" value="Lihat Pelanggan" class="ka"></a></td><td><input type="submit" class="ka"></td>
            </tr>
            <tr>
                
            </tr>
        </table>
    </form>
    </center>
    </div>
</body>
</html>