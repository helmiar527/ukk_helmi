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
<?php

if (isset($_POST['kirim'])) {
	include 'koneksi.php';

	$nama_lengkap = $_POST['nama_lengkap'];
	$email = $_POST['email'];
	$pesan = $_POST['pesan'];

	$sql = mysqli_query($koneksi, "insert into feedback values(NULL,'$nama_lengkap','$email','$pesan')");

	if ($sql = 0) {
		echo '<script language="javascript">';
		echo 'alert("Data tidak berhasil masuk.")';
		echo '</script>';
	} else {
		echo '<script language="javascript">';
		echo 'alert("Data berhasil masuk.")';
		echo '</script>';
	}
}
?>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Boostrap CSS -->
	<link rel="stylesheet" type="text/css" href="asset/css/bootstrap.min.css">
	<!-- My CSS -->
	<link rel="stylesheet" type="text/css" href="asset/css/style.css">
	<!-- Boostrap ICON -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
	<link rel="shortcut icon" href="asset/img/logo/logo.png">
	<title>Peduli Kesehatan</title>
</head>

<body id="beranda">
	<!-- NavBar -->
	<nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm fixed-top">
		<div class="container">
			<a class="navbar-brand" href="#beranda">Peduli Kesehatan</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav">
					<li class="nav-item">
						<a class="nav-link active" aria-current="page" href="#beranda">Beranda</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#tentang">Tentang</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#kontak">Kontak</a>
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

	<!-- Jumboron -->
	<section class="jumbotron">
		<div class="judul">
			<h1 class="display-4 fw-bold">Selamat datang di Peduli Kesehatan</h1>
			<p class="lead">Peduli Kesehatan adalah aplikasi yang dikembangkan untuk membantu masnyarakat dalam melakukan kegiatan di luar rumah, selain itu aplikasi ini dapat membantu instansi pemerintah dalam rangka memantau kesehatan masyarakat.</p>
			<hr class="my-4">
			<p>Daftar untuk memantau kesehatan anda dan menghindari penyakit yang tidak di inginkan.</p>
			<a class="btn btn-primary btn-lg" href="daftar.php" role="button">Daftar</a>
		</div>
		<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
			<path fill="#ffffff" fill-opacity="1" d="M0,224L34.3,186.7C68.6,149,137,75,206,64C274.3,53,343,107,411,112C480,117,549,75,617,64C685.7,53,754,75,823,96C891.4,117,960,139,1029,138.7C1097.1,139,1166,117,1234,112C1302.9,107,1371,117,1406,122.7L1440,128L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z"></path>
		</svg>
	</section>
	<!-- Akhir Jumbotron -->

	<!-- Tentang -->
	<section id="tentang">
		<div class="container">
			<div class="row justify-content-center">
				<h1 class="text-center mb-3">Tentang</h1>
				<div class="col-4 text-center">
					<h4>Apa itu Peduli Kesehatan</h4>
					<p>Peduli Kesehatan adalah aplikasi yang dapat memantau kesehatan anda, aplikasi ini di desain dengan mudah sehingga tidak menyulitkan bagi para pemula.</p>
				</div>
				<div class="col-4 text-center">
					<h4>Bagaimana cara menggunakannya</h4>
					<p>Anda cukup daftar dan masuk ke dalam aplikasinya, anda bisa menambahkan informasi berupa rekaman kesehatan selama anda berada di dalam ataupun di luar rumah</p>
				</div>
				<div class="col-4 text-center">
					<h4>Apa manfaat untuk kita</h4>
					<p>Bisa merekam segala aktivitas kesehatan selama di dalam atau luar rumah, bisa memberi informasi kepada dokter jika mengalami sakit tanpa harus menjelaskan secara detail.</p>
				</div>
			</div>
		</div>
		<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
			<path fill="#9ec2ff" fill-opacity="1" d="M0,224L34.3,197.3C68.6,171,137,117,206,122.7C274.3,128,343,192,411,181.3C480,171,549,85,617,74.7C685.7,64,754,128,823,160C891.4,192,960,192,1029,208C1097.1,224,1166,256,1234,234.7C1302.9,213,1371,139,1406,101.3L1440,64L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z"></path>
		</svg>
	</section>
	<!-- Akhir Tentang -->

	<!-- Kontak -->
	<section id="kontak">
		<div class="container kontak">
			<div class="row text-center">
				<div class="col">
					<h2>Kontak</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-6">
					<form method="post" action="">
						<div class="mb-3">
							<label for="name" class="form-label">Nama Lengkap</label>
							<input type="text" class="form-control" id="name" aria-describedby="name" name="nama_lengkap" placeholder="Masukkan Nama Lengkap" required>
						</div>
						<div class="mb-3">
							<label for="email" class="form-label">Alamat Email</label>
							<input type="email" class="form-control" id="email" aria-describedby="email" name="email" placeholder="Masukkan Email" required>
						</div>
						<div class="mb-3">
							<label for="pesan" class="form-label">Pesan</label>
							<textarea class="form-control" id="pesan" rows="3" name="pesan" placeholder="Masukkan Pesan" required maxlength="255" minlength="11"></textarea>
						</div>
						<button type="submit" class="btn btn-success btn-kirim" name="kirim">Kirim</button>
					</form>
				</div>
			</div>
		</div>
		<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
			<path fill="#0d6efd" fill-opacity="1" d="M0,160L34.3,181.3C68.6,203,137,245,206,250.7C274.3,256,343,224,411,186.7C480,149,549,107,617,117.3C685.7,128,754,192,823,218.7C891.4,245,960,235,1029,202.7C1097.1,171,1166,117,1234,117.3C1302.9,117,1371,171,1406,197.3L1440,224L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z"></path>
		</svg>
	</section>
	<!-- Akhir Kontak -->
	<!-- Footer -->
	<footer class="bg-primary text-white text-center">
		<p>Created with <i class="bi bi-heart-fill"></i> by <a href="#" class="text-white fw-bold">HelmiAR527</a></p>
	</footer>
	<!-- Akhir Footer -->
	<!-- Boostrap JS -->

	<script type="text/module/javascript" href="asset/js/bootstrap.bundle.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>