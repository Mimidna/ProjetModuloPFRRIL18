<?php

function selectAllGamme(){
    $req = connexion()->query("SELECT gamme_id,  gamme_libelle FROM gamme");
    $allGamme = array();
    while ($data = $req->fetch()) {
        array_push($allGamme, $data['gamme_libelle']);
    }
    return $allGamme;
}

function recupIdGamme($gammeLibelle){
    $req = connexion()->query("SELECT * FROM gamme WHERE gamme_libelle= '". $gammeLibelle ."'");
    return $req->fetch();
}

function loadGamme($id){
    $req = connexion()->query("SELECT * FROM gamme WHERE gamme_id=". $id);
    return $req->fetch();
}

?>
