<!doctype html>
<html lang="fr">


<!--HEADER-->

<head>

	<!-- META INFORMATIONS-->
    <title>Modulo</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="description" content="Modulo">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 

    <!--BOOSTRAP-->

    <link rel="stylesheet" type="text/css" href="css/bootstrap4.3.1.css" />

    <!--CSS-->

    <link rel="stylesheet" type="text/css" href="css/style.css" />



</head>



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
                         MODULO 
                        </div>                      
                </nav>
            </div>
</header>



<!--CONTENU-->

<div class="jumbotron" id="form-connexion">
            <div class="row">
                <div class="offset-lg-4 offset-mb-4 col-xs-12 col-ms-12 col-lg-4 mb-4">

                    <form name="sentMessage" id="co" novalidate>
                        <div class="control-group form-group">
                            <div class="controls">
                                <label class="id"><strong>Identifiant</strong></label>
                                <input type="text" class="form-control" id="name" required
                                       data-validation-required-message="Merci d'entrer votre ID">
                            </div>
                        </div>
                        <div class="control-group form-group">
                            <div class="controls">
                                <label class="mdp"> <strong>MDP</strong></label>
                                <input type="mdp" class="form-control" id="mdp" required
                                       data-validation-required-message="Merci d'entrer votre MDP">
                            </div>
                        </div>
                     <!--    <div id="success"></div>
                        For success/fail messages -->
                        

                        <button type="submit" class="btn btn-primary" id="connexion" ">
                             <?php  
		                         $user = $_POST['name'];
		                         $mdp = $_POST['mdp'];
		  
		                        $sql = $bdd->query("SELECT commercial_id FROM commercial WHERE commercial_identifiant =".$user." AND commercial_motDePasse=".$mdp);
		  
		                        // $data = $reponse->fetch()
		  
		                        //$commercial = mysql_fetch_array($req)['commercial_id'];
		  
		                        if ($reponse->fetch()) {
			                        echo 'Connexion OK';
		                            //$link_address1 = 'connexion.php';
                                    //echo "<a href='".$link_address1."'> "; 
		                        }
				                ?>
                             <a href="pages/espacePerso.php">		</a>
                        </button>

                        <!-- si la connexion est valide par le mot de passe et l'identifiant l'utilisateur se retrouve a la page index.php sinon un message d'erreur s'affiche informant de qu'il est irroné
                        et qu'il faut recommance en cas d'oublie merci de contacter le service informatique.-->
                      </form>
                </div>
            </div>

 </div>









    <!--SCRIPTS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>

    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/bootstrap-4.3.1.min.js"></script>





</body>

</html>
