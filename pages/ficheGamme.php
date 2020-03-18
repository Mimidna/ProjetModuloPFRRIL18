<!doctype html>
<html lang="fr">

<!--HEADER-->

<?php
include '../include/TraitementBDD/BDDFicheClient.php';
include '../include/TraitementBDD/BDDChoixGamme.php';
include "../include/header.php";
?>

<body >
<h1> PRESENTATION D'UNE GAMME</h1>
<h2> Choix de la gamme</h2>

<?php
include "../include/menuMain.php";
$client = loadClient($_GET['clientId']);
$detailsGamme = loadGamme($_GET['gammeId']);


?>


<!--CONTENU-->

<div id="image-rondin ">
    <a href="choixGamme.php?clientId=<?= $client[0] ?>">
        <img src="../css/logos/flecheretour.png" alt="retour" class="retour" />
    </a>

               <div class="gamme">
                 Presentation de la gamme <?= $detailsGamme[1] ?><br/>
                     <a href="ficheGamme.php">
                         <img src="../images/<?=strtolower($detailsGamme[1])?>_1.png" height="352" width="470" alt="<?=$detailsGamme[1]?>" class="imgGamme"/>
                         <img src="../images/<?=strtolower($detailsGamme[1])?>_2.png" height="352" width="470" alt="<?=$detailsGamme[1]?>" class="imgGamme"/>
                         <img src="../images/<?=strtolower($detailsGamme[1])?>_3.png" height="352" width="470" alt="<?=$detailsGamme[1]?>" class="imgGamme"/>
                     </a>
               </div>

               <div class="descriptionGamme">
                   <?= $detailsGamme[2] ?>
               </div>
            
             <button type="submit" class="btn btn-primary" id="selectionGamme"><a href="choixModele.php?clientId=<?= $client[0] ?>&gammeId=<?= $detailsGamme[0] ?>">Séléctionner cette gamme</a></button>
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
