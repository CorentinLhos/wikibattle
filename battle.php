<?php require("battle2.php");
      require("class_Insert.php");
?>
<html>
<htlm>

    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="menu.css">
        <script>type="text/javascript" src="ex.js"</script>
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
        <form method="POST" action="">
            <SELECT name="perso1">
                <OPTION value="0"> Choix du personnage </OPTION>
                
                <?php
                $her1 = new Heros();
                $her1->AfficherPerso();
                ?>
            </SELECT>
           
            <?php
              if(!empty($_POST['perso1'])){

            $insertion = new INSERT($_POST['perso1']);
            $insertion->create(); 
              }?>
        
        <input type="submit" value="Ajouter" />

            <SELECT name="perso2">
                <OPTION value="0"> Choix du personnage </OPTION>
                
                <?php
                $her2 = new Heros();
                $her2->AfficherPerso();
                ?>
            </SELECT>
           
            <?php
              if(!empty($_POST['perso2'])){

            $insertion = new INSERT($_POST['perso2']);
            $insertion->create(); 
              }?>
        
        <input type="submit" value="Ajouter" />
        </form>
        <h1 id="h1" onclick="ModifDiv">Live</h1>
              
            <form method="post" action="battle2.php">
                <p>Nom</p>
                <input type="text" name="Nom">
                <input type="submit" name="submit" value="Valider">


        
                <?php
                // lancement de la requête

                ?>
    </body>

</html>