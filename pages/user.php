<?php
require_once('../function/helper.php');

if ($_SESSION['role'] != 'user') {
    header('location:' . BASE_URL . 'layout/dashboard.php?page=admin');
    exit();
}
?>
<div>
    <h1>USER</h1>
</div>