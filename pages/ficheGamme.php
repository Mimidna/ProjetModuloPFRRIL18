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
    <a href="choixGamme.php">
        <img src="../css/logos/flecheretour.png" alt="retour" class="retour" />
    </a>

            
               <div class="gamme">
                 Gamme Chalet<br/>
                 <a href="ficheGamme.php">
                     <img src="../images/chalet.png" alt="chalet" class="imgGamme"/>
                 </a>
               </div>
           
           
               <div class="descriptionGamme">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sagittis, est id molestie laoreet, 
                turpis nunc laoreet felis, sit amet suscipit enim nulla id lorem. Ut et porta nisl. Morbi euismod dolor nec felis ornare tincidunt. 
                Fusce facilisis diam vitae pulvinar sagittis. Aenean auctor dolor a malesuada blandit. Vivamus maximus lorem non risus varius rhoncus. 
                Suspendisse potenti. Curabitur vitae ante sed justo eleifend egestas scelerisque porta urna. 
               </div>
            
             <button type="submit" class="btn btn-primary" id="selectionGamme"><a href="choixModele.php">Séléctionné gamme</a></button>
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
