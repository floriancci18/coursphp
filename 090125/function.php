<?php
function genererToken()
{
    // Chaine de caractère pour le token
    $chaine = 'èazertyuiopqsdfghjklmwxcvbnAZERTYUIOPQSDFGHJKLMWXCVBN0123456789é"(-_)=';
    // Je transforme ma chaine en tableau
    $tableau = mb_str_split($chaine);
    // Je compte le nombre d'élément dans le tableau
    $longueur = count($tableau);
    // J'initialise une variable token vide
    $token = '';
    // On va générer une clé aléatoire avec une boucle for avec une longueur comprise entre 16 et 30
    for($i=0;$i<rand(16,30);$i++)
    {
        // J'ajoute un caractère au token à chaque itération
        $token.= $tableau[rand(0,$longueur-1)];
    }
    // Je hashe le token
    $token = md5(sha1($token));
    // J'enregistre mon token dans une session
    $_SESSION['token'] = $token;
    // Une fois mon token terminé je le retourne
    return $token;
}
// Fonction qui vérifie le token
function verifierToken($cle)
{
    if($_SESSION['token'] === $cle)
    {
        return true;
    }
    else
    {
        return false;
    }
}
/*function genererMotDePasse($longueur,$speciaux,$chiffres,$maj)
{

}*/
// Je déclare une fonction avec en argument un tableau de paramètre vide
function genererMotDePasse($param=array())
{
    // Je créer un tableau avec des valeurs par défaut
    $default = [
        'longueur'  => 16,
        'speciaux'  => 3,
        'maj'       => 3,
        'chiffres'  => 4
    ];
    // Je fusionne les 2 tableaux
    $param = array_merge($default,$param);
    // Je créer mes 4 chaines de caractères
    $chaine = 'azertyuiopqsdfghjklmwxcvbn';
    $majuscule = 'AZERTYUIOPQSDFGHJKLMWXCVBN';
    $chiffres = '1234567890';
    $speciaux = 'éèùôïîö€à@&';
    // Je transforme les chaines de caractères en tableaux
    $chaine = mb_str_split($chaine);
    $majuscule = mb_str_split($majuscule);
    $chiffres = mb_str_split($chiffres);
    $speciaux = mb_str_split($speciaux);
    // j'initialise un tableau vide pour le mot de passe
    $password = [];
    // J'enregistre le nombre de caractères présent dans le password
    $nb_carac = (int) $param['speciaux']+$param['maj']+$param['chiffres'];
    // Je vérifie si nb_carac est bien inférieur ou égal à la longueur
    if($nb_carac <= $param['longueur'])
    {
        // Je fais une boucle pour sélectionner mes caractères spéciaux
        for($i=0;$i<$param['speciaux'];$i++)
        {
            // Je vais ajouter au tableau un caractère spécial au hasard
            $password[] = $speciaux[rand(0,(count($speciaux)-1))];
        }
        // Je fais une boucle pour les majuscules
        for($i=0;$i<$param['maj'];$i++)
        {
            // Je vais ajouter au tableau une majuscule au hasard
            $password[] = $majuscule[rand(0,(count($majuscule)-1))];
        }
        // Je fais une boucle pour les chiffres
        for($i=0;$i<$param['chiffres'];$i++)
        {
            $password[] = $chiffres[rand(0,(count($chiffres)-1))];
        }
        // Je fais une boucle pour les autres caractères
        for($i=0;$i<($param['longueur']-$nb_carac);$i++)
        {
            // Je sélectionne un caractère au hasard et je l'ajoute au tableau
            $password[] = $chaine[rand(0,(count($chaine)-1))];
        }
        // Je mélange les éléments du tableau avec shuffle()
        shuffle($password);
        // Je transforme le tableau en chaine de caractère avec implode()
        $password = implode('',$password);
        // Je retourne le mot de passe
        return $password;
    }
    return false; // Si tout ne se passe comme prévu
}
?>
