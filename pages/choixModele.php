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
    <a href="ficheGamme.php">
        <img src="../css/logos/flecheretour.png" alt="retour" class="retour" />
    </a>
            
               <div class="modele">
                 Intuitive<br/>
                 <a href="ficheModele.php">
                     <img src="../images/1.png" alt="chalet" class="imgModele"/>
                 </a>
               </div>
           
           
               <div class="modele">
                 Cr�ative<br/>
                 <a href="ficheModele.php">
                     <img src="../images/2.png" alt="contemporaine" class="imgModele"/>
                 </a>
               </div>
            
          
               <div class="modele">
                 Exclusive<br/>
                 <a href="ficheModele.php">
                     <img src="../images/3.png" alt="deluxe" class="imgModele"/>
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
