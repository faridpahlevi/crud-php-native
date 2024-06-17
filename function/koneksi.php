<?php

$server = "localhost";
$usernmae = "root";
$pasword = "";
$db_name = "php-native";

$kon = mysqli_connect($server, $usernmae, $pasword, $db_name) or die("koneksi db gagal");
