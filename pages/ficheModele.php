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
<h1> PRESENTATION D'UN MODELE</h1>
<h2> FICHE DU MODELE</h2>

<?php
include "../include/menuMain.php";
$client = loadClient($_GET['clientId']);
$detailsGamme = loadGamme($_GET['gammeId']);
$detailsModele = loadModele($_GET['modeleId']);
?>

<!--CONTENU-->

<div id="image-rondin ">
    <a href="choixModele.php?clientId=<?=$client[0] ?>&gammeId=<?=$detailsGamme[0] ?>">
        <img src="../css/logos/flecheretour.png" alt="retour" class="retour" />
    </a>
            
               <div class="modele">
                 Presentation du modele <?= $detailsModele[1] ?> de la gamme <?=  $detailsGamme[1]?><br/>
                 <a href="ficheModele.php">
                     <img src="../images/<?=$detailsGamme[1]?>_<?=$detailsGamme[0]?>.png" height="352" width="470" alt="<?=$detailsGamme[1]?>" class="imgModele"/>
                 </a>
               </div>

               <div class="descriptionModele">
                   <h3> Description du modele <?= $detailsModele[1] ?> :</h3>
                <?=$detailsModele[2] ?><br/>
               </div>
            
             <button type="submit" class="btn btn-primary" id="selectionModele"><a href="ficheProjet.php?clientId=<?=$client[0]?>&gammeId=<?= $detailsGamme[0]?>&modeleId=<?=$detailsModele[0]?>">Choisir ce modele</a></button>
            
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
