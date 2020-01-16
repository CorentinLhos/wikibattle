<?php


class Heros{                                                 
    private $_nom;
    private $_prenom;
    private $_personnage;
    private $_points;
    private $_perso;
   


    public function __construct()
    {                                                
                    
        try{
            //execution du code sur la BDD 
            $this->_bdd = $BDD = new PDO('mysql:host=192.168.64.186;dbname=tpsite;charset=utf8', 'root', 'root');
            $BDD->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (Exception $e) {
            // En cas d'erreur, on affiche un message et on arrête tout
            die('Erreur : ' . $e->getMessage());
        }
    }

            
    public function AfficherPerso()
    {


        $donnes = $this->_bdd->query('SELECT * FROM personnage');
        while ($tabdonnes = $donnes->fetch()) {

           ?> <OPTION value="<?php echo $tabdonnes['IDPersonnage']; ?>">
            <?php echo $tabdonnes['Nom']; echo ' '.$tabdonnes['Prenom']; ?>
        </OPTION> 
        <?php
 }
        
    }
}                        
?>