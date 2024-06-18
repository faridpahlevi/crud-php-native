<?php
require "../function/koneksi.php";

if (isset($_POST['ubah_data'])) {
    $id = $_GET['id'];
    $nama = $_POST['nama'];
    $harga = $_POST['harga'];

    $query = "UPDATE product SET nama='$nama', harga='$harga' WHERE id = '$id'";
    $kon->query($query);
    $role = $_SESSION['role'];
    header('location:' . BASE_URL . "layout/dashboard.php?page=" . $role);
}
