<?php
require_once("function/helper.php");
require_once "process/process_login.php";

session_start();
if (isset($_SESSION['is_login'])) {
    $role = $_SESSION['role'];
    header('location:' . BASE_URL . 'layout/dashboard.php?page=' . $role);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <a href="<?= BASE_URL . 'register.php' ?>">REGISTRASI</a>
    <form method="post">
        <label for="username">Username:</label>
        <input type="text" name="username" id="username">

        <label for="password">password</label>
        <input type="text" name="password" id="password">
        <button type="submit" name="login">Login</button>
    </form>
</body>

</html>