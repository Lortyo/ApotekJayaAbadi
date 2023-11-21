<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="../bootstrap-5.3.2-dist\css\bootstrap.min.css">
    <link rel="stylesheet" href="../bootstrap-icons-1.11.1\bootstrap-icons.min.css">
    <style>
        .baten{
            width: 189px;
        }
        .iw{
            padding-top: 6px;
        }
        small{
            font-size: 12px;
        }
        a{
            text-decoration: none;
            font-size: 12px;
        }
        .garis{
            border:none ;
            background-color: #F3F3F3;
        }
        .garis:focus{
            outline: none;
            background-color: #F3F3F3;
            box-shadow: 0 0 0 0;
        }
        center{
            margin-top: 90px;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            margin-left: 250px;
            margin-right: 250px;
            padding-top: 10px;
            padding-bottom: 20px;
            border-radius: 10px;
        }
        .besar{
            font-size: 1rem;
        }
        .ssa{
            position: absolute;
            top: 45%;
            transform: translateY(-50%);
            pointer-events: none;
        }
        .ssa1{
            position: absolute;
            top: 56%;
            transform: translateY(-50%);
            pointer-events: none;
        }
        .ssa2{
            position: absolute;
            top: 34%;
            transform: translateY(-50%);
            pointer-events: none;
        }
        .ssa3{
            position: absolute;
            top: 67%;
            transform: translateY(-50%);
            pointer-events: none;
        }
        .asadsaad{
            padding-left: 121px;
            padding-right:121px ;
        }
        .sasa{
            font-size: 14px;
        }
        .koko{
            width: 285px;
            height: 38px;
        }
    </style>
</head>
<body>
    <center>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img src="../gambarya/Rhine_Lab.webp" alt="" width="390px">
                </div>
                <div class="col-md-6">
                <h1 class="justify-content-end">Register Akun</h1>
        <form action="prosesregisenkripsi.php" method="POST">
        <Table>
            <tr>    
                <td>
                <div class="form-outline">
                    <select name="idkar" id="" class="form-control garis mt-4 ps-5 sasa koko dropdown-toggle" >
                        <option value="" selected disabled>Pilih Id Karyawan</option>
                        <?php
                                include "../koneksi.php";
                                $querry="SELECT * FROM karyawan where idkar not in (select idkar from loginn)";
                                $data=mysqli_query($koneksi,$querry);
                                $cek=mysqli_num_rows($data);
                                if($cek>0){ 
                                    while($baris=mysqli_fetch_assoc($data)){
                                        ?>
                                        <option value="<?= $baris['idkar'];?>"><?= $baris['namakar'];?></option>
                                        <?php
                                    }
                                    
                                }else{
                                    ?>
                                        <option value="">Semua Karyawan Sudah Register</option>
                                        <?php
                                    };
                                    
                                    ?>
                    </select>
                    <i class="bi bi-person-vcard-fill ms-3 ssa2"></i>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="form-outline">
                    <input type="text" autoComplete="off" class="form-control garis mt-4 ps-5 sasa koko" placeholder="Masukkan Username" name="username" id="" required>
                    <i class="bi bi-person-circle ms-3 ssa"></i>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="form-outline">
                    <input type="text" autoComplete="off" class="form-control garis mt-4 ps-5 sasa koko" placeholder="Masukkan Password" name="passwor" id="" required>
                    <i class="bi bi-key-fill ms-3 ssa1"></i>
                    </div>
                </td>
            </tr>
            <tr>
            <td>
            <div class="form-outline">    
            <select name="leveluser" id="" class="form-control garis mt-4 ps-5 sasa koko" >
                        <option value="" selected disabled>Pilih Level User</option>
                        <option value="admin">admin</option>
                        <option value="karyawan">karyawan</option>    
                    </select>
                    <i class="bi bi-bar-chart-fill ms-3 ssa3"></i>
            </div>
                </td>
            </tr>
            <tr>
                <td class="iw"><input type="submit" class="btn btn-dark mt-4 asadsaad sasa" value="Masuk"></td>
            </tr>
            <tr>
                <td class="sasa">Sudah Punya Akun? <a href="../index.php" class="sasa">Login</a></td>
            </tr>
            <!-- <tr>
                <td class="iw"><input type="submit" class="baten" value="Daftar"></td>
            </tr> -->
        </Table>
                </div>
            </div>
        </div>
    </form>
    </center>
    <script src="bootstrap-5.3.2-dist\js\bootstrap.bundle.min.js"></script>
</body>
</html>