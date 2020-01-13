<?php
try
{
$db = new PDO('mysql:host=192.168.64.186;dbname=tpsite', 'root', 'root');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}
?>