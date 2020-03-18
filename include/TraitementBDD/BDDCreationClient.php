<?php
session_start();

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



if(isset($_POST['creerClient'])) {

    $nomClient = strtoupper($_POST['lastName']);
    $prenomClient = $_POST['firstName'];

    $data = [
        'nomClient' => strtoupper($_POST['lastName']),
        'prenomClient' => $_POST['firstName'],
        'telephoneClient' => $_POST['phone'],
        'mailClient' => $_POST['email'],
        'adresseClient' => $_POST['adresse'],
        'codePostalClient' => $_POST['cp'],
        'villeClient' => $_POST['ville']
    ];


    $req = $bdd->query('SELECT * FROM client');
    $trouve = false;

    while ($donnees = $req->fetch()) {
        $trouve = ($donnees['client_nom'] == $nomClient);

        if ($trouve)
            break;
    }

    if ($trouve){
        var_dump('entree si client existe');


        // si le client existe
        //extraction de son ID et ajout de cet ID dans le tableau associatif $data
        $clientID = $donnees['client_id'];
        $data['idClient'] = $clientID;

        $req1 = $bdd->prepare('UPDATE client SET   client_nom = :nomClient,
                                                            client_prenom = :prenomClient,
                                                            client_telephone = :telephoneClient,
                                                            client_mail = :mailClient,
                                                            client_adresse = :adresseClient,
                                                            client_codePostal = :codePostalClient,
                                                            client_ville = :villeClient
                                        WHERE client_id = :idClient');
        $result = $req1->execute($data);
    } else {
        var_dump('entree si client n existe pas');

        $requestSQL = "INSERT INTO client (client_nom, client_prenom, client_telephone, client_mail, client_adresse, client_codePostal, client_ville)
                       VALUES (:nomClient, :prenomClient, :telephoneClient, :mailClient, :adresseClient, :codePostalClient, :villeClient)";

            $req1 = $bdd->prepare($requestSQL);

        $result = $req1->execute($data);

    }
}

header('Location: ../../pages/listeClients.php');

?>