<?php
session_start();

if ( !isset($_SESSION["login"]) ) {
    header ("location: login.php");
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

if (isset($_POST["register"])) {
    $result = registrasi($_POST);
    if ($result !== false) {
        echo "<script>
            alert('user baru berhasil ditambahkan!');
            document.location.href = 'admin.php';
        </script>";
    } else {
        echo "<script>
            alert('Gagal menambahkan user baru: ' + " . mysqli_error($conn) . ");
        </script>";
    }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="https://static.vecteezy.com/system/resources/previews/006/984/425/non_2x/mrz-letter-logo-design-on-black-background-mrz-creative-initials-letter-logo-concept-mrz-letter-design-vector.jpg" type="image/png">
    <title>Halaman Regristrasi</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 2rem;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .registration-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 20rem;
        }

        .registration-container h1 {
            text-align: center;
        }

        .registration-container form ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }

        .registration-container form li {
            margin-bottom: 10px;
        }

        .registration-container form label {
            display: block;
            font-weight: bold;
        }

        .registration-container form input[type="text"],
        .registration-container form input[type="email"],
        .registration-container form input[type="password"] {
            width: 93%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .registration-container form button {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .registration-container form button:hover {
            background-color: darkgray;
        }
        a {
            text-decoration: none;
        }
    </style>
</head>
<body>

<div class="registration-container">
    <h4>Hi, <?php echo $penulis ?>...<h4>
    <h3>Ini Halaman Registrasi</h3>

    <form action="" method="post">
        <ul>
            <li>
                <label for="nama">Nama:</label>
                <input type="text" name="penulis" id="penulis" required>
            </li>
            <li>
                <label for="email">Email:</label>
                <input type="email" name="email" id="email" required>
            </li>
            <li>
                <label for="username">Username:</label>
                <input type="text" name="username" id="username" required>
            </li>
            <li>
                <label for="password">Password:</label>
                <input type="password" name="password" id="password" required>
            </li>
            <li>
                <label for="password2">Konfirmasi Password:</label>
                <input type="password" name="password2" id="password2" required>
            </li>
            <li>
                <button type="submit" name="register">Register!</button>
            </li>
            <li>
                <p>Kembali ke <a href="admin.php">halaman admin</a></p>
            </li>
        </ul>
    </form>
</div>

</body>
</html>
