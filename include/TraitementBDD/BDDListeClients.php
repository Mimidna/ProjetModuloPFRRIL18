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



function listingDesClients(){

    $req = connexion()->query("SELECT client_id, client_nom, client_prenom FROM client");

    while ($data = $req->fetch()) {
        $clientId = $data['client_id'];

        ?>
        <li>
            <a href="ficheClient.php?clientId=<?=$clientId?>">
                <?=$data['client_nom'] . ' ' . $data['client_prenom']?>
            </a>
        </li>
        <?php
    }
}

?>