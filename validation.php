<?php
require 'config.php';
session_start();

if (isset($_GET['afaire']) && $_GET['afaire'] === 'deconnexion') {
    session_destroy();
    header("Location: login.php?error=3");
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (empty($username) || empty($password)) {
        header("Location: login.php?error=1");
        exit();
    }

    if ($username === LEBONLOGIN && $password === LEBONPASS) {
        $_SESSION['CONNECT'] = 'OK';
        $_SESSION['username'] = $username;
        $_SESSION['password'] = $password;
        header("Location: accueil.php");
        exit();
    } else {
        header("Location: login.php?error=2");
        exit();
    }
} else {
    header("Location: login.php");
    exit();
}
?>
