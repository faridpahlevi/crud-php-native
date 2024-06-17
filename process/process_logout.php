<?php
require_once('../function/helper.php');
require_once('../function/koneksi.php');

session_start();
session_unset();
session_destroy();

header("location: " . BASE_URL);
