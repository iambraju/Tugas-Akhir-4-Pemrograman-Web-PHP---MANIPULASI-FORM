<?php
session_start();

$id = $_GET['id'] ?? 0;
$found = null;

// cari kontak berdasarkan ID
foreach ($_SESSION['contacts'] as $c) {
    if ($c['id'] == $id) {
        $found = $c;
        break;
    }
}

if (!$found) {
    echo "Kontak tidak ditemukan.";
    exit;
}

// proses saat tombol update ditekan
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    foreach ($_SESSION['contacts'] as &$c) {
        if ($c['id'] == $id) {
            $c['name']  = trim($_POST['name']);
            $c['phone'] = trim($_POST['phone']);
        }
    }

    header("Location: index.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Kontak</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <h2>Edit Kontak</h2>

    <form method="POST">

        <input 
            type="text"
            name="name"
            class="input"
            value="<?= $found['name'] ?>"
            placeholder="Masukkan nama"
        >
        <br><br>

        <input 
            type="text"
            name="phone"
            class="input"
            value="<?= $found['phone'] ?>"
            placeholder="Masukkan nomor telepon"
        >
        <br><br>

        <button type="submit">Update</button>
        <a class="btn gray" href="index.php">Batal</a>

    </form>

</div>

</body>
</html>
