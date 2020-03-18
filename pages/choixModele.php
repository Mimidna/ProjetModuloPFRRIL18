<!doctype html>
<html lang="fr">


  <?php
 //include 'database.php';
?> 
<!--HEADER-->

<?php
include '../include/TraitementBDD/BDDFicheClient.php';
include '../include/TraitementBDD/BDDChoixGamme.php';
include '../include/TraitementBDD/BDDChoixModele.php';
include "../include/header.php";
?>


<body >

<h1> PRESENTATION DES MODELES</h1>
<h2> Choix d'un Modele</h2>

<?php
include "../include/menuMain.php";
$client = loadClient($_GET['clientId']);
$detailsGamme = loadGamme($_GET['gammeId']);
$listeModeles = selectAllModele();
?>


<!--CONTENU-->

<div id="image-rondin ">
    <a href="ficheGamme.php?clientId=<?= $client[0] ?>&gammeId=<?= $detailsGamme[0] ?>">
        <img src="../css/logos/flecheretour.png" alt="retour" class="retour" />
    </a>
    <br/>
            
               <div class="modele">
                 Modele <?= $listeModeles[0] ?> de la gamme <?= $detailsGamme[1] ?><br/>
                 <a href="ficheModele.php?clientId=<?= $client[0] ?>&gammeId=<?= $detailsGamme[0] ?>&modeleId=<?= recupIdmodele($listeModeles[0])[0] ?>">
                     <img src="../images/<?=$detailsGamme[1]?>_1.png" height="352" width="470" alt="<?= $listeModeles[0] ?>" class="imgModele"/>
                 </a>
               </div>
                <br/>
           
               <div class="modele">
                   Modele <?= $listeModeles[1] ?> de la gamme <?= $detailsGamme[1] ?><br/>
                   <a href="ficheModele.php?clientId=<?= $client[0] ?>&gammeId=<?= $detailsGamme[0] ?>&modeleId=<?= recupIdmodele($listeModeles[1])[0] ?>">
                     <img src="../images/<?=$detailsGamme[1]?>_2.png" height="352" width="470" alt="<?= $listeModeles[1] ?>" class="imgModele"/>
                 </a>
               </div>
                <br/>
          
               <div class="modele">
                   Modele <?= $listeModeles[2] ?> de la gamme <?= $detailsGamme[1] ?><br/>
                   <a href="ficheModele.php?clientId=<?= $client[0] ?>&gammeId=<?= $detailsGamme[0] ?>&modeleId=<?= recupIdmodele($listeModeles[2])[0] ?>">
                     <img src="../images/<?=$detailsGamme[1]?>_3.png" height="352" width="470" alt="<?= $listeModeles[2] ?>" class="imgModele"/>
                 </a>
               </div>
            
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
