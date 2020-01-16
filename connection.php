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
    <form method="POST" action="registre.php">
            <table>
               <tr>
                  <td align="right">
                     <label for="Utilisateur">Pseudo :</label>
                  </td>
                  <td>
                     <input type="text" placeholder="Votre pseudo" id="Utilisateur" name="Utilisateur" value="">
                  </td>
               </tr>
               <tr>
                  <td align="right">
                     <label for="Email">Mail :</label>
                  </td>
                  <td>
                     <input type="email" placeholder="Votre mail" id="Email" name="Email" value="">
                  </td>
               </tr>
               <tr>
                  <td align="right">
                     <label for="mdp">Mot de passe :</label>
                  </td>
                  <td>
                     <input type="password" placeholder="Votre mot de passe" id="Pass" name="Pass" />
                  </td>
               </tr>
               <tr>
                  <td></td>
                  <td align="center">
                     <br />
                     <input type="submit" name="forminscription" value="Je m'inscris" />
                  </td>
               </tr>
            </table>
         </form>
        </div>
        <div>
        
        </div>
    </body>
</html>