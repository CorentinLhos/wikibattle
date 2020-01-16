<?php 

class INSERT {

private $_LEID;

    public function __construct($id)
    {


        $this->_LEID = $id;
       
        try {
            $this->_bdd = $BDD = new PDO('mysql:host=192.168.64.186;dbname=tpsite;charset=utf8', 'root', 'root');
            $BDD->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (Exception $e) {
            // En cas d'erreur, on affiche un message et on arrête tout
            die('Erreur : ' . $e->getMessage());
        }
    }



function create ()
{

    echo $this->_LEID;
    $this->_bdd->query("INSERT INTO equipe1(IDPersonnage) VALUES('$this->_LEID')");




}




}