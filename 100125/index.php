<?php
// C'est le fichier d'entré
// Il va diriger vers les différentes vues
// Les routes vont être gérer avec un switch
if(!empty($_GET['route']))
{
    // Si route n'est pas vide je l'enregistre dans la variable route
    $route = $_GET['route'];
}
else
{
    // Sinon la variable route vaut null
    $route = null;
}
switch($route)
{
    // Pour la vue inscription
    case 'inscription':
        // J'instancie le titre de la page
        $titrepage = 'Inscription';
        // Je charge le modèle et le controller
        require_once('models/inscription.php');
        require_once('controllers/inscription.php');
        // Je charge le template
        $template = file_get_contents('views/inscription.html');
        // Je vais remplacer ma variable {ERREUR} par la variable $message
        $template = str_replace('{ERREUR}',$message,$template);
    break;
    // pour la vue login
    case 'login':

    break;
    // Pour la vue espace membre
    case 'membres':

    break;
    // Vue par défault (page index)
    default:
        $titrepage = 'Accueil'; // Je défini le titre du site
        $template = file_get_contents('views/index.html'); // Je charge ma vue
    break;
}
include('views/header.php'); // Pour afficher le header du site
echo $template; // Pour afficher le contenu du site
include('views/footer.php'); // Pour afficher le footer du site
?>