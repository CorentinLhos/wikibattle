<?php

try {
        $BDD = new PDO('mysql:host=192.168.64.186;dbname=tpsite;charset=utf8', 'root', 'root');
        $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
catch(Exception $e)                                      
    {
        die('Erreur :' .$e->getMessage()); 
    }
    
    $insertmbr = $bdd->prepare("INSERT INTO matchequipe (IDArene,IDEquipe1,IDEquipe2) VALUES(?,?,?)");
    $insertmbr->execute(array($_POST['IDArene'], $_POST['IDEquipe1'], $mdp = $_POST['IDEquipe2']));
                     
?>