<!doctype html>
<html lang="fr">


  <?php
 //include 'database.php';
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

            <div class="row">
               <div class="offset-lg-4 offset-mb-4 col-xs-12 col-ms-12 col-lg-4 mb-4 ">
                   <div class="nomClient">
                <img src="../css/logos/profil.png" alt="profil" class="iconeClient"/>
                     John Doe
                <a href="creationClient.php">
                   <img src="../css/logos/modification.png" alt="modif" class="iconeClient"/>
                </a>
                   </div>
                </div>
            </div>

            <div class="row">
               <div class="offset-lg-4 offset-mb-4 col-xs-12 col-ms-12 col-lg-4 mb-4 ">
                   <div class="ficheProjet"> 
                       Chambre : 4
                   </div>
                </div>
            </div>
            <div class="row">
               <div class="offset-lg-4 offset-mb-4 col-xs-12 col-ms-12 col-lg-4 mb-4 ">
                   <div class="ficheProjet"> 
                       Salle de bain : 2
                   </div>
                </div>
            </div>
            <div class="row">
               <div class="offset-lg-4 offset-mb-4 col-xs-12 col-ms-12 col-lg-4 mb-4 ">
                   <div class="ficheProjet">
                    Toit Ardoise
                   </div>
                </div>
            </div>
            <div class="row">
               <div class="offset-lg-4 offset-mb-4 col-xs-12 col-ms-12 col-lg-4 mb-4 ">
                   <div class="ficheProjet">
                    Isolant Biologique
                   </div>
                </div>
            </div>
            <div class="row">
               <div class="offset-lg-4 offset-mb-4 col-xs-12 col-ms-12 col-lg-4 mb-4 ">
                   <div class="ficheProjet">
                    Murs extérieurs bois
                   </div>
                </div>
            </div>
            <div class="row">
               <div class="offset-lg-4 offset-mb-4 col-xs-12 col-ms-12 col-lg-4 mb-4 ">
                   <div class="ficheProjet">
                    Porte d'entrée pleine
                   </div>
                </div>
            </div>

            <div class="row">
               <div class="offset-lg-4 offset-mb-4 col-xs-12 col-ms-12 col-lg-4 mb-4 ">
                   <div class="nomClient">
                    N° client : J DO 19 02 AT 001
                   </div>
                </div>
            </div>


            <div class="row">
               <div class="offset-lg-4 offset-mb-4 col-xs-12 col-ms-12 col-lg-4 mb-4 ">
                   <div class="nomClient">
                     N° Commercial : 59 01 AT 001
                   </div>
                </div>
            </div>


           
            <button type="submit" class="btn btn-primary" id="btn-ajoutOption"><a href="ficheProjet.php">Ajout option</a></button>
            <button type="submit" class="btn btn-primary" id="btn-devis"><a href="devis.php">Devis</a></button>
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
