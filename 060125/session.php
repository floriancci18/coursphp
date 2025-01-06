<?php
session_start(); // J'utilise session_start pour utiliser les sessions
// Je déclare une session prenom avec comme valeur Melyne
$_SESSION['prenom'] = 'Melyne';
$_SESSION['nom'] = 'lopes';
// Pour récupérer la session
echo $_SESSION['prenom'];
var_dump($_SESSION);
?>