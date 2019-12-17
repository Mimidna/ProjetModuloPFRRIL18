<!doctype html>
<html lang="fr">


  <?php
// include 'database.php';
?> 
<!--HEADER-->

<?php
include "include/header.php";
?>

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
						
						<?php
						
						// créé l'instance de connexion
						// Se connecter à MySQL
						
						try
							{
								// On se connecte à MySQL
								$bdd = new PDO('mysql:host=localhost;dbname=modulo;charset=utf8', 'root', '');
							}
							catch(Exception $e)
							{
								// En cas d'erreur, on affiche un message et on arrête tout
									die('Erreur : '.$e->getMessage());
							}
									
						?>
                </nav>
            </div>
</header>


<body >

<!--ENTETE-->








<!--CONTENU-->

<?php


        include "contenu/connexion.php"
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
