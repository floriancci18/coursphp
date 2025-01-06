<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fichier avec inclusion</title>
</head>
<body>
    <?php
    include_once('header.php'); // Pour inclure le fichier header
    include_once('header.php');
    ?>
<main>
    <h1>Quel beau site !!</h1>
</main>
    <?php
    $date = '06/01/2025';
    include_once('footer.php');
    ?>
</body>
</html>