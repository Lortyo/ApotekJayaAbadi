<style>
    a {
    -webkit-appearance: button;
    -moz-appearance: button;
    appearance: button;
    text-decoration: none;
    color: initial;
    }
    .lokek{
		width: 100%;
		margin: 80px auto;	 
		display: flex;
		flex-direction: row;
		justify-content: center;
	}
	.box{
		width: 250px;
		margin: 0 40px;
		box-shadow: 0 0 20px 2px rgba(0, 0, 0, .1);
		transition: 1s;
	}
	.box img{
		display: block;
		width:100%;
		border-radius: 5px;
	}
	.box:hover{
		transform: scale(1.3);
		z-index: 2;
	}
    </style>
    <title>Home</title>
</head>
<body>
<center>
    <br>
    <?php if(!@$_COOKIE['username']){?>
    <h1>Selamat Datang di Apotek</h1>
    <?php }else{
        $wir=$_COOKIE['username'];
        $mek=mysqli_query($koneksi,"SELECT * from loginn where username='$wir'");
        $dat=mysqli_fetch_assoc($mek);?>
    <h1>Selamat Datang <?= $dat['username'];?> di Apotek </h1>
    <?php };?>
    <div class="lokek">
        <div class="box">
            <a href="dashboard.php?page=obat"><img src="gambarya/ivan gunakan.jpg" alt="foto input"></a>
        </div>
        <div class="box">
            <a href="dashboard.php?page=pelanggan"><img src="gambarya/ggg.jpg" alt="foto liat input"></a>
        </div>
    </div>
</center>