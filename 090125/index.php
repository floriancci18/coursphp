<?php
session_start(); // J'active les sessions
// Je charge mon fichier function.php
require_once('function.php');
// Je génère le token
$token = genererToken();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test token</title>
</head>
<body>
    <a href="page.php?token=<?=$token;?>">Accéder à ma page</a>
</body>
</html>