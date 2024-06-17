<?php
require_once('../function/helper.php');
require_once('../process/process_tambah_data.php');
require_once('../process/process_baca_data.php');

session_start();
$page = isset($_GET['page']) ? $_GET['page'] : false;
if ($_SESSION['is_login'] = false) {
    header('location:' . BASE_URL);
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/style.css">
</head>

<body>
    <a href="<?= BASE_URL . 'process/process_logout.php' ?>"> logout</a>
    <div>
        <?php
        $filename = "../pages/$page.php";

        if (file_exists($filename)) {
            include_once($filename);
        } else {
            echo "404";
        }

        ?>
    </div>
    <div>
        <div>
            <form method="post">
                <label for="nama"></label>
                <input type="text" name="nama" id="nama" placeholder="nama">
                <label for="harga"></label>
                <input type="text" name="harga" id="harga" placeholder="harga">
                <button type="submit" name="tambah_data">Tambah</button>
            </form>
        </div>
        <table border="1">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Harga</th>
                <th>Act</th>
            </tr>
            <?php foreach ($data as $no => $row) : ?>
                <tr>
                    <td><?= $no + 1 ?></td>
                    <td><?= $row['nama'] ?></td>
                    <td><?= $row['harga'] ?></td>
                    <td>
                        <a href="<?= BASE_URL . 'process/process_delete_data.php?id=' . $row['id'] ?>">del</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>
</body>

</html>