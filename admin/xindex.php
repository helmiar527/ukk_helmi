<?php

if (isset($_POST['submit'])) {

    include '../koneksi.php';
    $username = $_POST['username'];
    $password = $_POST['password'];


    $sql = mysqli_query($koneksi, "select * from admin where username='$username' and password=MD5('$password')");
    $cek = mysqli_num_rows($sql);

    if ($cek == 0) {
        echo '<script language="javascript">';
        echo 'alert("Mohon maaf username atau password salah.")';
        echo '</script>';
    } else {
        session_start();
        $_SESSION['username'] = $username;
        $_SESSION['status'] = "login";
        header("Location: admin.php");
    }
}
