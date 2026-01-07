<?php
session_start();

if (isset($_SESSION['user'])) {
    header('Location: dashboard.php');
    exit;
}

$email = $_COOKIE['remember_email'] ?? '';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>

<div class="container">
    <h2>Đăng nhập</h2>

    <?php if (isset($_GET['err'])): ?>
        <div class="error">Email hoặc mật khẩu không đúng!</div>
    <?php endif; ?>

    <form method="POST" action="process_login.php">
        <input type="email" name="email"
               placeholder="Email"
               value="<?= htmlspecialchars($email) ?>" required>

        <input type="password" name="password" placeholder="Password" required>

        <button type="submit">Đăng nhập</button>
    </form>
</div>

</body>
</html>
