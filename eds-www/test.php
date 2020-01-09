<?php

        try{
            //execution du code sur la BDD 
            $BDD = new PDO('mysql:host=localhost;dbname=exo1;charset=utf8', 'root', '');
           
        }
        catch (Exception $erreur)
            {
                echo 'Erreur : '.$erreur->getmessage();
            }
       
            $reponse = $BDD->query('SELECT * FROM `arene`');
            while ($donnees = $reponse->fetch())
{
?>
    <p>
 Nom des aréne <?php echo $donnees['Nomarene']; ?> <br /> 
 avec un malus de <?php echo $donnees['Malus']; ?> <br />
 et avec un bonus de <?php echo $donnees['Bonus']; ?> <br />
 </p>


 <?php
  
}

$reponse->closeCursor(); // Termine le traitement de la requête
?>

<p>New York à un malus car il y à beaucoup de population à New York.</p>
<img src="image/NewYork.jpg" width="300" height="200" /><!-- image-->
<p>Asgard à un bonus car ça se situ dans l'espace.</p>
<img src="image/asegard.jpg" width="300" height="200" /><!-- image--> </p>
<p>La Lune à un bonus car il n'y a personne et que l'ont marche en apesenteur.</p>
<img src="image/Lune.jpg" width="300" height="200" /><!-- image-->
<p>L'Héliport à un malus car il se situ des les aire.</p>
<img src="image/Heliporteur.jpg" width="300" height="200" /><!-- image-->
<p>L'Aéroport à un bonus car il et relativement dégare de population.</p>
<img src="image/aeroport.jpg" width="300" height="200" /><!-- image-->
<p>Le Wakanda à un bonus car le lieu est entouré de jungle.</p>
<img src="image/wakanda.jpg" width="300" height="200" /><!-- image-->
<p>Le QG des vengeur à un malus car ont ne s'attend pas à combattre ici.</p>
<img src="image/QG.jpg" width="300" height="200" /><!-- image-->
<p>Titan a un malus car c'est une planet en ruine mais il y petit bonus car il n'y a pas de population sur c'est planet.</p>
<img src="image/Titan.jpg" width="300" height="200" /><!-- image-->
