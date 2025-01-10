<?php
// Je vais traiter le formulaire d'inscription
if(isset($_POST['submit']))
{
    // On vérifie si les champs ont bien une valeur
    if(!empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['password2']))
    {
        // Je vérifie si les 2 password sont identiques
        if($_POST['password'] == $_POST['password2'])
        {
            // On va hasher le mot de passe
            $password = password_hash($_POST['password'],PASSWORD_DEFAULT);
            // Je fais appel au modèle pour créer l'utilisateur
            if(creerUtilisateur($_POST['email'],$password))
            {
                // Je redirige l'utilisateur vers la page connection
                header('location:index.php?route=login');
                exit; // Je quitte le script
            }
            else
            {
                // Si le modèle n'a pas pu créer l'utilisateur
                $message = 'Je code comme titi';
            }
        }
        else
        {
            // Si les 2 mots de passe ne sont pas identique
            $message = 'Veuillez mettre 2 mots de passe identique!!!!';
        }
    }
    else
    {
        // Si un des champs n'est pas remplit
        $message = 'Veuillez remplir tout les champs !!! (de blé ou chanvre)';
    }
}
else
{
    $message = '';
}

?>