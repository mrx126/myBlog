<?php
function user()
{
	$Penulis = query("SELECT * FROM portfolio1");
    return $Penulis;
}

function user2($idUser)
{
	$penulis = query("SELECT penulis FROM portfolio1 WHERE id = $idUser")[0] ["penulis"];
    return $penulis;
}

function registrasi($data) {
    global $conn;
    $penulis = stripslashes($data["penulis"]);
    $email = stripslashes($data["email"]);
    $username = strtolower(stripslashes($data["username"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $password2 = mysqli_real_escape_string($conn, $data["password2"]);
    // cek username sudah ada atau belum
    $result = mysqli_query($conn, "SELECT username FROM portfolio1 WHERE username = '$username'");
    if (mysqli_fetch_assoc($result) ) {
        echo " <script>
                alert('username sudah terdaftar!');
            </script>";
        return false;
    }
    // cek konfirmasi password
    if ($password !== $password2) {
        echo "<script>
                alert('konfirmasi password tidak sesuai');
            </script>";
        return false;
    }
    // enkripsi pasword
    $password = password_hash($password, PASSWORD_DEFAULT);
    // var_dump($password); die;
    // tambahkan user baru ke database
    mysqli_query ($conn, "INSERT INTO portfolio1 (username, password, penulis, email) VALUES('$username', '$password', '$penulis', '$email')");
    mysqli_affected_rows($conn);
}
function hapus2($id2) {
    global $conn;
    mysqli_query($conn, "DELETE FROM portfolio1 WHERE id = $id2");
    return mysqli_affected_rows($conn);
}

function prosesLogin($username, $password) {
    global $conn; // Mengakses variabel global $conn

    // Menggunakan prepared statement untuk keamanan
    $stmt = $conn->prepare("SELECT * FROM portfolio1 WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();
    
    if ($result->num_rows === 1) {
        // cek password
        $row = $result->fetch_assoc();
        if (password_verify($password, $row["password"])) {
            // Memeriksa kesesuaian username dengan case-sensitive
            if (strcmp($username, $row["username"]) === 0) {
                // set session
                $_SESSION["user_id"] = $row["id"]; // Simpan ID pengguna di session
                $_SESSION["login"] = true;
                header("Location: dasboard.php");
                exit;
            }
        }
    }
    return true;
}