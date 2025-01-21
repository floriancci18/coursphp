<?php
// Connection à la BDD (voir php.net/manual/fr/pdo.construct.php)
$dsn = 'mysql:dbname=courspdo;host=localhost';
$user = 'root';
$password = '';

$dbh = new PDO($dsn, $user, $password);
// J'écris ma requête SQL
$sql = 'SELECT Nom FROM utilisateurs';
// Je vais boucler sur les lignes retourné par la requête
foreach($dbh->query($sql) as $ligne)
{
    // J'affiche le nom de chaque utilisateur
    echo $ligne['Nom'].'<br>';
}
?>