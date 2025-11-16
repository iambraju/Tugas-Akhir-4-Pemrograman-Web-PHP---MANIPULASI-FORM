<?php
session_start();

if (isset($_SESSION['login'])) {
    header("Location: index.php");
    exit;
}

$error = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if ($_POST['username'] === "admin" && $_POST['password'] === "123") {
        $_SESSION['login'] = true;
        header("Location: index.php");
        exit;
    } else {
        $error = "Username atau password salah.";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container small">
<h2>Login</h2>

<?php if ($error): ?>
<p class="error"><?= $error ?></p>
<?php endif; ?>

<form method="POST">
    <label>Username</label>
    <input class="input full" type="text" name="username">

    <label>Password</label>
    <input class="input full" type="password" name="password">

    <button class="btn">Login</button>
</form>

</div>
</body>
</html>
