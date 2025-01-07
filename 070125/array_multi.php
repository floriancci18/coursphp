<?php
$array_multi = [
    ['Stéphane','Carpentier'],
    ['Imane','Amri'],
    ['Tristan','Deschamp']
];
var_dump($array_multi);
// Pour afficher Imane
echo $array_multi[1][0].$array_multi[1][1];
// Tableau avec clé valeur
$array_key = [
    'producteur' => ['nom' => 'Ottrillaut','prenom' => 'Pascal'],
    'acteur'     => ['prenom' => 'Tonio','age' => 30],
    'actrice'    => ['prenom' => 'Kenza','ville' => 'Bourges']

];
var_dump($array_key);
// J'affiche la ville de Kenza
echo $array_key['actrice']['ville'];
?>