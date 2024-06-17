<?php
require_once('../function/helper.php');

if ($_SESSION['role'] != 'admin') {
    header('location:' . BASE_URL . 'layout/dashboard.php?page=user');
    exit();
}
?>
<div>
    <h1>ADMIN</h1>
</div>