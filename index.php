<?php
session_start();
if (!isset($_SESSION['login'])) {
    header("Location: login.php");
    exit;
}

if (!isset($_SESSION['contacts'])) {
    $_SESSION['contacts'] = [];
}
$contacts = $_SESSION['contacts'];
?>
<!DOCTYPE html>
<html>
<head>
    <title>Data Kontak</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

<h2>Data Kontak</h2>

<a class="btn" href="add.php">Tambah Kontak</a>
<a class="btn gray" style="float:right;" href="logout.php">Logout</a>

<table class="data-table">
    <tr>
        <th>ID</th>
        <th>Nama</th>
        <th>Telepon</th>
        <th>Operasi</th>
    </tr>

    <?php foreach ($contacts as $c): ?>
    <tr>
        <td><?= $c['id'] ?></td>
        <td><?= $c['name'] ?></td>
        <td><?= $c['phone'] ?></td>
        <td>
            <a class="link" href="edit.php?id=<?= $c['id'] ?>">Edit</a> |
            <a class="link red" href="delete.php?id=<?= $c['id'] ?>" onclick="return confirm('Hapus kontak?')">Hapus</a>
        </td>
    </tr>
    <?php endforeach; ?>
</table>

</div>

</body>
</html>
