<!doctype html>
<html lang="fr">
<?php include "database.php"; 
$laFinition=$_GET['finition'];
$BV=$_GET['BV'];
$Moto=$_GET['Moto'];
$Siege=$_GET['Siege'];
$Jantes=$_GET['Jantes'];
$Couleur=$_GET['Couleur'];
$CouleurRetro=$_GET['CouleurRetro'];
$Camera=$_GET['Camera'];
$GPS=$_GET['GPS'];
$Toit=$_GET['Toit'];
?>
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

    <h1>Devis</h1>
</br>   

    <table class="tableauDevis">
        
		<?php ComposantsVoiture($BV,$Moto, $Siege, $Jantes, $Couleur,$CouleurRetro,$Camera,$GPS,$Toit, $laFinition) ?>

    </table>




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
