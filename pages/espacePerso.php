<!doctype html>
<html lang="fr">

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
            <div class="row buttonPerso">

                 <button class="favorite styled"
                     name="listeDesClients">
                     <a href="listeClients.php">
                     Liste Clients
                     </a>
                </button>
            </div>

            <div class="row">
                  <button class="favorite styled"
                          type="button">
                      <a href="creationClient.php">
                          Nouveau client
                      </a>
                  </button>


            </div>

            <div class="row">
              
                <button class="favorite styled"
                     type="button">
                     <a href="listeClients.php">
                     Nouveau projet
                     </a>
                </button>
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
