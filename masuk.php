<?php
if (isset($_GET['pesan'])) {
	if ($_GET['pesan'] == "gagal") {
		echo '<script language="javascript">';
		echo 'alert("Login gagal, username dan password salah !")';
		echo '</script>';
	} else if ($_GET['pesan'] == "logout") {
		echo '<script language="javascript">';
		echo 'alert("Anda berhasil logout.")';
		echo '</script>';
	} else if ($_GET['pesan'] == "belum_login") {
		echo '<script language="javascript">';
		echo 'alert("Anda harus login untuk mengakses halaman aplikasi utama")';
		echo '</script>';
	}
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<title>Masuk</title>
	<link rel="shortcut icon" href="asset/img/logo/logo.png" />
	<!-- Boostrap CSS -->
	<link rel="stylesheet" type="text/css" href="asset/css/bootstrap.min.css" />
	<!-- My CSS -->
	<link rel="stylesheet" type="text/css" href="asset/css/style.css" />
</head>

<body class="halaman-md">
	<!-- NavBar -->
	<nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm fixed-top">
		<div class="container">
			<a class="navbar-brand" href="index.php">Peduli Kesehatan</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav">
					<li class="nav-item">
						<a class="nav-link active" aria-current="page" href="index.php#beranda">Beranda</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="index.php#tentang">Tentang</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="index.php#kontak">Kontak</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="daftar.php">Daftar</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="masuk.php">Masuk</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<!-- Akhir NavBar -->
	<div class="container mt-5">
		<div class="row">
			<div class="col"></div>
			<div class="col-5 mt-5">
				<form method="post" action="xmasuk.php">
					<div class="mb-3">
						<h1>Aplikasi Peduli Kesehatan</h1>
						<hr />
						<p>
							Ujian Kompetensi Kejuruan - Rekayasa Perangkat Lunak<br /><b>SMK Ma'arif Batu</b>
						</p>
						<hr />
						<label class="form-label">Email</label>
						<input type="email" class="form-control" name="email" placeholder="Masukkan email" required />
					</div>
					<div class="mb-3">
						<label class="form-label">Password</label>
						<input type="password" class="form-control" name="password" placeholder="Masukkan password" required minlength="8" />
					</div>
					<p>
						Jika belum memiliki akun, Klik di
						<a href="daftar.php">sini</a> untuk daftar.
					</p>
					<input type="submit" value="Masuk" name="masuk" class="btn btn-success" />
				</form>
			</div>
			<div class="col"></div>
		</div>
	</div>
	<!-- Boostrap JS -->
	<script type="text/javascript" href="asset/js/bootstrap.bundle.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>