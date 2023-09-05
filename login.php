<?php 
require 'config.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Formulaire de Connexion</title>
</head>
<body>
    <h1>Connexion</h1>
    <?php
    if (isset($_GET['error']) && isset($errorMessages[$_GET['error']])) {
        echo '<p>' . $errorMessages[$_GET['error']] . '</p>';
    }
    ?>
    <form action="validation.php" method="post">
        <label for="username">Login :</label>
        <input type="text" id="username" name="username"><br><br>
        <label for="password">Mot de passe :</label>
        <input type="password" id="password" name="password"><br><br>
        <input type="submit" value="Se connecter !">
    </form>
</body>
</html>
