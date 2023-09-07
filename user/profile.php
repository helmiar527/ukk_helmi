<?php
session_start();
if (!isset($_SESSION['status'])) {
  header("Location: ../masuk.php?pesan=belum_login");
}
$email = $_SESSION['email'];
?>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Boostrap CSS -->
  <link rel="stylesheet" type="text/css" href="../asset/css/bootstrap.min.css">
  <!-- My CSS -->
  <link rel="stylesheet" type="text/css" href="../asset/css/style.css">
  <!-- Boostrap ICON -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
  <link rel="shortcut icon" href="../asset/img/logo/logo.png">
  <title>Beranda</title>
</head>

<body>
  <div class="container-fluid">
    <div class="row flex-nowrap">
      <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 navigasi">
        <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
          <a href="../index.php" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
            <span class="fs-5 d-none d-sm-inline">Peduli Kesehatan</span>
          </a>
          <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
            <li class="nav-item">
              <a href="beranda.php" class="nav-link align-middle px-0 text-white">
                <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline">Beranda</span>
              </a>
            </li>
            <li>
              <a href="#submenu1" data-bs-toggle="collapse" class="nav-link px-0 align-middle text-white">
                <i class="fs-4 bi-speedometer2"></i> <span class="ms-1 d-none d-sm-inline">Dashboard</span></a>
              <ul class="collapse nav flex-column ms-1" id="submenu1" data-bs-parent="#menu">
                <li class="w-100">
                  <a href="historyperjalanan.php" class="nav-link px-0 text-white"> <span class="d-none d-sm-inline">History Perjalanan</span> 1</a>
                </li>
                <li>
                  <a href="laporankesehatan.php" class="nav-link px-0 text-white"> <span class="d-none d-sm-inline">Catatan Kesehatan</span> 2</a>
                </li>
              </ul>
            </li>
            <li>
              <a href="#submenu2" data-bs-toggle="collapse" class="nav-link px-0 align-middle text-white">
                <i class="fs-4 bi-plus-square"></i> <span class="ms-1 d-none d-sm-inline">Isi Data</span></a>
              <ul class="collapse nav flex-column ms-1" id="submenu2" data-bs-parent="#menu">
                <li class="w-100">
                  <a href="perjalanan.php" class="nav-link px-0 text-white"> <span class="d-none d-sm-inline">Perjalanan</span> 1</a>
                </li>
              </ul>
            </li>
          </ul>
          <hr>
          <div class="dropdown pb-4">
            <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
              <img src="../asset/img/dashboard/smile.png" alt="hugenerd" width="30" height="30" class="rounded-circle img-fluid">
              <span class="d-none d-sm-inline mx-1"><?php
                                                    include "../koneksi.php";
                                                    $email = $_SESSION['email'];
                                                    $data = mysqli_query($koneksi, "select * from pengguna where email = '$email'");
                                                    $d = mysqli_fetch_array($data);
                                                    echo $d['nama_lengkap'];
                                                    ?></span>
            </a>
            <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
              <li><a class="dropdown-item" href="profile.php">Profile</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="../logout.php">Keluar</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col py-3 beranda">
        <div class="container">
          <h1 class="text-center">Profile</h1>
          <br>
          <hr>
          <img src="../asset/img/dashboard/smile.png" class="img-thumbnail text-right rounded float-right bg-transparent" width="20%">
          <br>
          <div class="fw-bold fs-1">
            <p>Nama : <?php
                      include "../koneksi.php";
                      $email = $_SESSION['email'];
                      $data = mysqli_query($koneksi, "select * from pengguna where email = '$email'");
                      $d = mysqli_fetch_array($data);
                      echo $d['nama_lengkap'];
                      ?>
            </p>
          </div>
          <div class="fw-bold fs-1">
            <p> Nik : <?php
                      include "../koneksi.php";
                      $email = $_SESSION['email'];
                      $data = mysqli_query($koneksi, "select * from pengguna where email = '$email'");
                      $d = mysqli_fetch_array($data);
                      echo $d['nik'];
                      ?>
            </p>
          </div>
        </div>
      </div>
    </div>
    <!-- Boostrap JS -->
    <script type="text/module/javascript" herf="../asset/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>