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

$portfolio = user();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="https://static.vecteezy.com/system/resources/previews/006/984/425/non_2x/mrz-letter-logo-design-on-black-background-mrz-creative-initials-letter-logo-concept-mrz-letter-design-vector.jpg" type="image/png">
    <title>Halaman User</title>
    <style>
        a {
            text-decoration: none;
        }
        td {
            text-align: justify;
        }
        @media screen and (max-width: 1024px) {
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
        @media screen and (max-width: 425px) {
            .perkecil {
                font-size: 8px;
            }
        }
    </style>
</head>
<body style="padding: 3%;margin: auto;max-width: 1024px;">
<h4>Hi, <?php echo $penulis ?>...<h4>
<h3>Halaman User</h3>
    <table border="1" cellpadding="10" cellspacing="0" style="border-collapse: collapse; margin: auto;">
        <?php $i = 1; ?>
        <thead>
            <tr>
                <th>No.</th>
                <th>Aksi</th>
                <th>Penulis</th>
                <th>Email</th>
                <th>User</th>
                <th>Pasword</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach ( $portfolio as $prt) : ?>
            <tr>
                <td>
                    <?php echo $i; ?>
                </td>
                <td>
                    <a href="hapus.php?id2=<?php echo $prt["id"]; ?>" onclick="return confirm('yakin?')">hapus</a>
                </td>
                <td>
                    <?php echo $prt["penulis"]; ?>
                </td>
                <td>
                    <?php echo $prt["email"]; ?>
                </td>
                <td>
                    <?php echo $prt["username"]; ?>
                </td>
                <td class="perkecil">
                    <?php echo $prt["password"]; ?>
                </td>
            </tr>
        <?php $i++; ?>
         <?php endforeach ?>
        </tbody>
    </table> <br>
    <p>buat akun <a href="registrasi.php">di sini</a> atau kembali ke<a href="dasboard.php"> Halaman Dasboard</a></p>
</body>
</html>