<?php
// J'ouvre un fichier nommé monfichier.txt en mode écriture avec w
$fichier = fopen('monfichier.txt','w');
// J'écris dans le fichier
fwrite($fichier,'Le tour de France en camping car!');
// Je ferme le fichier
fclose($fichier);
// Je vais ouvrir ce fichier pour le lire
$lire = file_get_contents('monfichier.txt');
// J'affiche le contenu du fichier
echo $lire;
$tristan = file_get_contents('tristan.txt');
echo $tristan;
$cci = file_get_contents('http://www.cher.cci.fr/developpement-entreprise');
$fichier2 = fopen('cci.html','w');
fwrite($fichier2,$cci);
fclose($fichier2);
// Pour créer un dossier je fais appel a mkdir
mkdir('mondossier');
?>