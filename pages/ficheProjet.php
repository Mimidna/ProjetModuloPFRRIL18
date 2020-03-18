<!doctype html>
<html lang="fr">

<!--HEADER-->

<?php
include '../include/TraitementBDD/BDDFicheClient.php';
include '../include/TraitementBDD/BDDChoixGamme.php';
include '../include/TraitementBDD/BDDChoixModele.php';
include "../include/header.php";
?>


<body >

<?php
include "../include/menuMain.php";
$client = loadClient($_GET['clientId']);
$detailsGamme = loadGamme($_GET['gammeId']);
$detailsModele = loadModele($_GET['modeleId']);

//var_dump($client);
//var_dump($detailsGamme);
//var_dump($detailsModele);
?>


<!--CONTENU-->

<div id="image-rondin ">

            <div class="row">
               <div class="offset-lg-4 offset-mb-4 col-xs-12 col-ms-12 col-lg-4 mb-4 ">
                   <div class="nomClient">
                <img src="../css/logos/profil.png" alt="profil" class="iconeClient"/>
                       <?= $client[1].' '.$client[2] ?>
                       <a href="creationClient.php?clientId=<?= $client[0]?>">
                   <img src="../css/logos/modification.png" alt="modif" class="iconeClient"/>
                </a>
                   </div>
                </div>
            </div>

            <div class="row">
               <div class="offset-lg-4 offset-mb-4 col-xs-12 col-ms-12 col-lg-4 mb-4 ">
                   <div class="ficheProjet"> 
                       Chambre : 
                        <input type="number" name="howmuch"  min="1" max="6">
                   </div>
                </div>
            </div>
            <div class="row">
               <div class="offset-lg-4 offset-mb-4 col-xs-12 col-ms-12 col-lg-4 mb-4 ">
                   <div class="ficheProjet"> 
                       Salle de bain : 
                        <input type="number" name="howmuch" min="1" max="4">
                   </div>
                </div>
            </div>
            <div class="row">
               <div class="offset-lg-4 offset-mb-4 col-xs-12 col-ms-12 col-lg-4 mb-4 ">
                   <div class="ficheProjet">
                    Toit Ardoise
                       <label class="switch">
                            <input type="checkbox">
                                <span class="slider round"></span>
                        </label>
                    Toit Tuile
                   </div>
                </div>
            </div>
            <div class="row">
               <div class="offset-lg-4 offset-mb-4 col-xs-12 col-ms-12 col-lg-4 mb-4 ">
                   <div class="ficheProjet">
                    Isolant Syntétique
                       <label class="switch">
                            <input type="checkbox">
                                <span class="slider round"></span>
                        </label>
                    Isolant Biologique
                   </div>
                </div>
            </div>
            <div class="row">
               <div class="offset-lg-4 offset-mb-4 col-xs-12 col-ms-12 col-lg-4 mb-4 ">
                   <div class="ficheProjet">
                    Murs extérieurs bois
                       <label class="switch">
                            <input type="checkbox">
                                <span class="slider round"></span>
                        </label>
                    Murs extérieurs crépis
                   </div>
                </div>
            </div>
            <div class="row">
               <div class="offset-lg-4 offset-mb-4 col-xs-12 col-ms-12 col-lg-4 mb-4 ">
                   <div class="ficheProjet">
                    Porte d'entrée semi vitrée
                       <label class="switch">
                            <input type="checkbox">
                                <span class="slider round"></span>
                        </label>
                    Porte d'entrée pleine
                   </div>
                </div>
            </div>

            <div class="row">
               <div class="offset-lg-4 offset-mb-4 col-xs-12 col-ms-12 col-lg-4 mb-4 ">
                   <div class="nomClient">
                    N° client : <?= $client[0]?>
                   </div>
                </div>
            </div>


            <div class="row">
               <div class="offset-lg-4 offset-mb-4 col-xs-12 col-ms-12 col-lg-4 mb-4 ">
                   <div class="nomClient">
                       Matricule Commercial : <?= $_SESSION['userMatricule'] ?>
                   </div>
                </div>
            </div>
                <div class="row">
               <div class="offset-lg-4 offset-mb-4 col-xs-12 col-ms-12 col-lg-4 mb-4 ">
                   <div class="nomClient">
                     Gamme choisie :<?= $detailsGamme[1] ?><br>
                     Modele choisi :<?= $detailsModele[1] ?>
                   </div>
                </div>
            </div>

            <button type="submit" class="btn btn-primary" id="btn-devis"><a href="devis.php">Générer un devis</a></button>
 </div>



<!--FOOTER-->

  <?php
	include "../include/footer.php";
	?>



    <!--SCRIPTS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>

    <script src="../js/jquery-3.4.1.min.js"></script>
    <script src="../js/bootstrap-4.3.1.min.js"></script>





</body>

</html>
