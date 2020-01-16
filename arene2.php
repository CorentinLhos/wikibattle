<?php

class Arene{                                                 
                private $_nom;
                private $_arene;
                private $_bonus;
                private $_malus;
   
                public function __construct($idarene)
                    {                                                
                                    
                        try{
                                /* execution du code sur la BDD */
                                $BDD = new PDO('mysql:host=192.168.64.186;dbname=tpsite;charset=utf8', 'root', 'root'); /* ont appel la basse de donner */
                                $resultat = $BDD->query('SELECT * FROM arene WHERE IDArene = '.$idarene); /* on séléction le tableau que l'ont veut utiliser */
                                $resultat = $resultat->fetch();

                                $this->_arene = $resultat['IDArene'];
                                $this->_nom =$resultat['Nomarene'];
                                $this->_bonus =$resultat['Bonus'];
                                $this->_malus =$resultat['Malus'];
                                                                                
                            }
                            catch (Exception $erreur) /* en cas d'erreur un message s'affiche */
                                {
                                    echo 'Erreur : '.$erreur->getmessage();
                                }
                                                                            
                        $this->_id = $idarene;
                    }

                public function getarene() /* retourne le numéro de l'arene */
                    {
                        return $this->_arene;
                    }   
                public function getnom() /* retourne le nom de l'arene */
                    {
                        return $this->_nom;
                    }
                public function getbonus() /* retourne le bonus de l'arene */
                    {
                        return $this->_bonus;
                    }
                public function getmalus() /* retourne le malus de l'arene */
                    {
                        return $this->_malus;
                    }   
                public function AfficherArene() /* affiche les phrase avec les différent demande */
                    {
                        echo  '<p> L arene '.$this->_arene.' est '.$this->_nom. ' avec un bonus de '.$this->_bonus.' est avec un malus de '.$this->_malus.'. </p>';
                    }
                    

            }                        
?>

  