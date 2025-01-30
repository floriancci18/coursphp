<?php
require_once 'trait_pdo.php';
class Utilisateur{
    // Je vais définir mes attributs
    private $nom;
    private $prenom;
    private $email;
    private $password;
    private $actif;
    private $niveau;

    // Je vais utiliser mon trait
    use database;
    // Je déclare une méthode login
    public function login($email,$password)
    {
        $sql = $this->connexionBdd();
        $req = $sql->prepare('SELECT * FROM utilisateurs WHERE email = :email');
        $req->bindParam(':email',$email,PDO::PARAM_STR);
        if($req->execute())
        {
            // Je vérifie si j'ai bien un résultat
            if($req->rowCount() >= 1)
            {
                // Je transforme ma ligne en tableau associatif
                $resultat = $req->fetch(PDO::FETCH_ASSOC);
                // Je vérifie si le mot de passe correspond au hash dans la bdd
                if(password_verify($password,$resultat['motdepasse_utilisateur']))
                {
                    // Je créé mon objet
                    $this->nom = $resultat['nom_utilisateur'];
                    $this->prenom = $resultat['prenom_utilisateur'];
                    $this->email = $resultat['email_utilisateur'];
                    $this->password = $resultat['motdepasse_utilisateur'];
                    $this->actif = $resultat['actif_utilisateur'];
                    $this->niveau = $resultat['niveau_utilisateur'];
                    return true;
                }
                else
                {
                    return false;
                }
                
            }
            else
            {
                return false;
            }
        }
        else
        {
            return false;
        }
    }
    public function register($nom,$prenom,$email,$password,$actif,$niveau)
    {
        $sql = $this->connexionBdd();
        $req = $sql->prepare('INSERT INTO utilisateurs
                                nom_utilisateur, prenom_utilisateur, email_utilisateur,motdepasse_utilisateur,actif_utilisateur,niveau_utilisateur
                                VALUES (
                                    :nom,
                                    :prenom,
                                    :email,
                                    :password,
                                    :actif,
                                    :niveau
                                )');
        $req->bindValue(':nom',$nom,PDO::PARAM_STR);
        $req->bindValue(':prenom',$prenom,PDO::PARAM_STR);
        $req->bindValue(':email',$email,PDO::PARAM_STR);
        $req->bindValue(':password',password_hash($password,PASSWORD_DEFAULT),PDO::PARAM_STR);
        $req->bindValue(':actif',$actif,PDO::PARAM_STR);
        $req->bindValue(':niveau',$niveau,PDO::PARAM_STR);
        if($req->execute())
        {
            return true;
        }
        else
        {
            return false;
        }                        
    }
}
// Code de traitement de connection (à mettre dans login.php)
if(isset($_POST['submit']))
{
    if(!empty($_POST['email']) && !empty($_POST['password']))
    {
        // J'instancie un objet vide
        $utilisateur = new Utilisateur();
        $connection = $utilisateur->login($_POST['email'],$_POST['password']);
    }
}
// Code de traitement pour l'inscription (à mettre dans inscription.php)
if(isset($_POST['submit']))
{
    if(!empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['actif']) && !empty($_POST['niveau']))
    {
        $utilisateur = new Utilisateur();
        $utilisateur->register($_POST['nom'],$_POST['prenom'],$_POST['email'],$_POST['password'],$_POST['actif'],$_POST['niveau']);
    }
}
?>