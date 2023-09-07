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
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" type="text/css" href="../asset/css/styleadmin.css">

    <link href="../asset/img/logo/logo.png" rel="shorcut icon">

    <title>Login</title>
</head>

<body>
    <div class="container">
        <form action="xindex.php" method="post" class="login-email">
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Login</p>
            <div class="input-group">
                <input type="username" placeholder="Username" name="username">
            </div>
            <div class="input-group">
                <input type="password" placeholder="Password" name="password">
            </div>
            <div class="input-group">
                <button name="submit" class="btn">Login</button>
            </div>
        </form>
    </div>
</body>

</html>