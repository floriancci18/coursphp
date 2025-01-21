<?php
// Connection à la BDD (voir php.net/manual/fr/pdo.construct.php)
$dsn = 'mysql:dbname=courspdo;host=localhost';
$user = 'root';
$password = '';

$dbh = new PDO($dsn, $user, $password);
// Je vais regarder si j'ai une recherche en cours en GET
if(isset($_GET['recherche']))
{
    // Je vérifie avec empty si il y a bien un terme de recherche
    if(!empty($_GET['recherche']))
    {
        // Je vais sécurisé le terme recherché avec strip_tags. 
        // Cette fonction va enlever tout le code (html, css, javascript, php etc..)
        $recherche = strip_tags($_GET['recherche']);
        // On va préparer notre requête SQL
        $sql = 'SELECT * FROM utilisateurs WHERE
                (Nom LIKE :recherche) OR
                (Prenom LIKE :recherche) OR
                (Email LIKE :recherche)
                ';
        // Je prépare ma requête SQL
        $req = $dbh->prepare($sql); 
        // J'ajoute les % à ma recherche
        $recherche = '%'.$recherche.'%'; 
        // Je fais passer mon paramètre :recherche
        $req->bindParam(':recherche',$recherche,PDO::PARAM_STR);
        // Je vais exécuter ma requête
        if($req->execute())
        {
            // Avec rowCount() je vais compter le nombre de résultat
            $nb_resultat = $req->rowCount();
            // Je vérifie si j'ai au moins un résultat
            if($nb_resultat > 0)
            {
                // J'enregistre dans la variable $résultat les lignes sous forme de tableau associatif
                $resultat = $req->fetchAll(PDO::FETCH_ASSOC);
                // J'affiche le tableau de résultat
                //var_dump($resultat);
                $html = '<table>';
                $html.= '<thead>';
                $html.= '<tr>';
                $html.= '<th>Nom</th>';
                $html.= '<th>Prénom</th>';
                $html.= '<th>Email</th>';
                $html.= '<th>Action</th>';
                $html.= '</tr>';
                $html.= '</thead>';
                $html.= '<tbody>';
                // Je fais ma boucle pour afficher les utilisateurs
                foreach($resultat as $result)
                {
                    $html.= '<tr>';
                    $html.= '<td>'.$result['Nom'].'</td>';
                    $html.= '<td>'.$result['Prenom'].'</td>';
                    $html.= '<td>'.$result['Email'].'</td>';
                    // J'ajoute un lien pour supprimer une ligne
                    $html.= '<td>
                                <a href="delete.php?id='.$result['ID'].'">Supprimer</a>
                            </td>';
                    $html.= '</tr>';        
                }
                // Je ferme mon tableau
                $html.= '</tbody>';
                $html.= '</table>';
            }
        }

    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rechercher un membre</title>
</head>
<body>
    <h1>Recherche d'un utilisateur</h1>
    <form name="php" method="GET" action="">
        <div>
            <label for="recherche">Rechercher un utilisateurs:</label>
            <input type="text" name="recherche">
        </div>
        <button type="submit" name="submit">Rechercher</button>
    </form>
    <?php
    if(isset($html))
    {
        echo $html;
    }
    ?>
    <a href="serveur.php">Info serveur</a>
</body>
</html>