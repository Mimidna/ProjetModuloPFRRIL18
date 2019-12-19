        
	<?php $modele=$_GET['modele'];
		
		$_SESSION['modele']=$modele;

		echo $modele;
		?>
		
		<div class="titre">
		    <h1> Choisissez votre finition pour allez avec votre <?php echo $modele ?></h1>
	    </div>

<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<div class="carousel slide" id="carousel-7837">
				<ol class="carousel-indicators">
					<li data-slide-to="0" data-target="#carousel-7837"class="active">
					</li>
					<li data-slide-to="1" data-target="#carousel-7837">
					</li>
					<li data-slide-to="2" data-target="#carousel-7837">
					</li>
				</ol>

			<div class="carousel-inner">
			
					<?php
				// connection
					$servername = "localhost";
					$username = "root";
					$password = "";
					$base = "voltik";
					$conn = new mysqli($servername, $username, $password,$base);
					

					// requete
					$sql="SELECT finition.id_finition, finition.libelle_finition, finition.prix_finition, finition.id_modele, modele.petitscaracteres
					FROM finition, modele
					WHERE finition.id_modele = modele.id_modele
					AND finition.id_modele ='".$modele."'";
					$result = $conn->query($sql);



					//echo $sql;
				

					// traitement des résultats
					$compteur = 1;
					while($row = $result->fetch_assoc()) {
						echo '
						<div class="carousel-item';
						if ($compteur == 3){
							echo " active";
						}
						echo '">
						
							<a href="index.php?page=voiture&modele='.$modele.'&finition='.$row['id_finition'].'"><img class="d-block w-100"  src="images/'.$row['id_finition'].'.jpg" alt="'.$row['id_finition'].'"/></a>
							
							<div class="accueil-descripion">
								<dl>
								<dt> '.$row['libelle_finition'].'</dt>
								<dd>'.$row['prix_finition'].'</dd>
								</dl>
								
							</div>
							<br/>
							<p class="petitsCaracteres">
								'.$row['petitscaracteres'].'
							</p>
						</div>
						';
						$compteur++;
					}
					?>

				
				
				<a class="carousel-control-prev" href="#carousel-7837" data-slide="prev"><span class="carousel-control-prev-icon"></span> <span class="sr-only">Previous</span></a> <a class="carousel-control-next" href="#carousel-7837" data-slide="next"><span class="carousel-control-next-icon"></span> <span class="sr-only">Next</span></a>
			</div>
			
		</div>
	</div>
</div>