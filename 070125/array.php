<?php
// Tableau avec la fonction array
$tableau = array('Hugo','Stéphane','Didier');
// Pour rechercher un élément dans un tableau
$cle = array_search('Stéphane',$tableau);
echo 'La clé est:'.$cle;
// Pour afficher le tableau
var_dump($tableau);
// Je trie le tableau par ordre alphabétique (fonction sort)
sort($tableau);
// Le tableau trié
echo 'Tableau trié:';
var_dump($tableau);

// Tableau avec les crochets
$tableau2 = ['Damien','Ilan','Nicolas'];
// Pour fusionner 2 tableaux avec array_merge
$tableau3 = array_merge($tableau,$tableau2);
echo 'Le tableau fusionné:';
var_dump($tableau3);
// Pour supprimer Damien du tableau
unset($tableau3[3]);
echo 'le tableau sans Damien';
var_dump($tableau3);

$personne = [
                'nom' => 'Carpentier',
                'prenom' => 'Stéphane',
                'entreprise' => 'Bouygues Telecom'
            ];
// J'affiche le tableau clé valeur
var_dump($personne);
// J'affiche l'entreprise de personne
echo $personne['entreprise'];            
?>