<?php
define('LEBONLOGIN', 'crepo');
define('LEBONPASS', 'nutella');
session_start();

function isLoggedIn() {
    return isset($_SESSION['CONNECT']) && $_SESSION['CONNECT'] === 'OK';
}

$errorMessages = [
    '1' => 'Veuillez saisir un login et un mot de passe',
    '2' => 'Erreur de login/mot de passe',
    '3' => 'Vous avez été déconnecté du service'
];
?>
