<?php 
session_start();

require '../functions.php';

if( !isset($_SESSION["login"]) ) {
    header('Location: ../login.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"></link>
</head>
<body>
<?php include 'header.php';?>
<main>
    <div class="container">
        <div class="top">
            <div class="left">
                <h2>Selamat Datang di <br> Website BEM KBM <br> IPI Garut</h2>
                <p class="periode">Periode 2022-2023</p>
                <p class="button"><a href="#overview">Telusuri Informasi</a></p>
            </div>
            <div class="right">
                <img src="../img/main.jpg" alt="Foto Kegiatan BEM" width="500px">
            </div>
        </div>
        <div class="card" id="overview">
            <h3 class="subtitle">Kegiatan Terbaru</h3>
            <div class="kegiatan">
                <img src="../img/kegiatan-1.png" alt="Foto Kegiatan">
                <h4>BEM KBM IPI x IMAPORA</h4><br>
                <p>Kementerian Luar Negeri, Kementerian Pemuda dan Olahraga BEM KBM IPI dan Ikatan Mahasiswa Pecinta Olahraga (IMAPORA) melakukan silaturahmi dengan Dinas Pemuda dan Olahraga, Adapun maksud dan Tujuan silaturahmi tersebut diantaranya, Pengenalan pengurus BEM dan Kementerian terkait.</p>
            </div>
            <div class="kegiatan">
                <img src="../img/kegiatan-2.png" alt="Foto Kegiatan">
                <h4>Silaturahmi Bersama Kasat Intelkam Polres Garut</h4><br>
                <p>BEM KBM IPI bersilaturahmi dengan Kasat Intelkam Polres Garut, Adapun maksud dan tujuan silaturhami tersebut diantaranya, pemaparan arah gerak BEM KBM IPI, Singkorinisasi Progja dan diskusi menanyakan persiapan Keamanan Garut menjelang Tahun Pemilu.</p>
            </div>
            <div class="kegiatan">
                <img src="../img/kegiatan-3.png" alt="Foto Kegiatan">
                <h4>Disdik Garut</h4><br>
                <p>Pengangkatan honorer yang dari tahun 2015 kesana. Kualitas menurut dinas pendidikan sudah cukup baik. Hanya saja untuk sarana dan prasarana memang belum merata semua. Karena beberapa faktor seperti cuaca, kelalaian, dan kebijakan pusat.</p>
            </div>
            <div class="kegiatan">
                <img src="../img/kegiatan-4.png" alt="Foto Kegiatan">
                <h4>BEM x Disparbud</h4><br>
                <p>bemkbmipi_Kementerian Luar Negeri dan Kementerian Seni dan Budaya BEM KBM IPI melakukan silaturahmi dengan Dinas Pariwisata dan Kebudayaan. Adapun maksud dan tujuan silaturahmi tersebut di antaranya, pengenalan pengurus BEM dan kementerian yang terkait.</p>
            </div>
        </div>
    </div>
</main>
<?php include '../footer.php';?>
</body>
</html>