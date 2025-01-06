<?php
//var_dump($_GET); // affichage des informations passée en GET
if(isset($_GET['submit'])) // Je vérifie si le formulaire a été soumis
{
    if(!empty($_GET['prenom'])) // Si prénom n'est pas vide
    {
        // J'affiche le prénom
        echo 'Votre prenom est :'.$_GET['prenom'];
        //print('Votre prenom est :'.$_GET['prenom']);
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire GET</title>
</head>
<body>
    <form name="test" method="GET" action="">
        <div>
            <label for="prenom">Votre prénom</label>
            <input type="text" name="prenom">
        </div>
        <button type="submit" name="submit">Envoyer</button>
    </form>
</body>
</html>