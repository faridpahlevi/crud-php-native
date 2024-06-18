<?php

require "../function/koneksi.php";

$query = "SELECT * FROM product";
$data = $kon->query($query);
$kon->close();
