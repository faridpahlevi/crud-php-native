<?php
require_once "function/koneksi.php";
require_once "function/helper.php";

if (isset($_POST['register'])) {
    $username = $_POST['username'];
    $password = md5($_POST['password']);

    $query = "INSERT INTO users (username, password, role) VALUES ('$username', '$password', 'user')";
    $cek = mysqli_query($kon, "SELECT * FROM users WHERE username='$username'");

    if (mysqli_num_rows($cek) > 0) {
        echo "USERNAME SUDAH DIGUNAKAN";
    } else {
        if ($kon->query($query)) {
            header('location:' . BASE_URL);
        } else {
            header('location:' . BASE_URL . 'register.php');
        }
    }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="post">
        <label for="username">Username:</label>
        <input type="text" name="username" id="username">

        <label for="password">password</label>
        <input type="text" name="password" id="password">
        <button type="submit" name="register">daftar</button>
    </form>
</body>

</html>