<?php
if (isset($_POST['masuk'])) {
    include 'koneksi.php';
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = mysqli_query($koneksi, "select * from pengguna where email='$email' and password=MD5('$password')");
    $cek = mysqli_num_rows($sql);

    if ($cek == 0) {
        echo '<script language="javascript">';
        echo 'alert("Mohon maaf akun tidak tersedia, silahkan daftar terlebih dahulu.")';
        echo '</script>';
    } else {
        session_start();
        $_SESSION['email'] = $email;
        $_SESSION['status'] = "login";
        header("Location: user/beranda.php");
    }
}
