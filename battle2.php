<?php


class Heros{                                                 
    private $_nom;
    private $_prenom;
    private $_personnage;
    private $_points;
   


    public function __construct($idpersonnage)
    {                                                
                    
        try{
            //execution du code sur la BDD 
            $BDD = new PDO('mysql:host=192.168.64.186;dbname=tpsite;charset=utf8', 'root', 'root');
            $resultat = $BDD->query('SELECT * FROM personnage WHERE IDPersonnage = '.$idpersonnage);
            $resultat = $resultat->fetch();

            $this->_personnage = $resultat['IDPersonnage'];
            $this->_nom =$resultat['Nom'];
            $this->_prenom =$resultat['Prenom'];
            $this->_points =$resultat['Points'];
                                                                   
            }
            catch (Exception $erreur)
            {
                echo 'Erreur : '.$erreur->getmessage();
            }
                                                               
            $this->_id = $idpersonnage;
    }

    public function getpersonnage()
    {
        return $this->_personage;
    }   
    public function getnom()
    {
        return $this->_nom;
    }
    public function getprenom()
    {
        return $this->_prenom;
    }
    public function getpoints()
    {
        return $this->_points;
    }
    public function AfficherPerso()
    {
        echo  '<p> Le Personnage n° '.$this->_personnage.' est '.$this->_nom. ' ' .$this->_prenom.  ' avec un nombre de points de '.$this->_points.'. </p>';
    }
        

}                        
?>