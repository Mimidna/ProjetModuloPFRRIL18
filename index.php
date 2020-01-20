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
                        
                        <button type="submit" class="btn btn-primary" id="connexion">
                             <?php  
                                    session_start();
                                    if(isset($_POST['name']) && isset($_POST['mdp']))
                                    {
                                       // connexion à la base de données
                                        $db_username = 'root';
                                        $db_password = '';
                                        $db_name     = 'modulo';
                                        $db_host     = 'localhost';
                                        $db = mysqli_connect($db_host, $db_username, $db_password,$db_name)
                                               or die('could not connect to database');
                                        // on applique les deux fonctions mysqli_real_escape_string et htmlspecialchars
                                        // pour éliminer toute attaque de type injection SQL et XSS
                                        $username = mysqli_real_escape_string($db,htmlspecialchars($_POST['name'])); 
                                        $password = mysqli_real_escape_string($db,htmlspecialchars($_POST['mdp']));
                                      
                                        if($username !== "" && $password !== "")
                                        {
                                            $requete = "SELECT count(*) FROM commercial where 
                                                  commercial_identifiant = '".$username."' and commercial_motDePasse = '".$password."' ";
                                            $exec_requete = mysqli_query($db,$requete);
                                            $reponse      = mysqli_fetch_array($exec_requete);
                                            $count = $reponse['count(*)'];
                                            if($count!=0) // nom d'utilisateur et mot de passe corrects
                                            {
                                             echo 'Aucune erreur détéctée !!  ';
                                               $_SESSION['name'] = $username;
                                               header('Location: espacePerso.php');
                                            }
                                            else
                                            {
                                             echo 'Erreur 1 !!  ';
                                               header('Location: index.php?erreur=1'); // utilisateur ou mot de passe incorrect
                                            }
                                        }
                                        else
                                        {
                                          echo 'Erreur 2 !!  ';
                                           header('Location: index.php?erreur=2'); // utilisateur ou mot de passe vide
                                        }
                                    }
                                    else
                                    {
                                       header('Location: index.php');
                                    }
                                    mysqli_close($db); // fermer la connexion
		                        }
				                ?>
                             <a href="pages/espacePerso.php">Connexion</a>
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
