<?php
session_start();

if ( !isset($_SESSION["login"]) ) {
    header("Location:login.php");
  exit;
}

require "fungsiComentar/functions.php";
$idUser = $_SESSION["user_id"];
// var_dump($id);
$penulis = user2($idUser);

if ($idUser !== 1) {
    header("Location: dasboard.php");
    exit;
}

$komentar = tampilKomentarUrut();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="https://static.vecteezy.com/system/resources/previews/006/984/425/non_2x/mrz-letter-logo-design-on-black-background-mrz-creative-initials-letter-logo-concept-mrz-letter-design-vector.jpg" type="image/png">
    <title>Halaman Komentar</title>
    <style>
        a {
            text-decoration: none;
        }
        td {
            text-align: justify;
        }
        @media screen and (max-width: 425px) {
             th {
                 display: none;
             }
            td {
                display: grid;
            }
            /*hr {*/
            /*    width: -webkit-fill-available;*/
            /*}*/
        }
    </style>
</head>
<body style="padding: 3%;margin: auto;max-width: 1440px;">
<h4>Hi, <?php echo $penulis ?>...<h4>
<h3>Kelola Komentar</h3>
    <table border="1" cellpadding="10" cellspacing="0" style="border-collapse: collapse;">
        <?php $i = 1; ?>
        <thead>
            <tr>
                <th style="display: none;">Urutan</th>
                <th>No.</th>
                <th>Aksi</th>
                <th>Judul Artikel</th>
                <th>Tanggal Komentar</th>
                <th>Nama Komentar</th>
                <th>Komentar Utama</th>
                <th>Komentar Balasan</th>

            </tr>
        </thead> 
        <tbody>
        <?php foreach ( $komentar as $cmt) : ?>
            <tr>
                <td>
                    <?php echo $i; ?>
                </td>
                <td>
                    <a href="hapus.php?id3=<?php echo $cmt["id"]; ?>"onclick="return confirm('yakin?')">hapus</a>
                </td>
                <td>
                    <?php echo htmlspecialchars($cmt["judul"]) ?>
                </td>
                <td>
                    <?php $tanggal = $cmt['tanggal']; echo date('d-m-Y', strtotime($tanggal));?>
                </td>
                <td>
                    <?php echo htmlspecialchars($cmt["nama"]) ?>
                </td>
                <td>
                    <?php 
                        echo htmlspecialchars($cmt["Komentar_Utama"]); ?>
                </td>
                <td>
                <?php echo htmlspecialchars($cmt["Komentar_Balas"]) ?>
                </td>
            </tr>
        <?php $i++; ?>
         <?php endforeach ?>
        </tbody>
    </table> <br>
    <p>kembali ke<a href="dasboard.php"> Halaman Dasboard</a></p>
</body>
</html>