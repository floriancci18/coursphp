<?php
// Créer un fichier csv en PHP
$file = fopen('tableau.csv','w');
// Je créer un tableau multidimension qui va former chaque ligne de mon CSV
$clients = [
    ['Carpentier','Stéphane'],
    ['Deschamp','Tristan']
];
// Je boucle sur mon tableau
foreach($clients as $client)
{
    // fputcsv transforme ['valeur','valeur'] en valeur;valeur
    fputcsv($file,$client,';');
}
fclose($file);
?>