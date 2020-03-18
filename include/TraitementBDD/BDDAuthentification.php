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


if(isset($_POST['validConnexion'])) {

    $identifiant = $_POST['name'];
    $motDePasse = $_POST['mdp'];
    var_dump($identifiant);
    var_dump($motDePasse);

    $req = $bdd->query("SELECT * FROM commercial WHERE commercial_identifiant='" . $_POST['name'] . "' AND commercial_motDePasse= MD5('".$_POST['mdp']."')");

    $donnees = $req->fetch();

    var_dump($donnees);
    var_dump($req);


    if ($donnees != false) {
        $_SESSION['userName'] = $donnees['commercial_nom'];
        $_SESSION['userFirstName'] = $donnees['commercial_prenom'];
        $_SESSION['userMatricule'] = $donnees['commercial_matricule'];
        header('Location: ../../pages/espacePerso.php');

    } else {
        header('Location: ../../index.php');
    }
}

?>
