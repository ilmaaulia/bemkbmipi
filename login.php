<?php 
session_start();

if( isset($_SESSION["login"]) ) {
    header("Location: login/index.php");
    exit;
}

require 'functions.php';

if( isset($_POST["login"]) ) {
    
    $username = $_POST["username"];
    $password = $_POST["password"];

    $result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");

    if( mysqli_num_rows($result) === 1) {

        $row = mysqli_fetch_assoc($result);
        if ( password_verify($password, $row["password"]) ) {
            // set session
            $_SESSION["login"] = true;
            header("Location: login/index.php");
            exit;
        }
    }

    $error = true;

}
?> 

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
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
                        <label for="username">Username</label>
                        <input type="text" name="username" id="username">
                    </li>
                    <li>
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password">
                    </li>
                    <?php if( isset($error) ) : ?>
                        <p style="color: red;">Nama Pengguna/Password Salah.</p>
                    <?php endif; ?>
                    <li>
                        <button type="submit" name="login">Masuk</button>
                    </li>
                </ul>
                <p>Belum Punya Akun? Daftar <a href="registrasi.php">di sini</a> </p>
            </form>
        </div>
    </div>
</div>
</body>
</html>