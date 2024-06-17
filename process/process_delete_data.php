<?php
require "../function/koneksi.php";
require "../function/helper.php";

session_start();

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $query = "DELETE FROM product WHERE id = '$id'";
    $kon->query($query);
    $role = $_SESSION['role'];
    header('location:' . BASE_URL . "layout/dashboard.php?page=" . $role);
}
