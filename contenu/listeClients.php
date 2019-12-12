
			<!--HEADER-->
		<div class="titre">
			<h1> Parcourez notre selection </h1>
		</div>

	<div class="container-fluid Accueil-Carousel">
		<div class="row">
			<div class="col-md-12">
				<div class="carousel slide" id="carousel-7837">
					<ol class="carousel-indicators">
						<li data-slide-to="0" data-target="#carousel-7837">
						</li>
						<li data-slide-to="1" data-target="#carousel-7837">
						</li>
						<li data-slide-to="2" data-target="#carousel-7837">
						</li>
						<li data-slide-to="3" data-target="#carousel-7837" class="active">
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
					$sql="SELECT * FROM modele";
					$result = $conn->query($sql);

					// traitement des résultats
					$compteur = 1;
					while($row = $result->fetch_assoc()) {
						echo '
						<div class="carousel-item';
						if ($compteur == 4){
							echo " active";
						}
						echo '">
							<a href="index.php?page=voiture&modele='.$row['id_modele'].'"><img class="d-block w-100" alt="Carousel Bootstrap First" src="images/'.$row['id_modele'].'.jpg" /></a>
							
							<div class="accueil-descripion">
								<dl>
								<dt>Nos '.$row['libelle_modele'].'s</dt>
								<dd>'.$row['description_modele'].'</dd>
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




					<!--
						<div class="carousel-item">
							<a href="contenu/voiture.php?modele=A1"><img class="d-block w-100" alt="Carousel Bootstrap First" src="./images/mini/mini1.jpg" /></a>
							
							<div class="accueil-descripion">
								<dl>
								<dt>	Nos Minis </dt>
								<dd>
								Petite compacte et passe partout la voiture
								idéale pour faire de la ville avec 3 modèles 
								personnalisables disponibles 
								À partir de 169€/mois (1)
								</dd>
								</dl>
								
							</div>
							<br/>
							<p class="petitsCaracteres">
								(1) Exemple pour Nouvelle A1 Intuitive.
								Location Longue Durée pour 37 mois et 22 500 km avec
								un 1er loyer de 8 000 €, ramené à 2 000 €
								après déduction du bonus écologique 
								de 6 000 €, puis 36 loyers de 125 €/mois.
							</p>
						</div>

						<div class="carousel-item">
						<a href="contenu/voiture.php?modele=C5"><img class="d-block w-100" alt="Carousel Bootstrap Second" src="./images/berline/berline1.jpg" /></a>
							<div class="accueil-descripion">
								<dl>
								<dt>
									Nos berlines
								</dt>
								<dd>
								Petite compacte et passe partout la voiture
								idéale pour faire de la ville avec 3 modèles 
								personnalisables disponibles 
								À partir de 169€/mois (1)
								</dd>
								<dl>
							</div>
							<br/>
							<p class="petitsCaracteres">
								(1) Exemple pour Nouvelle A1 Intuitive.
								Location Longue Durée pour 37 mois et 22 500 km avec
								un 1er loyer de 8 000 €, ramené à 2 000 €
								après déduction du bonus écologique 
								de 6 000 €, puis 36 loyers de 125 €/mois.
							</p>
						</div>

						<div class="carousel-item">
						<a href="contenu/voiture.php?modele=S6"><img class="d-block w-100" alt="Carousel Bootstrap Second" src="./images/sportive/sportive1.jpg" /></a>
							<div class="accueil-descripion">
								<dl>
								<dt>
									Nos Sportives
								</dt>
								<dd>
								Petite compacte et passe partout la voiture
								idéale pour faire de la ville avec 3 modèles 
								personnalisables disponibles 
								À partir de 169€/mois (1)
								</dd>
								</dl>
							</div>
							<br/>
							<p class="petitsCaracteres">
								(1) Exemple pour Nouvelle A1 Intuitive.
								Location Longue Durée pour 37 mois et 22 500 km avec
								un 1er loyer de 8 000 €, ramené à 2 000 €
								après déduction du bonus écologique 
								de 6 000 €, puis 36 loyers de 125 €/mois.
							</p>
						</div>

						<div class="carousel-item active">
						<a href="contenu/voiture.php?modele=F3"><img class="d-block w-100" alt="Carousel Bootstrap Third" src="./images/SUV/suv1.jpg" /></a>
							<div class="accueil-descripion">
								<dl>
								<dt>
									Nos SUV
								</dt>
								<dd>
								Découvrez un habitacle spacieux et soigné et profitez d’une maniabilité 
								et stabilité incomparables pour effectuer vos trajets quotidiens, professionnels 
								ou autres, en toute tranquillité et avec un maximum de confort. Choisissez une voiture 
								véritablement en phase avec notre époque. avec 3 modèles 
								personnalisables disponibles 
								À partir de 169€/mois (1)
								</dd>>
								</dl>
							</div>
							<br/>
							<p class="petitsCaracteres">
								(1) Exemple pour Nouvelle A1 Intuitive.
								Location Longue Durée pour 37 mois et 22 500 km avec
								un 1er loyer de 8 000 €, ramené à 2 000 €
								après déduction du bonus écologique 
								de 6 000 €, puis 36 loyers de 125 €/mois.
							</p>
						</div>
						-->


					</div> <a class="carousel-control-prev" href="#carousel-7837" data-slide="prev"><span class="carousel-control-prev-icon"></span> <span class="sr-only">Previous</span></a> <a class="carousel-control-next" href="#carousel-7837" data-slide="next"><span class="carousel-control-next-icon"></span> <span class="sr-only">Next</span></a>
				</div>
				
			</div>
		</div>
	</div>
  