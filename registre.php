<?php
session_start();
include("database.php");

global $db;

$utilisateur ="";
$mail ="";
$mdp ="";

if(!empty($_POST)){
            
    $valid = true;
    if (isset($_POST['inscription'])){
        //on recupère le nom prenom pseudo mdp mdpconf du formulaire pour traiter
        $utilisateur = $_POST['name'];
        $mail = $_POST['email'];
        $mdp = $_POST['password'];

        if(empty($utilisateur)){
            $valid = false;
             echo "Le nom d' utilisateur ne peut pas être vide";
        }
        if(empty($mail)){
            $valid = false;
            echo "Le prenom d' utilisateur ne peut pas être vide";
        }      
        if(empty($mdp)){
            $valid = false;
            echo "Le pseudo d' utilisateur ne peut pas être vide";
        }
        
        if($valid){
            
            $q = $db->prepare("INSERT INTO `user`(`Utilisateur`, `Email`, `Mot de passe`) VALUES (:utilisateur,:mail,:password)");
            $q->execute([
                'utilisateur' => $utilisateur,
                'mail' => $mail,
                'password' => $mdp,
        ]);


            }}}

            ?>