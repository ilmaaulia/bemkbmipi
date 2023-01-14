<?php 
require 'functions.php';

if( isset($_POST["register"]) ) {

    if( registrasi($_POST) > 0 ) {
        echo "<script>
                alert('Pendaftaran Berhasil!');
            </script>";
    } else {
        echo mysqli_error($conn);
    }
    header('Location: login.php');
}

?> 

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="container sign">
    <div class="card">
        <div class="left center">
            <img src="img/logo.png" alt="Logo BEM">
            <h3>Badan Eksekutif Mahasiswa IPI Garut</h3>
            <p>Periode 2022-2023</p>
        </div>
        <div class="right">
            <form action="" method="post">
                <p class="bold">Masuk</p>
                <ul>
                    <li>
                        <label for="name">Nama Lengkap</label>
                        <input type="text" name="name" id="name">
                    </li>
                    <li>
                        <label for="nim">NIM</label>
                        <input type="text" name="nim" id="nim">
                    </li>
                    <li>
                        <label for="username">Username</label>
                        <input type="text" name="username" id="username">
                    </li>
                    <li>
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password">
                    </li>
                    <li>
                        <label for="password2">Konfirmasi Password</label>
                        <input type="password" name="password2" id="password2">
                    </li>
                    <li>
                        <button type="submit" name="register">Register</button>
                    </li>
                </ul>
                <p><a href="login.php"><u>Sudah Punya Akun</u></a></p>
            </form>
        </div>
    </div>
</div>
</body>
</html>