<?php
session_start();

$id = $_GET['id'];

$_SESSION['contacts'] = array_values(
    array_filter($_SESSION['contacts'], fn($c) => $c['id'] != $id)
);

foreach ($_SESSION['contacts'] as $i => &$c) {
    $c['id'] = $i + 1;
}

header("Location: index.php");
exit;
