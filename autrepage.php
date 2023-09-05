<?php 
require 'config.php';

if (!isLoggedIn()) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Autre Page Sécurisée</title>
</head>
<body>
    <p>Vous venez d'ouvrir une nouvelle page en étant connecté <?php echo $_SESSION['username']; ?>!</p>
    <a href="validation.php?afaire=deconnexion">Déconnexion</a>
</body>
</html>
