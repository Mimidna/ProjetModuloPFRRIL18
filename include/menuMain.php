<?php
session_start();
?>

<header>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 ">

                <nav class="navbar-nav navbar-expand-md navbar-dark navbar-static-top" role="navigation" id="menuprincipal">
                   

                        <!-- En tete Madera -->
                        <a class="navbar-brand" href="../pages/espacePerso.php">
                            <img src="../css/logos/madera.png" alt="Madera" id="sogeti-labs-logo-menu" style="width:100px" />
                        </a>
                        <div class="entete">
                        <h2><?php echo 'Bienvenue : '. $_SESSION['userFirstName'].'  '.$_SESSION['userName']. ' !' ?></h2>
                        </div>      

                        <button type="submit" class="btn btn-primary" id="deconnexion">
                            <?php  $link_address1 = '../index.php';
                            //session_destroy();
                                echo "<a href='".$link_address1."'>
                                    Déconnexion </a>"; ?>
                        </button>
						
                       <!-- ici pour la requete -->
                </nav>
            </div>
</header>