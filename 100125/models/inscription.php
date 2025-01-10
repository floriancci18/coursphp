<?php
// Fonction pour créer un utilisateur
function creerUtilisateur($email='',$password='')
{
    // Je vérifie si email et password ont des valeurs
    if(!empty($email) && !empty($password))
    {
        $fichier = fopen('membres.csv','a'); // J'ouvre un fichier membres.csv
        fputcsv($fichier,[$email,$password],";"); // J'écris une ligne dans mon csv
        fclose($fichier); // Je ferme le fichier
        // Je vais stocker dans un cookie les valeurs
        setcookie('membres',serialize(['email' => $email,'password' => $password]),(time()+3600));
        return true; // Je retourne pour true
    }
    return false; // Si pas d'email ni de mot de passe je retourne false
}
?>