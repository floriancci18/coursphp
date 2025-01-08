<?php

    // On vérifie si des apprenants sont coché
    if(!empty($_POST['apprennant']))
    {
        // Je compte le nombre d'élément dans mon tableau
        $taille = count($_POST['apprennant']); 
        $rand = rand(0,$taille-1);
        $utilisateur = $_POST['apprennant'][$rand];
    }
    else
    {
        echo 'Veuillez sélectionner au moins 1 apprennant';
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Résultat</title>
    <link rel="stylesheet" href="tirage.css">
</head>
<body id="resultat">
    <div>
        <?=$utilisateur; ?>
    </div>
    <a href="tirage.php">Retour</a>
</body>
</html>
