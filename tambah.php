<?php
session_start();

if ( !isset($_SESSION["login"]) ) {
  header("Location:login.php");
  exit;
}

require 'fungsiComentar/functions.php';

$idUser = $_SESSION["user_id"];
// var_dump($id);
$penulis = user2($idUser);

// cek tombol submit sudah ditekan atau belum
if(isset($_POST["submit"]) ) {

    // cek apakah data berhasil di tambahkan atau tidak
  if (tambah($_POST) > 0 ) {
    echo "
        <script>
            alert('data berhasil ditambahkan!');
            document.location.href = 'dasboard.php';
        </script>
    ";
  } else {
    echo "
        <script>
            alert('data gagal ditambahkan!');
            document.location.href = 'dasboard.php';
        </script>
    ";
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="https://static.vecteezy.com/system/resources/previews/006/984/425/non_2x/mrz-letter-logo-design-on-black-background-mrz-creative-initials-letter-logo-concept-mrz-letter-design-vector.jpg" type="image/png">
    <title>Tambah Artikel</title>
    <style>
        body {
            margin: auto;
            max-width: 1024px;
            padding: 2% 20%;
        }
        input, select, textarea {
            padding: 5px;
            margin-top: 8px;
        }
        a {
            text-decoration: none;
        }
        @media (max-width: 425px) {
            body {
                padding: 0px 5%;
            }
            h1 {
                text-align: center;
            }
        }
    </style>
</head>
<body>
    <h3><?php echo $penulis; ?> Tulis Artikelmu Disini...</h3>

    <form action="" method="post">
            <ul>
                <label for="penulis">Penulis :</label> <br>
                <input type="text" name="penulis" id="penulis" value="<?php echo htmlspecialchars($penulis); ?>" readonly style="width: -webkit-fill-available">
            </ul>
            <ul>
                <label for="kategori">Kategori :</label> <br>
                <select name="kategori" id="kategori" required>
                    <option value="article">Article</option>
                    <option value="newspaper">Newspaper</option>
                </select>
            </ul>
            <ul>
                <label for="gambar">Gambar :</label> <br>
                <input type="url" name="gambar" id="gambar" required style="width: -webkit-fill-available">
            </ul>
            <ul>
                <label for="gambar_2">Gambar 2 :</label> <br>
                <input type="url" name="gambar_2" id="gambar_2" required style="width: -webkit-fill-available">
            </ul>
            <ul>
                <label for="judul">Judul :</label> <br>
                <input type="text" name="judul" id="judul" required style="width: -webkit-fill-available">
            </ul>
            <ul>
                <label for="link">Sumber :</label> <br>
                <input type="text" name="link" id="link" required style="width: -webkit-fill-available">
            </ul>
            <ul>
                <label for="created_at">Created_at :</label> <br>
                <input type="date" id="created_at" name="created_at" required>
            </ul>
            <ul>
                <label for="isi">Isi :</label> <br>
                <textarea name="isi" id="isi" required style="height:15rem; width: -webkit-fill-available; text-align:justify; padding: 10px;"></textarea>
            </ul>
            <ul>
                <label for="isi_2">Isi 2 :</label> <br>
                <textarea name="isi_2" id="isi_2" required style="height:15rem; width: -webkit-fill-available; text-align:justify; padding: 10px;"></textarea>
            </ul>
            <ul>
                <button type="submit" name="submit">Pos Artikel!</button>
            </ul>
    </form>
    <p>Atau Kembali ke <a href="dasboard.php">halaman dasboard</a></p>
    <br><br>

</body>
</html>