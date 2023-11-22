<div class="container-fluid">
    <div class="row">
        <div class="col-md-1"><nav class="d-flex sticky-top flex-column flex-shrink-0 p-0 text-dark" style="background-color: #F6F6F6; position:fixed; top:0; left:0; height: 100%; width: 200px;">
    <a href="dashboard.php?page=beranda" class="d-flex justify-content-center pt-3 text-dark text-decoration-none">
        <img src="gambarya/group 141.png" alt="" width="125px">
    </a>
    <hr>
    <div class="container d-flex mb-auto p-0">
    <hr>
    <ul class="nav nav-pills flex-column mb-auto">
      <li class="nav-item">
        <a href="dashboard.php?page=beranda" class="nav-link <?php if(@$_GET['page']=='beranda'){echo "text-light active";}else{ echo "text-dark";};?>"aria-current="page">
            <i class="bi bi-house-fill pe-4 ps-3"></i>
          Home
        </a>
      </li>
      <li>
        <a href="dashboard.php?page=pelanggan" class="nav-link text-light <?php if(@$_GET['page']=='pelanggan'){echo "active";}else{ echo "text-dark";};?>">
          <i class="bi bi-person-fill pe-4 ps-3"></i>
          Pelanggan
        </a>
      </li>
      <li>
        <a href="dashboard.php?page=obat" class="nav-link text-light <?php if(@$_GET['page']=='obat'){echo "active";}else{ echo "text-dark";};?>">
          <i class="bi bi-capsule pe-4 ps-3"></i>
          Obat
        </a>
      </li>
      <li>
        <a href="dashboard.php?page=tambahtransaksi" class="nav-link text-light <?php if(@$_GET['page']=='tambahtransaksi'){echo "active";}else{ echo "text-dark";};?>">
        <i class="bi bi-cash pe-4 ps-3"></i>
          Transaksi
        </a>
      </li>
    </ul>
    </div>
    <hr>
    <button class="btn mx-3" style="margin-bottom: 15px; background-color: #BF1717;"><a class="text-white" href="logoutcookie.php">Logout</a></button>
</nav></div>
    <div class="col-md-11" style="padding-right: 0;">
