<!doctype html>
<html lang="en">
 <!--   <?php
include 'database.php';
?> -->

<!--HEADER-->

<?php
include "include/header.php";
?>



<body >

<!--ENTETE-->




<!--NAVBAR-->

<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top navBarModulo ">

				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<a class="navbar-brand" href="#">
					<img class="nav-logo"src="css/logo/madera.png" alt>
					</a>
					<h1> MODULO </h1>
				</div>
			</nav>
		</div>
	</div>
</div>


<!--CONTENU-->

<?php
    if(isset($_REQUEST['page']))
    {
        include "contenu/".$_REQUEST['page'].".php";
    } else
    {
        include "contenu/accueil.php";
    }
?>



<!--FOOTER-->

  <?php
	include "include/footer.php";
	?>



    <!--SCRIPTS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>

    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/bootstrap-4.3.1.min.js"></script>





</body>

</html>
