<?php

function selectAllModele(){
    $req = connexion()->query("SELECT modele_id,  modele_libelle FROM modele");
    $allModele = array();
    while ($data = $req->fetch()) {
        array_push($allModele, $data['modele_libelle']);
    }
    return $allModele;
}

function loadModele($id){
    $req = connexion()->query("SELECT * FROM modele WHERE modele_id=". $id);
    return $req->fetch();
}

function recupIdmodele($modeleLibelle){
    $req = connexion()->query("SELECT * FROM modele WHERE modele_libelle= '". $modeleLibelle ."'");
    return $req->fetch();
}


?>
