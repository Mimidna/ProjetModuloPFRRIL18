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
            <!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="creation">
            <strong>Création Fiche Client </strong>

        </div>

        <!-- Contact Form -->

        <div class="jumbotron" id="contact_us">
            <div class="row">
                <div class="col-xs-12 col-ms-12 col-lg-8 mb-4">
                    
                   
                    <form name="sentMessage" id="contactForm" novalidate>
                        <div class="control-group form-group">
                            <div class="controls">
                               
                                <input type="text" class="form-control" id="name" required placeholder= "Nom"
                                       data-validation-required-message="Nom client">
                                <p class="help-block"></p>
                            </div>
                        </div>
						<div class="control-group form-group">
                            <div class="controls">
                                
                                <input type="text" class="form-control" id="name"required placeholder= "Prénom"
                                       data-validation-required-message="Prénom client">
                                <p class="help-block"></p>
                            </div>
                        </div>
                        <div class="control-group form-group">
                            <div class="controls">
                               
                                <input type="tel" class="form-control" id="phone" required placeholder= "Téléphone"
                                       data-validation-required-message="Numéro Téléphone client">
                            </div>
                        </div>
                        <div class="control-group form-group">
                            <div class="controls">
                                
                                <input type="email" class="form-control" id="email" required placeholder= "Mail"
                                       data-validation-required-message="Email client">
                            </div>
                        </div>
						<div class="control-group form-group">
                            <div class="controls">
                                
                                <input type="adresse" class="form-control" id="adresse" required placeholder= "Adresse"
                                       data-validation-required-message="Adresse client">
                            </div>
                        </div>
						<div class="control-group form-group">
                            <div class="controls">
                                
                                <input type="cp" class="form-control" id="cp" required placeholder= "Code Postal"
                                       data-validation-required-message="CP client">
                            </div>
                        </div>
						<div class="control-group form-group">
                            <div class="controls">
                                
                                <input type="ville" class="form-control" id="ville" placeholder= "Ville" required 
                                       data-validation-required-message="Ville client">
                            </div>
                        </div>


                        <div id="success"></div>
                        <!-- For success/fail messages -->
                        <button type="submit" class="btn btn-primary" id="sauvegarde"><a href="ficheClient">Sauvegarder</a></button>
                    </form>
                </div>

            </div>
            <!-- /.row -->
        </div>
    </div>
    <!-- /.container -->
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
