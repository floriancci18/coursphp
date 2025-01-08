<?php
// Boucle for en PHP
for($i=0;$i<5;$i++)
{
    echo $i;
}
// Je créer un tableau
$tableau = ['Tanguy','Ilan','Imane','Tristan','Jimmy','Nicolas','Romain','Hugo','Stéphane'];
echo 'nb element:'.count($tableau);
// Je vais parcourir le tableau à l'aide d'une boucle for
for($i=0;$i<count($tableau);$i++)
{
    // J'affiche chaque élément du tableau avec son indice entre []
    echo $tableau[$i].'<br>';
}
// La boucle while
// J'initialise i à 0;
$i = 0;
// Tant que i est inférieur à count de tableau alors j'itère la boucle
echo 'ma boucle while<br>';
while($i < count($tableau))
{
    // J'affiche l'élément courant du tableau
    echo $tableau[$i].'<br>';
    $i++; // J'incrémente i à chaque itération de la boucle
    // Si je n'incrémente pas i je vais faire une boucle infini
}
// J'initialise i à 0
echo 'boucle do while:<br>';
$i=0;
do
{
    // Je fais la première itération
    echo 'ma boucle';
    echo $tableau[$i];
    $i++;
} while($i < count($tableau)); // Je boucle tant que j'ai des éléments
// Boucle foreach
echo 'boucle for:<br>';
foreach($tableau as $prenom)
{
    echo $prenom.'<br>';
}
// Tableau associatifs
$tableau_assoc = [
    'prenom' => 'Tanguy',
    'nom' => 'Siri',
    'profession' => 'développeur débutant',
    'passion' => 'Les BMC',
    'voiture' => null
];
// Je vais parcourir ma boucle et affiché les clés et valeurs
echo 'Boucle foreach avec clé => valeur<br>';
foreach($tableau_assoc as $key => $value)
{
    echo $key.' = '.$value.'<br>';
}
// Tableaux imbriqués
$imbrique = [
    'personne1' => ['nom' => 'Siri','prenom' => 'Tanguy'],
    'personne2' => ['nom' => 'Carpentier','prenom' => 'Stéphane'],
    'personne3' => ['nom' => 'Deschamp','prenom' => 'Tristan'],
    'personne4' => ['nom' => 'Amri','prenom' => 'Imane']
];
// Boucle imbriqués
// Je rentre dans le premier tableau
foreach($imbrique as $key => $value)
{
    // key vaut personne1, personne2 etc...
    // value vaut le tableau de chaque ligne
    // Je parcours le tableau dans le tableau
    foreach($value as $cle => $valeur)
    {
        // Cle vaut nom et prenom
        // valeur vaut le nom de famille et le prénom
        echo $cle.' = '.$valeur;
    }
}






   
?>