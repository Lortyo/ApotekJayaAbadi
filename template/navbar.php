<link rel="stylesheet" href="bootstrap-icons-1.11.1\bootstrap-icons.min.css">
<style>
    .tengah{
    text-align: center;
    }
    a{
    text-decoration: none;
    color: initial;
    }
    .active{
    background-color: #235590 !important;
    color: white;
    width: 200px;
    border-radius: 0px !important;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    }
    .dropdown-menu-dark{
        background-color: #F6F6F6 !important;
    }
</style>
</head>
<body>
<nav class="navbar d-flex sticky-top navbar-expand-lg navbar-light" style=" padding-top: 15px;">
    <div class="container-fluid">
            <ul class="navbar-nav">
            </ul>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <input placeholder="Search" type="text">
                </li>
            </ul>
            <ul class="navbar-nav">
                <li class="nav-item">
                    
                </li>
            </ul>
            <ul class="navbar-nav">
                <li class="nav-item">
                    
                </li>
            </ul>
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-dark" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"> <?= $_COOKIE['username']?> </a>
                    <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item text-dark" href="dashboard.php?page=obat">Profil</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item text-dark" href="dashboard.php?page=pelanggan">Ganti Akun</a></li>
                    </ul>
                </li>
                <li>
                <img src="gambarya/ivan gunakan.jpg" alt="" width="40" height="40" class="rounded-circle me-5">
                </li>
            </ul> 
            </form>            
    </div>
</nav>