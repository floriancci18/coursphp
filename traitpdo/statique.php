<?php
session_start();
class Utilisateur{
    private $nom;
    private $prenom;
    private $email;
    private $password;

    /*public function __construct($email,$password)
    {
        // Je vérifie si l'utilisateur existe
        if($email == $_SESSION['email'] && $password == $_SESSION['password'])
        {
            $this->nom = $_SESSION['nom'];
            $this->prenom = $_SESSION['prenom'];
            $resultat = $req->fetch(PDO::FETCH_ASSOC);
            if(password_verify($password,$resultat['Password_Utilisateur']))
            {
                $this->email = $resultat['Email_Utilisateur'];
                $this->password = $resultat['Password_Utilisateur'];
            }
            
        }
        else
        {
            return false;
        }
    }
    // Méthode en statique pour l'appeler sans instancier l'objet
    public static function register($nom,$prenom,$email,$password)
    {
        // J'enregistre les informations dans la BDD
        $_SESSION['nom'] = $nom;
        $_SESSION['prenom'] = $prenom;
        $_SESSION['email'] =  $email;
        $_SESSION['password'] = $password;
        
    }*/
    public function register($nom,$prenom,$email)
    {
        // Enregistre dans la BDD
    }
    public function login($email,$password)
    {
        // Logique pour vérifier la connection
    }
}
// J'appelle ma méthode register
//Utilisateur::register('Carpentier','Stephane','steganoos@gmail.com','bouygues');
$utilisateur = new Utilisateur();
$utilisateur->register($_POST['nom'],$_POST['email']);
$utilisateur->login($_POST['email'],$_POST['password']);

?>