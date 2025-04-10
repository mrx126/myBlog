<?php
session_start();

if ( !isset($_SESSION["login"]) ) {
    header("Location:login.php");
  exit;
}

$idUser = $_SESSION["user_id"];

require "fungsiComentar/functions.php";

$penulis = user2($idUser);
// var_dump ($penulis);
if ($idUser === 1) {
    $artikels = detailArtikelFull();
} else {
    $artikels = detailArtikelByPenulis($penulis);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="https://static.vecteezy.com/system/resources/previews/006/984/425/non_2x/mrz-letter-logo-design-on-black-background-mrz-creative-initials-letter-logo-concept-mrz-letter-design-vector.jpg" type="image/png">
    <title>Halaman Dasboard</title>
    <style>
        a {
            text-decoration: none;
        }
        td {
            text-align: justify;
        }
        @media screen and (max-width: 425px) {
            td {
                display: grid;
            }
            hr {
                width: -webkit-fill-available;
            }
            h1 {
                font-size: 1em;
            }
            span a {
                font-size: 0.8em;
            }
        }
    </style>
</head>
<body style="margin: auto;max-width: 1440px;padding: 3%;">

    <span  style="display: flex;
    justify-content: space-between; align-items: center;"><h1 style="margin: inherit;">Selamat Datang <?php echo $penulis; ?></h1><a href="logout.php" style="text-decoration:none;">sign Out!</a></span>
    <a href="tambah.php">Tulis Artikel</a><?php if ($idUser === 1) {echo '<a href="admin.php"> | Halaman Admin </a><a href="comment.php"> | Pengelola Komentar </a>';} ?>
    <br><br>
    <table border="1" cellpadding="10" cellspacing="0" style="border-collapse: collapse;">
        <?php $i = 1; ?>
        <?php foreach ( $artikels as $atc) : ?>
            <tr style="vertical-align: text-top;">
                <td>
                    <?php echo $i; ?>
                </td>
                <td>
                    <span>
                        <a href="ubah.php?id=<?php echo $atc["id"]; ?>">ubah</a> | 
                        <a href="hapus.php?id=<?php echo $atc["id"]; ?>" onclick="return confirm('yakin?')">hapus</a>
                    </span><hr>
                    <span>
                        <?php echo $atc["penulis"]; ?>
                    </span><hr>
                    <span>
                        <?php echo $atc["kategori"]; ?>
                    </span><hr>
                    <span>
                    <?php echo $atc["judul"]; ?>
                    </span><hr>
                    <span>
                        <?php $created_at = $atc['created_at']; echo date('d-m-Y', strtotime($created_at)); ?>
                    </span><hr>
                    <span>
                        <a href="<?php echo $atc["link"]; ?>"><?php echo $atc["link"]; ?></a>
                    </span><hr> 
                    <span>
                        <img src="<?php echo $atc["gambar"]; ?>" alt="" style="width: 100%;">
                        <hr> 
                        <img src="<?php echo $atc["gambar_2"]; ?>" alt="" style="width: 100%;">
                    </span>
                </td>
                <td>
                    <span><?php echo $atc["isi"]; ?></span>
                    <hr>
                    <span><?php echo $atc["isi_2"]; ?></span>
                </td>
            </tr>
            <?php $i++; ?>
         <?php endforeach ?>
    </table>

</body>
</html>