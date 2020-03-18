 <!doctype html>
<html lang="fr">

<!--HEADER-->

    <?php
      include "../include/header.php";
    ?>


<body >

    <?php
      include "../include/menuMain.php";
      include '../include/TraitementBDD/BDDFicheClient.php';


    if (isset($_GET['clientId']) && $_GET['clientId'] != ''){
        $client = loadClient($_GET['clientId']);
        $txtTitre = "modification d'un client";
        $txtBtn = 'Modifier le Client';
        $txtNom = $client[1];
        $txtPrenom = $client[2];
        $txtTelephone = $client[3];
        $txtMail = $client[4];
        $txtAdresse = $client[5];
        $txtCP = $client[6];
        $txtVille = $client[7];
    }else{
        $txtTitre = "création d'un client";
        $txtBtn = 'Créer le Client';
        $txtNom = '';
        $txtPrenom = '';
        $txtTelephone = '';
        $txtMail = '';
        $txtAdresse = '';
        $txtCP = '';
        $txtVille = '';
    }
    ?>


<!--CONTENU-->

<div id="image-rondin ">
            <!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="creation">
            <strong><?= 'Formulaire de '.  $txtTitre ?></strong>

        </div>

        <!-- Contact Form -->

        <div class="jumbotron" id="contact_us">
            <div class="row">
                <div class="col-xs-12 col-ms-12 col-lg-8 mb-4">
                    
                   
                    <form name="sentMessage" id="contactForm" action ="../include/TraitementBDD/BDDCreationClient.php" novalidate method="post">
                        <div class="control-group form-group">
                            <div class="controls">
                               
                                <input type="text" class="form-control" id="lastName" name ="lastName" required placeholder= "Nom"
                                       data-validation-required-message="Nom client" value="<?= $txtNom ?>">
                                <p class="help-block"></p>
                            </div>
                        </div>
						<div class="control-group form-group">
                            <div class="controls">
                                
                                <input type="text" class="form-control" id="firstName" name="firstName" required placeholder= "Prénom"
                                       data-validation-required-message="Prénom client" value="<?= $txtPrenom ?>">
                                <p class="help-block"></p>
                            </div>
                        </div>
                        <div class="control-group form-group">
                            <div class="controls">
                               
                                <input type="tel" class="form-control" id="phone" name="phone" required placeholder= "Téléphone"
                                       data-validation-required-message="Numéro Téléphone client" value="<?= $txtTelephone ?>">
                            </div>
                        </div>
                        <div class="control-group form-group">
                            <div class="controls">
                                
                                <input type="email" class="form-control" id="email" name="email" required placeholder= "Mail"
                                       data-validation-required-message="Email client" value="<?= $txtMail ?>">
                            </div>
                        </div>
						<div class="control-group form-group">
                            <div class="controls">
                                
                                <input type="adresse" class="form-control" id="adresse" name="adresse" required placeholder= "Adresse"
                                       data-validation-required-message="Adresse client" value="<?= $txtAdresse ?>">
                            </div>
                        </div>
						<div class="control-group form-group">
                            <div class="controls">
                                
                                <input type="cp" class="form-control" id="cp" name="cp" required placeholder= "Code Postal"
                                       data-validation-required-message="CP client" value="<?= $txtCP ?>">
                            </div>
                        </div>
						<div class="control-group form-group">
                            <div class="controls">
                                
                                <input type="ville" class="form-control" id="ville" name="ville" placeholder= "Ville" required
                                       data-validation-required-message="Ville client" value="<?= $txtVille ?>">
                            </div>
                        </div>

                        <div id="success"></div>
                        <!-- For success/fail messages -->
                        <button type="submit" class="btn btn-primary" id="sauvegarde" name="creerClient"><?=$txtBtn?></button>
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
