<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $name  = trim($_POST['name']);
    $phone = trim($_POST['phone']);

    if ($name !== '' && $phone !== '') {

        $new_id = count($_SESSION['contacts']) + 1;

        $_SESSION['contacts'][] = [
            "id"    => $new_id,
            "name"  => $name,
            "phone" => $phone
        ];

        header('Location: index.php');
        exit;
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Kontak</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

<h2>Tambah Kontak</h2>

<form method="POST">

    <input 
        type="text" 
        name="name" 
        class="input" 
        placeholder="Masukkan nama"
    ><br><br>

    <input 
        type="text" 
        name="phone" 
        class="input" 
        placeholder="Masukkan nomor telepon"
    ><br><br>

    <button type="submit">Simpan</button>
    <a href="index.php">Batal</a>

</form>

</div>

</body>
</html>
