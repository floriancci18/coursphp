<?php
session_start(); // Je démarre la session
// Je génère une clé aléatoire
$captcha = substr(str_shuffle('azertyuiopqsdfghjklmwxcvbnAZERTYUIOPQSDFGHJKLMWXCVBN1234567890'),0,6);
// J'enregistre le captcha dans la session
$_SESSION['captcha'] = $captcha;
// On va définir la largeur et la hauteur de notre image
$width = 150;
$height = 50;
// Je vais créer une nouvelle image
$image = imagecreatetruecolor($width,$height);
// Je vais définir les différentes couleurs de mon captcha
$background = imagecolorallocate($image,255,255,255); // background white
$texte = imagecolorallocate($image,0,0,0); // color black
$ligne = imagecolorallocate($image,0,0,255); // ligne bleue
// Je vais dessiner le background sur mon image
imagefilledrectangle($image,0,0,$width,$height,$background);
// Je vais dessiner des lignes pour compliquer la lecture du captcha
for($i=0;$i<5;$i++)
{
    imageline($image,rand(0,$width),rand(0,$height),rand(0,$width),rand(0,$height),$ligne);
}
// Je vais dessiner des petits points pour compliquer la lecture du captcha
for($i=0;$i<50;$i++)
{
    // Je dessine un pixel a un endroit aléatoire
    imagesetpixel($image,rand(0,$width),rand(0,$height),$ligne);
}
// Je vais écrire mon captcha dans l'image avec imagestring()
//imagestring($image,5,rand(10,50),rand(10,20),$captcha,$texte);
// Captcha ondulé
for($i=0;$i<strlen($captcha);$i++)
{
    imagestring($image,5,rand((10*$i),(10*$i+1)),rand(10,30),$captcha[$i],$texte);
}
// J'envoie un header pour indiquer que c'est une image
header('Content-Type: image/png');
// Je génère l'image avec la fonction imagepng
imagepng($image);
// Une fois l'image générée je la détruit pour éviter une surcharge mémoire
imagedestroy($image);
?>