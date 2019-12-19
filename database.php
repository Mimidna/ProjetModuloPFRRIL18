<?php
	//insertUser($_POST['nom'],$_POST['prenom'], $_POST['tel'], $_POST['mail'], $_POST['adresse'], $_POST['cp'], $_POST['ville'], $_POST['mdp']);
		$servername = "localhost";
		$username = "root";
		$password = "";
		$base = "modulo";
		// Create connection
		$conn = new mysqli($servername, $username, $password,$base);

		// Check connection
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		}
	function describmodele($leModele){
		$servername = "localhost";
		$username = "root";
		$password = "";
		$base = "modulo";
		// Create connection
		$conn = new mysqli($servername, $username, $password,$base);

		// Check connection
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		}

		$sql="SELECT libelle_modele,description_modele FROM modele WHERE id_modele='".$leModele."'";
		$result = $conn->query($sql);
		while($row = $result->fetch_assoc()) {
			//echo iconv('ISO-8859-15','UTF-8' ,'<h4>'.$row['libelle_modele'].'</h4>');
			echo iconv('ISO-8859-15','UTF-8' ,$row['description_modele']);
		}
	}

	function libelemodele($leModele){
		$servername = "localhost";
		$username = "root";
		$password = "";
		$base = "modulo";
		// Create connection
		$conn = new mysqli($servername, $username, $password,$base);

		// Check connection
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		}

		$sql="SELECT libelle_modele,description_modele FROM modele WHERE id_modele='".$leModele."'";
		$result = $conn->query($sql);
		while($row = $result->fetch_assoc()) {
			echo iconv('ISO-8859-15','UTF-8' ,'<h4>'.$row['libelle_modele'].'</h4>');
			//echo iconv('ISO-8859-15','UTF-8' ,$row['description_modele']);
		}
	}
	function libellefinition($laFinition,$leModele){
		$servername = "localhost";
		$username = "root";
		$password = "";
		$base = "modulo";
		// Create connection
		$conn = new mysqli($servername, $username, $password,$base);

		// Check connection
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		}
		switch($leModele){
			case 'C5':
				$laFinition=$laFinition+3;
			break;
			case 'S6':
				$laFinition=$laFinition+6;
			break;
			case 'F3':
				$laFinition=$laFinition+9;
			break;
		}
		$sql="SELECT libelle_finition FROM finition where id_finition=".$laFinition;
		$result = $conn->query($sql);
		while($row = $result->fetch_assoc()) {
			echo iconv('ISO-8859-15','UTF-8' ,'<h4>'.$row['libelle_finition'].'</h4>');
			//echo iconv('ISO-8859-15','UTF-8' ,$row['description_modele']);
		}
	}
	function LaFinition($leModele,$laFinition){
			switch($leModele){
			case 'C5':
				$laFinition=$laFinition+3;
			break;
			case 'S6':
				$laFinition=$laFinition+6;
			break;
			case 'F3':
				$laFinition=$laFinition+9;
			break;
		}
		return $laFinition;
	}
	function ComposantsVoiture($laVoiture){
		$servername = "localhost";
		$username = "root";
		$password = "";
		$base = "modulo";
		// Create connection
		$conn = new mysqli($servername, $username, $password,$base);

		// Check connection
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		}
		$prixtotal=0;
		$sql="select type_options, libelle_valeur , prix_valeur , contrainte.estInclus from voiture, composer, valeur, contrainte, options where voiture.id_voiture=composer.id_voiture and composer.id_valeur=valeur.id_valeur and valeur.id_options=options.id_options and contrainte.id_valeur=valeur.id_valeur and contrainte.id_finition=voiture.id_finition and voiture.id_voiture=".$laVoiture;
		$result = $conn->query($sql);
		while($row = $result->fetch_assoc()) {
			echo"<tr>";
            echo"<th>Nom de l'option</th>";
			echo"<th>".iconv('ISO-8859-15','UTF-8' ,$row['type_options'])." : ".iconv('ISO-8859-15','UTF-8' ,$row['libelle_valeur'])."</th></tr>";
            echo"<tr><th>Prix de l'option</th>";
			if($row['estInclus']==true){
				echo"<th>Inclus</th>";
			}else{
				echo"<th>".$row['prix_valeur']."</th>";
				$prixtotal=$prixtotal+$row['prix_valeur'];
			}
			echo"</tr>";
		}
		$sql="select prix_finition from finition, voiture where finition.id_finition=voiture.id_finition and voiture.id_voiture=".$laVoiture;
		$result = $conn->query($sql);
		while($row = $result->fetch_assoc()) {
			$prixtotal=$prixtotal+$row['prix_finition'];
		}
		echo "<tr></tr></tr><td><strong>Prix total</strong></td><td><strong>".$prixtotal."</strong></td></tr></h2>";
	}
	function ValeurIncluseFinition($laFinition,$leModele){
		$servername = "localhost";
		$username = "root";
		$password = "";
		$base = "modulo";
		// Create connection
		$conn = new mysqli($servername, $username, $password,$base);

		// Check connection
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		}
		switch($leModele){
			case 'C5':
				$laFinition=$laFinition+3;
			break;
			case 'S6':
				$laFinition=$laFinition+6;
			break;
			case 'F3':
				$laFinition=$laFinition+9;
			break;
		}

		$sql="select libelle_valeur from finition, contrainte, valeur where finition.id_finition=contrainte.id_finition and contrainte.id_valeur=valeur.id_valeur and estInclus=true and finition.id_finition=".$laFinition;
		$result = $conn->query($sql);
		while($row = $result->fetch_assoc()) {
			//echo iconv('ISO-8859-15','UTF-8' ,"<li class='list-item'>".$row['libelle_valeur']."</li>)"; arevoir
			echo iconv('ISO-8859-15','UTF-8' ,$row['description_modele']);
		}
	}
	function PetitsCaracteres($leModele){
		$servername = "localhost";
		$username = "root";
		$password = "";
		$base = "modulo";
		// Create connection
		$conn = new mysqli($servername, $username, $password,$base);

		// Check connection
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		}

		$sql="select petitscaracteres from modele where modele.id_modele='".$leModele."'";
		$result = $conn->query($sql);
		while($row = $result->fetch_assoc()) {
			echo iconv('ISO-8859-15','UTF-8' ,$row['petitscaracteres']);
		}
	}
	function insertUser($requete){
		$servername = "localhost";
		$username = "root";
		$password = "";
		$base = "modulo";
		// Create connection
		$conn = new mysqli($servername, $username, $password,$base);

		// Check connection
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		}

		$sql="insert into client (id_client) values(" + $requete + ")";
		$result = $conn->query($sql);
		/*while($row = $result->fetch_assoc()) {
			echo iconv('ISO-8859-15','UTF-8' ,'<h4>'.$row['libelle_modele'].'</h4>');
			//echo iconv('ISO-8859-15','UTF-8' ,$row['description_modele']);
		}*/
	}
	function insertDevis($client,$finition){
		$servername = "localhost";
		$username = "root";
		$password = "";
		$base = "modulo";
		// Create connection
		$conn = new mysqli($servername, $username, $password,$base);

		// Check connection
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		}

		$sql="insert into voiture (id_client,id_finition) values(".$client.",".$finition.")";
		$result = $conn->query($sql);
		$sql2="select id_voiture from voiture where id_client=".$client." and id_finition=".$finition;
		$result = $conn->query($sql2);
		while($row = $result->fetch_assoc()) {
			return $row['id_voiture'];
		}
		return "ERROR";
	}
	function insertOption($voiture,$valeur){
		$servername = "localhost";
		$username = "root";
		$password = "";
		$base = "modulo";
		// Create connection
		$conn = new mysqli($servername, $username, $password,$base);

		// Check connection
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		}

		$sql="insert into composer (id_client,id_valeur) values(".$voiture.",".$valeur.")";
		$result = $conn->query($sql);
	}
		function affichageOptions($laFinition) {

	$servername = "localhost";
	$username = "root";
	$password = "";
	$base = "modulo";
	// Create connection
	$conn = new mysqli($servername, $username, $password,$base);

	$sqlOption="select id_options, type_options from options";
	$reqOption = $conn->query($sqlOption);

		while($rowOption = $reqOption->fetch_assoc()) {
			echo iconv('ISO-8859-15','UTF-8' ,"<div class='".$rowOption["type_options"]."'>".$rowOption["type_options"]." : ");
			$sqlValeur="select libelle_valeur, valeur.id_valeur, contrainte.estDefaut from finition, contrainte, valeur, options where finition.id_finition=contrainte.id_finition and contrainte.id_valeur=valeur.id_valeur and valeur.id_options=options.id_options and finition.id_finition=".$laFinition." and valeur.id_options=".$rowOption["id_options"];
			$reqValeur = $conn->query($sqlValeur);
			while($rowValeur = $reqValeur->fetch_assoc()) {

				echo iconv('ISO-8859-15','UTF-8' ,"<input type='radio' id='".$rowValeur["id_valeur"]."' value='".$rowValeur["id_valeur"]."' name='".$rowOption["id_options"]."'");
				if($rowValeur["estDefaut"] == 1) {
					echo " checked ";
				}
				echo iconv('ISO-8859-15','UTF-8' ,">".$rowValeur["libelle_valeur"]);

		}
		echo "</div>";
		echo "</br>";
		}

	}

	/*function enregistrerVoiture($laFinition, $valeurBV, $valeurMotor, $valeurSiege, $valeurGente, $valeurCoul, $valeurCam, $valeurGPS, $valeurToit) {

	$servername = "localhost";
	$username = "root";
	$password = "";
	$base = "modulo";
	// Create connection
	$conn = new mysqli($servername, $username, $password,$base);

	$sqlNbreVoiture="select COUNT(voiture.id_voiture) AS nbreVoiture from voiture";
	$reqNbreVoiture = $conn->query($sqlNbreVoiture);
	$idVoiture = $reqNbreVoiture["nbreVoiture"] + 1;




	$sqlInsert="insert into voiture (id_client,id_finition) values(1,".$laFinition.");
	insert into composer values(".$idVoiture.",".$valeurBV.");
	insert into composer values(".$idVoiture.",".$valeurMotor.");
	insert into composer values(".$idVoiture.",".$valeurSiege.");
	insert into composer values(".$idVoiture.",".$valeurGente.");
	insert into composer values(".$idVoiture.",".$valeurCoul.");
	insert into composer values(".$idVoiture.",".$valeurCam.");
	insert into composer values(".$idVoiture.",".$valeurGPS.");
	insert into composer values(".$idVoiture.",".$valeurToit.");";
	$reqInsert = $conn->query($sqlInsert);




	}*/
?>
