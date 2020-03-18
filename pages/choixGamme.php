<!doctype html>
<html lang="fr">


  <?php
      include '../include/TraitementBDD/BDDFicheClient.php';
      include '../include/TraitementBDD/BDDChoixGamme.php';
      include "../include/header.php";
  ?>

<body>

<h1> PRESENTATION DES GAMMES</h1>
<h2> Choix de la gamme</h2>

    <?php
        include "../include/menuMain.php";
        $client = loadClient($_GET['clientId']);
        $listeDesGammes = selectAllGamme();
    ?>

<!--CONTENU-->

<div id="image-rondin ">
    <a href="ficheClient.php?clientId=<?= $client[0] ?>">
        <img src="../css/logos/flecheretour.png" alt="retour" class="retour"/>
    </a>

               <div class="gamme">
                 Gamme <?= $listeDesGammes[0] ?><br/>
                 <a href="ficheGamme.php?clientId=<?=$client[0]?>&gammeId=<?= recupIdGamme($listeDesGammes[0])[0] ?>">
                     <img src="../images/<?= $listeDesGammes[0] ?>_1.png" height="352" width="470" alt="<?= $listeDesGammes[0] ?>" class="imgGamme"/>
                 </a>
               </div>
           

               <div class="gamme">
                 Gamme <?= $listeDesGammes[1] ?><br/>
                   <a href="ficheGamme.php?clientId=<?=$client[0]?>&gammeId=<?=recupIdGamme($listeDesGammes[1])[0] ?>">
                     <img src="../images/<?= $listeDesGammes[1] ?>_1.png" height="352" width="470" alt="<?= $listeDesGammes[1] ?>" class="imgGamme"/>
                 </a>
               </div>
            
          
               <div class="gamme">
                 Gamme <?= $listeDesGammes[2] ?><br/>
                   <a href="ficheGamme.php?clientId=<?=$client[0]?>&gammeId=<?=recupIdGamme($listeDesGammes[2])[0] ?>">
                     <img src="../images/<?= $listeDesGammes[2] ?>_1.png" height="352" width="470" alt="<?= $listeDesGammes[2] ?>" class="imgGamme"/>
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
