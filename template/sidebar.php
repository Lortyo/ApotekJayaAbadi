<div class="container-fluid">
    <div class="row">
        <div class="col-md-2"><nav class="d-flex sticky-top flex-column flex-shrink-0 p-3 text-dark" style="background-color: #F6F6F6; position:fixed; top:0; left:0; height: 100%; width: 250px;">
    <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
      <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
      <span class="fs-4" style="font-size: 10px;"></span>
    </a>
    <hr>
    <ul class="nav nav-pills flex-column m-auto">
      <li class="nav-item">
        <a href="dashboard.php?page=beranda" class="nav-link text-dark <?php if(@$_GET['page']=='beranda'){echo "active";};?>"aria-current="page">
          <svg class="bi me-2" width="16" height="16"><use xlink:href="#home"></use></svg>
          Home
        </a>
      </li>
      <li>
        <a href="dashboard.php?page=pelanggan" class="nav-link text-dark <?php if(@$_GET['page']=='pelanggan'){echo "active";};?>">
          <svg class="bi me-2" width="16" height="16"><use xlink:href="#speedometer2"></use></svg>
          Pelanggan
        </a>
      </li>
      <li>
        <a href="dashboard.php?page=obat" class="nav-link text-dark <?php if(@$_GET['page']=='obat'){echo "active";};?>">
          <svg class="bi me-2" width="16" height="16"><use xlink:href="#table"></use></svg>
          Obat
        </a>
      </li>
    </ul>
    <hr>
    <button class="btn" style="background-color: #E25C5C;"><a class="text-white" href="logoutcookie.php">Logout</a></button>  
  </nav></div>
    <div class="col-md-10" style="padding-right: 0;">