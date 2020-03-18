<?php

function connexion(){
    try
    {
        // On se connecte a la base de données
        $bdd = new PDO("mysql:host=localhost;dbname=modulo;charset=utf8", "root", "");
    }
    catch(Exception $e)
    {
        // En cas d'erreur, on affiche un message et on arrête tout
        die('Erreur : '.$e->getMessage());
    }
    return $bdd;
}

function loadClient($id){
    $req = connexion()->query("SELECT * FROM client WHERE client_id =". $id);
    return $req->fetch();
}

?>
