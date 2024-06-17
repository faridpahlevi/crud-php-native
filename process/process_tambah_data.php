<?php
require_once "../function/koneksi.php";

if (isset($_POST['tambah_data'])) {
    $nama = htmlspecialchars($_POST['nama']);
    $harga = htmlspecialchars($_POST['harga']);

    $query = "INSERT INTO product (nama, harga) VALUES ('$nama', '$harga')";
    if ($kon->query($query)) {
        echo "DATA BERHASIL DI TAMBAH";
    } else {
        echo "GAGAL";
    }
    $kon->close();
}
