<?php require("arene2.php");
?>
<html>
    <htlm>
    <head>
        <meta charset="utf-8"/>
        <link rel="stylesheet" href="menu.css">
        <div class="page">
            <nav class="menu">
                <ul class="menu__list">
                    <li class="menu__group"><a href="acceuil.html" class="menu__link">Acceuil</a></li>
                    <li class="menu__group"><a href="battle.php" class="menu__link">Battle</a></li>
                    <li class="menu__group"><a href="wiki.html" class="menu__link">Wikipedia</a></li>
                    <li class="menu__group"><a href="connection.php" class="menu__link">Se Connecter</a></li>
                    <li class="menu__group"><a href="arene.php" class="menu__link">Arene</a></li>
                </ul>
            </nav>
        </div>
        
        
    </head>
    <body>
    <?php

    $personnage=new Arene(1);
    $personnage->AfficherArene();
    
    $personnage1=new Arene(2);
    $personnage1->AfficherArene();

    $personnage2=new Arene(3);
    $personnage2->AfficherArene();

    $personnage3=new Arene(4);
    $personnage3->AfficherArene();

    $personnage4=new Arene(5);
    $personnage4->AfficherArene();

    $personnage5=new Arene(6);
    $personnage5->AfficherArene();

    $personnage6=new Arene(7);
    $personnage6->AfficherArene();

    $personnage7=new Arene(8);
    $personnage7->AfficherArene();

?>
<img src="image/NewYork.jpg" width="500" height="300" /><!-- image-->
<p>New York à un malus car il y à beaucoup de population à New York.</p>

<img src="image/asegard.jpg" width="500" height="300" /><!-- image-->
<p>Asgard à un bonus car le lieu se situ dans l'espace.</p>

<img src="image/Lune.jpg" width="500" height="300" /><!-- image-->
<p>La Lune à un bonus car il n'y a personne et que l'ont marche en apesenteur.</p>

<img src="image/Heliporteur.jpg" width="500" height="300" /><!-- image-->
<p>L'Héliport à un malus car il se situ des les aire.</p>

<img src="image/aeroport.jpg" width="500" height="300" /><!-- image-->
<p>L'Aéroport à un bonus car il et relativement dégare de population.</p>

<img src="image/wakanda.jpg" width="500" height="300" /><!-- image-->
<p>Le Wakanda à un bonus car le lieu est entouré de jungle.</p>

<img src="image/QG.jpg" width="500" height="300" /><!-- image-->
<p>Le QG des vengeur à un malus car ont ne s'attend pas à combattre ici.</p>

<img src="image/Titan.jpg" width="500" height="300" /><!-- image-->
<p>Titan a un malus car c'est une planet en ruine mais il y petit bonus car il n'y a pas de population sur c'est planet.</p>
</body>
</html>