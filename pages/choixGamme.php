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
    <a href="ficheClient.php">
        <img src="../css/logos/flecheretour.png" alt="retour" class="retour" />
    </a>

            
               <div class="gamme">
                 Gamme Chalet<br/>
                 <a href="ficheGamme.php">
                     <img src="../images/chalet.png" alt="chalet" class="imgGamme"/>
                 </a>
               </div>
           
           
               <div class="gamme">
                 Gamme Contemporaine<br/>
                 <a href="ficheGamme.php">
                     <img src="../images/contemporaine.jpg" alt="contemporaine" class="imgGamme"/>
                 </a>
               </div>
            
          
               <div class="gamme">
                 Gamme Deluxe<br/>
                 <a href="ficheGamme.php">
                     <img src="../images/deluxe.jpg" alt="deluxe" class="imgGamme"/>
                 </a>
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
