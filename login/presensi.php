<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Presensi</title>
    <link rel="stylesheet" href="../css/style.css">
    <style>
        button a {
            color: white;
            margin: 20px;
        }
        button {
            width: 70%;
        }
        td {
            text-align: center;
        }
    </style>
</head>
<body>
<?php include 'header.php';?>
<main>
    <div class="container">
        <h3 class="subtitle">Presensi Rapat</h3><br><br>
        <table border=1; width="100%">
            <tr>
                <th>No</th>
                <th>Pertemuan</th>
                <th>Aksi</th>
            </tr>
            <tr>
                <td>1</td>
                <td>Pertemuan Ke-1</td>
                <td>
                    <button type='submit'>
                        <a href="https://meet.google.com/sea-jfrp-mgo">Hadir</a>
                    </button>
                    </td>
                </td>
            </tr>
            <tr>
                <td>2</td>
                <td>Pertemuan Ke-2</td>
                <td>
                    <button type='submit'>
                        <a href="https://meet.google.com/sea-jfrp-mgo">Hadir</a>
                    </button>
                    </td>
                </td>
            </tr>
            <tr>
                <td>3</td>
                <td>Pertemuan Ke-3</td>
                <td>
                    <button type='submit'>
                        <a href="https://meet.google.com/sea-jfrp-mgo">Hadir</a>
                    </button>
                    </td>
                </td>
            </tr>
            <tr>
                <td>4</td>
                <td>Pertemuan Ke-4</td>
                <td>
                    <button type='submit'>
                        <a href="https://meet.google.com/sea-jfrp-mgo">Hadir</a>
                    </button>
                    </td>
                </td>
            </tr>
            <tr>
                <td>5</td>
                <td>Pertemuan Ke-5</td>
                <td>
                    <button type='submit'>
                        <a href="https://meet.google.com/sea-jfrp-mgo">Hadir</a>
                    </button>
                    </td>
                </td>
            </tr>
        </table>
    </div>
</main>
<?php include 'footer.php';?>
</body>
</html>