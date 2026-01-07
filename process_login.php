<?php
session_start();

$demoEmail = 'admin@example.com';
$demoPassword = '123456';

$email = $_POST['email'] ?? '';
$password = $_POST['password'] ?? '';

if ($email === '' || $password === '') {
    header('Location: login.php?err=1');
    exit;
}

if ($email === $demoEmail && $password === $demoPassword) {

    $_SESSION['user'] = [
        'email' => $email,
        'role' => 'admin',
        'login_time' => date('Y-m-d H:i:s')
    ];

    setcookie('remember_email', $email, time() + 7*24*60*60, '/');

    header('Location: dashboard.php');
    exit;
}

header('Location: login.php?err=1');
exit;
