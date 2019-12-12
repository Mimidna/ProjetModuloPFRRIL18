<!doctype html>
<html lang="fr">


  <?php
// include 'database.php';
?> 
<!--HEADER-->

<?php
include "include/header.php";
?>



<body >

<!--ENTETE-->




<header>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 ">

                <nav class="navbar-nav navbar-expand-md navbar-dark navbar-static-top" role="navigation" id="menuprincipal">
                   

                        <!-- En tete Madera -->
                        <a class="navbar-brand" href="https://www.fr.madera.com/">
                            <img src="css/logos/madera.png" alt="Madera" id="sogeti-labs-logo-menu" style="width:100px" />
                        </a>
                        <div class="entete">
                         NOM du commercial <!-- a mettre avec base de donéee-->
                        </div>      

                        <button type="submit" class="btn btn-primary" id="deconnexion">
                            <?php  $link_address1 = 'connexion.php';
                                echo "<a href='".$link_address1."'>
                                    Déconnexion </a>"; ?>
                        </button>
                </nav>
            </div>
</header>



<!--CONTENU-->

<?php


        include "contenu/espacePerso.php"
   // if(isset($_REQUEST['page']))
    //{
      //  include "contenu/".$_REQUEST['page'].".php";
    //} else
    //{
      //  include "contenu/accueil.php";
    //}
?>



<!--FOOTER-->

  <?php
	include "include/footer.php";
	?>



    <!--SCRIPTS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>

    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/bootstrap-4.3.1.min.js"></script>





</body>

</html>
