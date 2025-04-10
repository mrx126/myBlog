<?php

function detailArtikel($idArtikel)
{
    // query data
	$atc = query("SELECT * FROM artikels WHERE id = $idArtikel ");
	return $atc;

	// global $conn;
	// $query = "SELECT * FROM artikels WHERE id = '$idArtikel' ";
	// $res   = mysqli_query($conn, $query);
	// $row   = mysqli_fetch_assoc($res);
	// return $row;
}

function detailArtikelUtama($id)
{
	// query data mahasiswa berdasarkan id
	$atc = query("SELECT * FROM artikels WHERE id = $id")[0];
	// // var_dump($atc);
	// 	$res   = mysqli_query($conn, $query);
	// 	$row   = mysqli_fetch_assoc($res);
	return $atc;
}

function detailArtikelFull()
{
	$atc = query("SELECT * FROM artikels");
	return $atc;
}

function detailArtikelByPenulis($penulis)
{
	$atc = query ("SELECT * FROM artikels WHERE penulis = '$penulis'");
	return $atc;
}

function detailArtikelNewspaper() {
    // Pastikan function query() sudah didefinisikan
    $newspaper = query("SELECT * FROM artikels WHERE kategori = 'newspaper'");
    return $newspaper;
}

function tambah ($data) {
    global $conn;
    // ambil data dari tiap elemen dalam form
    $penulis = $data["penulis"];
    $kategori = $data["kategori"];
    $gambar = $data["gambar"];
    $gambar2 = $data["gambar_2"];
    $judul = $data["judul"];
    $link = $data["link"];
    $isi = $data["isi"];
    $isi2 = $data["isi_2"];
    $created_at = $data["created_at"];
    // query insert data
    $query = "INSERT INTO 
                artikels (penulis, kategori, gambar, gambar_2, judul, link, isi, isi_2, created_at)
                VALUES 
                ('$penulis', '$kategori', '$gambar', '$gambar2', '$judul', '$link', '$isi', '$isi2', '$created_at')";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function ubah ($data) {
    global $conn;
    // ambil data dari tiap elemen dalam form
    $id = $data["id"];
    $penulis = $data["penulis"];
    $kategori = $data["kategori"];
    $gambar = $data["gambar"];
    $gambar2 = $data["gambar_2"];
    $judul = $data["judul"];
    $link = $data["link"];
    $isi = $data["isi"];
    $isi2 = $data["isi_2"];
    $created_at = $data["created_at"];
    // query insert data
    $query = "UPDATE artikels SET
                penulis = '$penulis',
                kategori = '$kategori',
                gambar = '$gambar',
                gambar_2 = '$gambar2',
                judul = '$judul',
                link = '$link',
                isi = '$isi',
                isi_2 = '$isi2',
                created_at = '$created_at'
            WHERE id = $id
            ";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

// function hapus
function hapus($id) {
    global $conn;
    mysqli_query($conn, "DELETE FROM artikels WHERE id = $id");
    return mysqli_affected_rows($conn);
}
?>