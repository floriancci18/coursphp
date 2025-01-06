<?php
//var_dump($_POST);
if(isset($_POST['submit']))
{
    if(!empty($_POST['email']) && !empty($_POST['password']))
    {
        // Je hashe le mot de passe avec la fonction password_hash
        $password_crypte = password_hash($_POST['password'],PASSWORD_DEFAULT);
        // J'enregistre la clé de hashage dans un cookie
        setcookie('motdepasse',$password_crypte,(time()+3600));
        echo $password_crypte; // J'affiche la clé de hashage
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire POST</title>
</head>
<body>
    <form name="inscription" method="POST" action="">
        <div>
            <label for="email">Email :</label>
            <input type="email" name="email">
        </div>
        <div>
            <label for="password">Mot de passe:</label>
            <input type="password" name="password">
        </div>
        <button type="submit" name="submit">Inscription</button>
    </form>
</body>
</html>