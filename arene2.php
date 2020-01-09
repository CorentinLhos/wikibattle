<?php


class Arene{                                                 
    private $_nom;
    private $_arene;
    private $_bonus;
    private $_malus;
   


    public function __construct($idarene)
    {                                                
                    
        try{
            //execution du code sur la BDD 
            $BDD = new PDO('mysql:host=192.168.64.186;dbname=tpsite;charset=utf8', 'root', 'root');
            $resultat = $BDD->query('SELECT * FROM arene WHERE IDArene = '.$idarene);
            $resultat = $resultat->fetch();

            $this->_arene = $resultat['IDArene'];
            $this->_nom =$resultat['Nomarene'];
            $this->_bonus =$resultat['Bonus'];
            $this->_malus =$resultat['Malus'];
                                                                   
            }
            catch (Exception $erreur)
            {
                echo 'Erreur : '.$erreur->getmessage();
            }
                                                               
            $this->_id = $idarene;
    }

    public function getarene()
    {
        return $this->_arene;
    }   
    public function getnom()
    {
        return $this->_nom;
    }
    public function getbonus()
    {
        return $this->_bonus;
    }
    public function getmalus()
    {
        return $this->_malus;
    }   
    public function AfficherArene()
    {
        echo  '<p> L arene '.$this->_arene.' est '.$this->_nom. ' avec un bonus de '.$this->_bonus.' est avec un malus de '.$this->_malus.'. </p>';
    }
        

}                        
?>

  