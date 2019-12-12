<!doctype html>
<?php
include "database.php";
?>
<html lang="fr">

<head>
    <!-- META INFORMATIONS-->
    <title>Voltik</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="description" content="Voltik">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--BOOSTRAP-->
    <link rel="stylesheet" type="text/css" href="css/bootstrap4.3.1.css" />

    <!--CSS-->
    <link rel="stylesheet" type="text/css" href="css/style.css" />
</head>

<body >

	<!--HEADER-->

<h1>Options</h1>
<br/>
<form action="index.php?page=devis&voiture=2" method="post">
    
	<?php affichageOptions($_GET["finition"]) ?>
	
	<div class ="boutonValider">
        <input type="submit" value="Valider les options">
    </div>
	
</form>




		<!--FOOTER-->




		<!--SCRIPTS-->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>

		<script src="js/jquery-3.4.1.min.js"></script>
		<script src="js/bootstrap-4.3.1.min.js"></script>
		<script src="js/carousel.js"></script>

		<!-- WEBSITE JAVASCRIPT -->
		<script src="js/headers/mainNav.js"></script>
		<script src="js/footers/footer.js"></script>

</body>

</html>
