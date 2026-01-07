<?php
include 'require_login.php';

$user = $_SESSION['user'];
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>

<div class="container">
    <h2>Xin chào</h2>

    <p><strong><?= htmlspecialchars($user['email']) ?></strong></p>
    <p>Login lúc: <?= $user['login_time'] ?></p>

    <div class="menu">
        <a href="#">Home</a> |
        <a href="#">Profile</a> |
        <a href="logout.php">Logout</a>
    </div>
</div>

</body>
</html>
