<?php require("battle2.php");
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

    $personnage=new Heros(1);
    $personnage->AfficherPerso();
    
    $personnage1=new Heros(2);
    $personnage1->AfficherPerso();

    $personnage2=new Heros(3);
    $personnage2->AfficherPerso();

    $personnage3=new Heros(2);
    $personnage3->AfficherPerso();

    $personnage4=new Heros(3);
    $personnage4->AfficherPerso();

    $personnage5=new Heros(4);
    $personnage5->AfficherPerso();

    $personnage6=new Heros(5);
    $personnage6->AfficherPerso();

    $personnage7=new Heros(6);
    $personnage7->AfficherPerso();

?>

</body>
</html>