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
    // Je vais créer mon constructeur
    public function getNom()
    {
        return $this->nom;
    }
    public function __construct($email,$password)
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
    public static function register($nom,$prenom,$email,$password,$actif,$niveau)
    {
        // J'utilise la méthode connexionBdd en utilisant self
        $sql = self::connexionBdd();
        $req = $sql->prepare('INSERT INTO ');

    }
}
// Pour traiter l'inscription de l'utilisateur (code dans inscription.php)
if(isset($_POST['submit']))
{
    if(!empty($_POST['nom']) && !empty($_POST['prenom']))
    {
        $utilisateur = Utilisateur::register($_POST['nom'],$_POST['prenom']);
    }
}
// Pour traiter la connexion de l'utilisateur (code dans login.php)
if(isset($_POST['submit']))
{
    if(!empty($_POST['email']) && !empty($_POST['password']))
    {
        $utilisateur = new Utilisateur($_POST['email'],$_POST['password']);
        // Si j'ai un objet
        if($utilisateur)
        {
            echo $utilisateur->getNom(); // Affiche le nom de mon utilisateur
        }
    }
}
?>