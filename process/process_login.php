<?php

require_once('function/helper.php');
require_once('function/koneksi.php');

//? get req user

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = mysqli_query($kon, "SELECT * FROM users WHERE username = '$username'");

    if (mysqli_num_rows($query) != 0) {
        $row = mysqli_fetch_assoc($query);
        if (password_verify($password, $row['password'])) {
            session_start();
            $_SESSION['is_login'] = true;
            $_SESSION['role'] = $row['role'];

            if ($row['role'] == 'admin') {
                header("location: " . BASE_URL . 'layout/dashboard.php?page=admin');
            } else if ($row['role'] == 'user') {
                header("location: " . BASE_URL . 'layout/dashboard.php?page=user');
            }
        }
        $kon->close();
    } else {
        header("location: " . BASE_URL);
    }
}
