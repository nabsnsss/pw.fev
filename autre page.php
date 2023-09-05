<?php require 'config.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <title>Autre Page Sécurisée</title>
</head>
<body>
    <?php
    if (!isLoggedIn()) {
        header("Location: login.php");
        exit();
    }
    ?>
    <p>Bienvenue sur une autre page sécurisée, <?php echo $_SESSION['username']; ?>!</p>
    <a href="validation.php?afaire=deconnexion">Déconnexion</a>
</body>
</html>
