<?php
require 'config.php';

#function isLoggedIn() {
#   return isset($_SESSION['CONNECT']) && $_SESSION['CONNECT'] === 'OK';
#}

if (!isLoggedIn()) {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Accueil</title>
</head>
<body>
    <p>Hello <?php echo $_SESSION['username']; ?></p>
    <a href="validation.php?afaire=deconnexion">Deconnexion</a>
</body>
</html>

