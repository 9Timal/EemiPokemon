<?php
// ce fichier cree le model de la classe User
require 'config.php';

class User{
    private $id;
    public $nom;
    public $prenom;
    public $photo;
    public $email;
    private $password;
    private $solde;
    public $pokemon_posseder;
    public $favori;
    public $ancienete;

    public function set_POST(){
        if ($_SERVER["REQUEST_METHODE"] == 'POST'){
            $nom = $_POST['nom'];
            $prenom = $_POST['prenom'];
            $photo= $_POST['photo'];
            $email = $_POST['email'];
            $password = $_POST['password'];
        }

        $insertion_user = "INSERT INTO user(nom, prenom, photo, email, password) VALUES (?,?,?,?,?)";

        $stmt = $connection->prepare($insertion_user);
        if($stmt === false){
            die("ERREUR DE LA PREPARATION DE LA REQUETE".$connection->error);
        }

        $stmt->bind_param($nom, $prenom, $photo, $email, $password);
    }
}

?>