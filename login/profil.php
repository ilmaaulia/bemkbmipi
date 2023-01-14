<?php
require '../functions.php';
$user = "SELECT * from user";
$result = mysqli_query($conn, $user);

?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
<?php include 'header.php';?>
<main>
    <div class="container profil">
        <div class="left">
            <div class="card">
                <ul>
                    <li><a href="chat.php">Chat Mahasiswa</a></li>
                    <li><a href="presensi.php">Presensi</a></li>
                    <li><a href="../logout.php">Logout</a></li>
                </ul>
            </div>
        </div>
        <div class="right">
            <div class="card">
                <h3 class="subtitle">Profil Mahasiswa</h3><br>
                <img src="../img/man.png" alt="Foto Profil" width="100px">
            </div>
        </div>
        <div class="clear"></div>
    </div>
</main>
<?php include 'footer.php';?>
</body>
</html>