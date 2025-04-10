<?php

function tampilKomentarUrut()
{
	// Query untuk mengambil komentar untuk dashboard
	$komentar = query("	SELECT
							id, 
							id_komen,  
								CASE
									WHEN id_komen = 0 THEN id
									ELSE id_komen  
								END AS id_full, 
							judul, 
							tanggal, 
							nama,
							COALESCE(
								CASE
									WHEN id_komen = 0 THEN isi 
								END, '-') Komentar_Utama,
							COALESCE(
								CASE
									WHEN id_komen != 0 THEN isi 
								END, '-') Komentar_Balas
						FROM 
							komentar 
						ORDER BY 
							judul, 
							id_full, 
							id_komen, 
							id;
					");
		// var_dump($komentar);

	return $komentar;
}

function tampilKomentar($idArtikel)
{
	$atc = query("SELECT * FROM komentar WHERE artikel = $idArtikel AND id_komen = 0");
	return $atc;

	// global $conn;
	// // Query untuk mengambil komentar dengan artikel = $idArtikel dan id_komen = 0
	// $query = "SELECT * FROM komentar WHERE artikel = $idArtikel AND id_komen = 0";
	// $res   = mysqli_query($conn, $query);
	// $row   = [];
	// while ($rows = mysqli_fetch_assoc($res)) {
	// 	$row[] = $rows;
	// }
	// return $row;
}

function postKomentar($data, $idArtikel)
{
    global $conn;

	$judul = $data['judul'];
	$idKomentar = $data['idKomentar'];
	$nama = $data['nama'];
	$nama2 = $data['nama2'];
    $isi = $data['isi'];
	$tanggal = $data['tanggal'];

    // Sesuaikan nama kolom dengan struktur tabel
    $query = "INSERT INTO komentar (artikel, judul, id_komen, nama, nama2, isi, tanggal) VALUES ('$idArtikel','$judul', '$idKomentar', '$nama', '$nama2', '$isi', '$tanggal')";

	return mysqli_query($conn, $query);
}

function balasKomentar ($id) {
	global $conn;
	if (isset($id)) {
		$row_id = intval($id);
		$query = "SELECT nama FROM komentar WHERE id = ?";
		if ($stmt = mysqli_prepare($conn, $query)) {
			mysqli_stmt_bind_param($stmt, "i", $row_id);
			mysqli_stmt_execute($stmt);
			mysqli_stmt_bind_result($stmt, $nama);
			
			if (mysqli_stmt_fetch($stmt)) {
				return htmlspecialchars($nama);
			} else {
				return 'Nama tidak ditemukan.';
			}
			mysqli_stmt_close($stmt);
		} else {
			return 'Query gagal.';
		}
	}; 
}


function balasKomentar2 ($id, $commentId) {
	global $conn;
	$query = "SELECT * FROM komentar WHERE artikel = $id AND id_komen = $commentId";
	$balasanKomentar = mysqli_query ($conn, $query);
	return $balasanKomentar;
}

function hapus3($id3) {
    global $conn;
    mysqli_query($conn, "DELETE FROM komentar WHERE id = $id3");
    return mysqli_affected_rows($conn);
}
