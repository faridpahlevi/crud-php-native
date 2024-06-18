<?php
require "../function/koneksi.php";
require "../process/process_ubah_data.php";

$id = $_GET['id'];
$query = mysqli_query($kon, "SELECT * FROM product WHERE id='$id'");
$row = mysqli_fetch_assoc($query);
$kon->close();
?>

<div>
    <form method="post">
        <label for="nama"></label>
        <input type="text" name="nama" id="nama" placeholder="nama" value="<?= $row['nama'] ?>">
        <label for="harga"></label>
        <input type="text" name="harga" id="harga" placeholder="harga" value="<?= $row['harga'] ?>">
        <button type="submit" name="ubah_data">ubah data</button>
    </form>
</div>