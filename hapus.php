<?php
session_start();

if ( !isset($_SESSION["login"]) ) {
  header("Location:login.php");
  exit;
}

require "fungsiComentar/functions.php";

// Menggunakan isset() untuk memastikan kunci "id" atau "id2" ada dalam $_GET
if (isset($_GET["id"])) {
    $id = $_GET["id"];
} elseif (isset($_GET["id2"])) {
    $id2 = $_GET["id2"];
} elseif (isset($_GET["id3"])) {
    $id3 = $_GET["id3"];
}
// echo $id;

// Hapus data berdasarkan ID yang diberikan
if(isset($id)) {
    if (hapus($id) > 0) {
        echo "
            <script>
                alert('data berhasil dihapus!');
                window.location.href = 'dasboard.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('data gagal dihapus!');
                window.location.href = 'dasboard.php';
            </script>
        ";
    }
} elseif(isset($id2)) {
    if (hapus2($id2) > 0) {
        echo "
            <script>
                alert('admin berhasil dihapus!');
                window.location.href = 'admin.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('admin gagal dihapus!');
                window.location.href = 'admin.php';
            </script>
        ";
    }
} elseif(isset($id3)) {
    if (hapus3($id3) > 0) {
        echo "
            <script>
                alert('komentar berhasil dihapus!');
                window.location.href = 'comment.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('komentar gagal dihapus!');
                window.location.href = 'comment.php';
            </script>
        ";
    }
}

?>