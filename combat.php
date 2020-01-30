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
        <link rel="stylesheet" >
            <div id="pagea">
                <div id="info">
                    <form method="POST" action="combat2.php">
                        <table>
                            <tr>
                                <td align="right"> <!-- je demande a l'utilisateur de renter le noméro de l'arene qu'il a choisi-->
                                    <label for="IDArene">Arene choisie  :</label>
                                </td>

                                <td>
                                    <input type="text" placeholder="Entre le numéro de votre arene" id="IDArene" name="IDArene" value="">
                                </td>
                            </tr>

                            <tr>
                                <td align="right"> <!-- je demande a l'utilisateur de rentre la permier équipe en tapent  sont ID -->
                                    <label for="IDEquipe1">Equipe 1 :</label>
                                </td>

                                <td>
                                    <input type="IDEquipe1" placeholder="Entre 1 pour votre equipe 1" id="IDEquipe1" name="IDEquipe1" value="">
                                </td>
                            </tr>

                            <tr>
                                <td align="right"> <!-- je demande a l'utilisateur de rentre la deusiéme équipe en tapent  sont ID -->
                                    <label for="IDEquipe2">Equipe 2 :</label>
                                </td>

                                <td>
                                    <input type="IDEquipe2" placeholder="Entre 2 pour votre equipe 2" id="IDEquipe2" name="IDEquipe2" />
                                </td>
                            </tr>

                            <tr>
                                <td></td>
                                    <td align="center"><!-- bouton pour validé -->
                                        <br />
                                        <input type="submit" name="choiarene" value="Je valide" />
                                    </td>
                            </tr>
                        </table>
                    </form>
                </div>
            </div>             
    </body>
</html>