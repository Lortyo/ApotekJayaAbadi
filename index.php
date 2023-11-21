<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="bootstrap-5.3.2-dist\css\bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap-icons-1.11.1\bootstrap-icons.min.css">
    <style>
        .iw{
            padding-top: 6px;
        }
        a{
            text-decoration: none;
            font-size: 12px;
        }
        center{
            margin-top: 140px;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            margin-left: 320px;
            margin-right: 320px;
            padding-top: 25px;
            padding-bottom: 10px;
            border-radius: 10px;
        }
        .www{
            padding-left: 80px;
            padding-right: 80px;
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
        .asa{
            
        }
        .ssa{
            position: absolute;
            top: 42.5%;
            transform: translateY(-50%);
            pointer-events: none;
        }
        .sss{
            position: absolute;
            top: 51.7%;
            transform: translateY(-50%);
            pointer-events: none;
        }
        .sasa{
            font-size: 14px;
        }
        .koko{
            width: 240px;
            height: 35px;
        }
        </style>
</head>
<body>
    <center>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h1>Login</h1>
                <form action="proseslogindekripsi.php" method="POST">
                <Table>
                    <tr>
                        <td>
                            <div class="form-outline">
                                <input type="text" autoComplete="off" class="form-control garis ps-5 my-2 sasa koko" placeholder="Username" name="username" id="" required>
                                <i class="bi bi-person-circle ms-3 ssa"></i>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-outline">
                                <input type="password" placeholder="Password" class="form-control garis ps-5 my-2 sasa koko" name="passwor" id="" required>
                                <i class="bi bi-key-fill ms-3 sss"></i>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="iw"><input type="submit" value="Masuk" class="btn btn-dark www form-control sasa"></td>
                    </tr>
                    <tr><td class="sasa">Belum Punya Akun? <a class="sasa" href="./regis/regis.php">Daftar</a></td></tr>
                    <!-- <tr>
                        <td class="iw"><input type="submit" class="baten" value="Daftar"></td>
                    </tr> -->
                </Table>
            </form>
            </div>
            <div class="col-md-6">
                <img src="gambarya/Rhodes_Island.webp" alt="" width="260px">
            </div>
        </div>
    </div>
    </center>
    <p></p>
    <script src="bootstrap-5.3.2-dist\js\bootstrap.bundle.min.js"></script>
</body>
</html>