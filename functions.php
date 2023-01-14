<?php 
require 'koneksi.php';

function registrasi($data) {
    global $conn;

    $nama = stripslashes($data["name"]);
    $nim = stripslashes($data["nim"]);
    $username = strtolower(stripslashes($data["username"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $password2 = mysqli_real_escape_string($conn, $data["password2"]);

    $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");
    
    if( mysqli_fetch_assoc($result) ) {
        echo "<script>
                alert('Nama pengguna sudah terdaftar!');
              </script>";
        return false;
    }

    if($password !== $password2) {
        echo "<script>
                alert('Konfirmasi Password Tidak Sesuai!');
              </script>";
        return false;
    }

    // encript the pw
    $password = password_hash($password, PASSWORD_DEFAULT);

    // ad to db
    mysqli_query($conn, "INSERT INTO user VALUES('', '$nama', '$nim', '$username', '$password')");
    
    return mysqli_affected_rows($conn);
}
?>