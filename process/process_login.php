<?php

require_once('function/helper.php');
require_once('function/koneksi.php');

//? get req user

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = md5($_POST['password']);

    $query = mysqli_query($kon, "SELECT * FROM users WHERE username = '$username' AND password = '$password'");

    if (mysqli_num_rows($query) != 0) {
        $row = mysqli_fetch_assoc($query);

        session_start();
        $_SESSION['id'] = $row['id'];
        $_SESSION['role'] = $row['role'];

        if ($row['role'] == 'admin') {
            header("location: " . BASE_URL . 'layout/dashboard.php?page=admin');
        } else if ($row['role'] == 'user') {
            header("location: " . BASE_URL . 'layout/dashboard.php?page=user');
        }
    } else {
        header("location: " . BASE_URL);
    }
}
