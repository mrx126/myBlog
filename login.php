<?php
session_start();
if (isset($_SESSION["login"])) {
    header("Location: dasboard.php");
    exit;
}

require 'fungsiComentar/functions.php';

if (isset($_POST["login"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Panggil function prosesLogin
    $login = prosesLogin($username, $password);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="https://static.vecteezy.com/system/resources/previews/006/984/425/non_2x/mrz-letter-logo-design-on-black-background-mrz-creative-initials-letter-logo-concept-mrz-letter-design-vector.jpg" type="image/png">
    <title>Halaman Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .login-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .login-container h1 {
            text-align: center;
        }

        .login-container form ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }

        .login-container form li {
            margin-bottom: 10px;
        }

        .login-container form label {
            display: block;
            font-weight: bold;
        }

        .login-container form input[type="text"],
        .login-container form input[type="password"] {
            width: 93%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .login-container form button {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .login-container form button:hover {
            background-color: darkgray;
        }
        a {
            text-decoration: none;
        }
    </style>
</head>
<body>
<div class="login-container">
    <h3>Halaman Login</h3>
    <?php if ( isset($login)) : ?>
        <p style="color:red; font-style:italic;">username / password salah!</p>
    <?php endif; ?>
    <form action="" method="post">
    <ul>
        <li>
            <label for="username">Username:</label>
            <input type="text" name="username" id="username" required>
        </li>
        <li>
            <label for="password">Password:</label>
            <input type="password" name="password" id="password" required>
        </li>
        <li>
            <button type="submit" name="login">Login!</button>
        </li>
        <li>
            <p>atau <a href="index.php">kembali</a></p>
        </li>
    </ul>
</form>
</div>
</body>
</html>