<?php
$koneksi = mysqli_connect("<ip database>", "<user database>", "<password database>", "<nama database>");

// cek koneksi ketika gagal
if (mysqli_connect_errno()) {
	echo "Koneksi database gagal : " . mysqli_connect_error();
}
