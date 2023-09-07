<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Daftar</title>
	<link rel="shortcut icon" href="asset/img/logo/logo.png">
	<!-- Boostrap CSS -->
	<link rel="stylesheet" type="text/css" href="asset/css/bootstrap.min.css">
	<!-- My CSS -->
	<link rel="stylesheet" type="text/css" href="asset/css/style.css">
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
			<div class="col">
			</div>
			<div class="col-5 mt-5">
				<form method="post" action="">
					<div class="mb-3">
						<h1>Aplikasi Peduli Kesehatan</h1>
						<hr>
						<p>Ujian Kompetensi Kejuruan - Rekayasa Perangkat Lunak<br><b>SMK Ma'arif Batu</b></p>
						<hr>
					</div>
					<form method="post" action="">
						<div class="mb-3">
							<label for="email" class="form-label">Email</label>
							<input type="email" class="form-control" name="email" aria-describedby="email" placeholder="Masukkan email" required>
						</div>
						<div class="mb-3">
							<label for="nik" class="form-label">NIK</label>
							<input type="text" class="form-control" name="nik" aria-describedby="nik" placeholder="Masukkan nik" required>
						</div>
						<div class="mb-3">
							<label for="nama" class="form-label">Nama Lengkap</label>
							<input type="text" class="form-control" name="nama_lengkap" aria-describedby="nama" placeholder="Masukkan nama lengkap" required>
						</div>
						<div class="mb-3">
							<label for="password" class="form-label">Password</label>
							<input type="password" class="form-control" name="password" placeholder="Masukkan password" required minlength="8">
						</div>
						<p>Jika sudah daftar, Klik di <a href="masuk.php">sini</a> untuk masuk.</p>
						<button type="submit" class="btn btn-success" name="daftar">Daftar</button>
					</form>
				</form>
			</div>
			<div class="col">
			</div>
		</div>
	</div>
	<!-- Boostrap JS -->
	<script type="text/javascript" herf="asset/js/bootstrap.bundle.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>
<?php

if (isset($_POST['daftar'])) {

	include 'koneksi.php';
	$email = $_POST['email'];
	$nik = $_POST['nik'];
	$nama_lengkap = $_POST['nama_lengkap'];
	$password = $_POST['password'];

	$cekemail = mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM pengguna WHERE email='$_POST[email]' OR nik='$_POST[nik]'"));

	if ($cekemail > 0) {
		echo '<script language="javascript">';
		echo 'alert("Maaf akun sudah terdaftar")';
		echo '</script>';
	} else {
		mysqli_query($koneksi, "insert into pengguna values(NULL, '$email', '$nik', '$nama_lengkap', MD5('$password'))");
		echo '<script language="javascript">';
		echo 'alert("Akun berhasil di buat, silahkan login")';
		echo '</script>';
	}
}
?>