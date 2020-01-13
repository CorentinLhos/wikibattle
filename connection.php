<html>
    <head>
    <link rel="stylesheet" href="menu.css">
          <nav class="menu">
            <ul class="menu__list">
              <li class="menu__group"><a href="acceuil.html" class="menu__link">Acceuil</a></li>
              <li class="menu__group"><a href="battle.php" class="menu__link">Battle</a></li>
              <li class="menu__group"><a href="wiki.html" class="menu__link">Wikipedia</a></li>
              <li class="menu__group"><a href="connection.php" class="menu__link">Se Connecter</a></li>
              <li class="menu__group"><a href="arene.php" class="menu__link">Arene</a></li>
            </ul>
            </nav>
    </head>
    <body>
    <link rel="stylesheet" href="connection.css">
    <div id="pagea">
    <div id="info">
    <h1><br>Inscription</br></h1>
        <form method="post" action="registre.php">
            Utilisateur : <input type="text" name="name"><br>
            Adresse mail : <input type="text" name="email"><br>
            Mot de passe : <input type="text" name="password">><br>
            <input type="submit"name='inscription' value="C'est parti!"><br>
        </form>
        
        <a href="connection.php"><br>Se connecter</br></a>
        </div>
    </body>
</html>