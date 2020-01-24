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

$req = $bdd->query('SELECT * FROM commercial');  
  
        while($donnees = $req->fetch()){
          
                if (($identifiant==$donnees['commercial_identifiant']) && ($motDePasse==$donnees['commercial_motDePasse'])){
                        $_SESSION['username'] = $donnees['commercial_nom'];
                        $_SESSION['userFirstName'] = $donnees['commercial_prenom'];
                header('Location: ..\pages\espacePerso.php');
                
                }else{
                    echo(' merci de reesayer car les informations que vous avez entrees sont errones ');
                }
        
        }
} 
?>