<?php
// Connection à la BDD (voir php.net/manual/fr/pdo.construct.php)
$dsn = 'mysql:dbname=courspdo;host=localhost';
$user = 'root';
$password = '';

$dbh = new PDO($dsn, $user, $password);
// Je vérifie si j'ai bien un ID en GET
if(isset($_GET['id']) && !empty($_GET['id']))
{
    // Je prépare ma requête de suppression
    $del = $dbh->prepare('DELETE FROM utilisateurs WHERE ID = :id');
    $del->bindValue(':id',$_GET['id'],PDO::PARAM_INT);
    // Si la requête se passe bien
    if($del->execute())
    {
        header('location:'.$_SERVER['HTTP_REFERER'].'&message=ok');
    }
    else
    {
        echo 'apprends à coder !!';
    }
}