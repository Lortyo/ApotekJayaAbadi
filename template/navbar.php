<style>
    .tengah{
    text-align: center;
    }
    a{
    -webkit-appearance: button;
    -moz-appearance: button;
    appearance: button;
    text-decoration: none;
    color: initial;
    }
    .active{
    background-color: #DCD09A !important;
    }
    .dropdown-menu-dark{
        background-color: #F6F6F6 !important;
    }

</style>
</head>
<body>
<nav class="navbar sticky-top navbar-expand-lg navbar-light" style="background-color: #F6F6F6; padding-top: 13px; padding-bottom: 13px;">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            </ul>
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-dark" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"> <?= $_COOKIE['username']?> </a>
                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-dark" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item text-dark" href="dashboard.php?page=obat">Profil</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item text-dark" href="dashboard.php?page=pelanggan">Ganti Akun</a></li>
                    </ul>
                </li>
                <li>
                <img src="gambarya/ivan gunakan.jpg" alt="" width="40" height="40" class="rounded-circle me-2">
                </li>
            </ul> 
            </form>            
        </div>
    </div>
</nav>