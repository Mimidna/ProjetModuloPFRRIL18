<!doctype html>
<html lang="fr">


<?php
 include '../include/TraitementBDD/BDDFicheClient.php';
?> 
<!--HEADER-->

<?php
include "../include/header.php";
?>


<body >

<?php
include "../include/menuMain.php";
?>


<!--CONTENU-->

<div id="image-rondin ">

            <?php $client = loadClient($_GET['clientId']);?>


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
               <div class="offset-lg-1 offset-mb-1 col-xs-12 col-ms-12 col-lg-4 mb-4 ">
                   <div class="nomClient">
                <img src="../css/logos/mail.png" alt="mail" class="iconeClient"/>
                    <?= $client[4] ?>
                   </div>
                </div>
               <div class="offset-lg-1 offset-mb-1 col-xs-12 col-ms-12 col-lg-4 mb-4 ">
                   <div class="nomClient">
                    N° client :<?= $client[0] ?>
                   </div>
                </div>
            </div>

            <div class="row">
               <div class="offset-lg-1 offset-mb-1 col-xs-12 col-ms-12 col-lg-4 mb-4 ">
                   <div class="nomClient">
                <img src="../css/logos/portable.png" alt="portable" class="iconeClient"/>
                     <?= $client[3]?>
                   </div>
                </div>
               <div class="offset-lg-1 offset-mb-1 col-xs-12 col-ms-12 col-lg-4 mb-4 ">
                  <div class="nomClient">
                <img src="../css/logos/adresse.png" alt="adresse" class="iconeClient"/>
                  <address><?= $client[5].', '.$client[6].' '.$client[7] ?>   </address>
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
               <div class="offset-lg-1 offset-mb-1 col-xs-12 col-ms-12 col-lg-4 mb-4 ">
                   <div class="nomClient">
                   Liste des projets
                   </div>
                    <ul class="listeDevis">
                        <li><img src="../css/logos/maison.png" class="iconeClient"/><a href="devis.php">51 01 JDO 19 03 AT001 M007 <br/><div class="titreDevis">Maison Chalet intuitive option</div></a></li> 
                        <li><img src="../css/logos/maison.png" class="iconeClient"/><a href="devis.php">51 01 JDO 19 03 AT001 M001 <br/><div class="titreDevis">Maison Chalet exclusive</div></a></li> 
                        <li><img src="../css/logos/maison.png" class="iconeClient"/><a href="devis.php">51 01 JDO 19 03 AT001 M002 <br/><div class="titreDevis">Maison Chalet intuitive</div></a></li> 
                    </ul>
               </div>
               
               
               <div class="offset-lg-1 offset-mb-1 col-xs-12 col-ms-12 col-lg-4 mb-4 ">
                  <div class="map">
<!--                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d805.6884355750576!2d-1.553270990957192!3d47.21654181496183!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4805eea451d0bb53%3A0xe7da763018680bc2!2sANGERS%20-%20CENTRE%20VILLE%20-!5e0!3m2!1sfr!2sfr!4v1578068965748!5m2!1sfr!2sfr" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>-->
                      <iframe width="600" height="450" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.openstreetmap.org/export/embed.html?bbox=-1.5514111518859863%2C47.20843980959928%2C-1.5413689613342287%2C47.21334471281175&amp;layer=mapnik" style="border: 1px solid black"></iframe><br/><small><a href="https://www.openstreetmap.org/#map=17/47.21089/-1.54639">Agrandir la carte</a></small>
                  </div>
                </div>
            </div>


            <button type="submit" class="btn btn-primary" id="nouveauProjet"><a href="choixGamme.php?clientId=<?= $client[0] ?>">Nouveau projet</a></button>
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
