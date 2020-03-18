<!doctype html>
<html lang="fr">

<!--HEADER-->

<?php
include "../include/header.php";
?>


<body >

<?php
include "../include/menuMain.php";
include "../include/TraitementBDD/BDDListeClients.php";
?>

<!--CONTENU-->

<div id="image-rondin ">

    <div class="recherche_p">

        <form action="/search" id="searchthis" method="get">
            <input id="search" name="q" type="text" placeholder="Rechercher" />
            <input id="search-btn" type="submit" value="Rechercher" />
        </form>
    </div>
            <ul class="listeClient">
                <?php listingDesClients();?>
            </ul>
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
