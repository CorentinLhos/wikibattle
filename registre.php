      <?php

   try {

         $bdd = new PDO('mysql:host=192.168.64.186;dbname=tpsite', 'Winston', '2012');
         $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

         }
            catch(Exception $e)                                      
         {
            die('Erreur :' .$e->getMessage()); 
         }




               
                     $insertmbr = $bdd->prepare("INSERT INTO user(Utilisateur, Email, mdp) VALUES(?, ?, ?)");
                     $insertmbr->execute(array($_POST['Utilisateur'], $_POST['Email'], $mdp = $_POST['Pass']));
                     $erreur = "Votre compte a bien été créé ! <a href=\"connection.php\">Me connecter</a>";
                 
      ?>