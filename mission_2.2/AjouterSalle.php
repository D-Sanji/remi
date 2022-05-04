<html>
<head>
	<title>Ajouter Réservation</title>
	<link rel="stylesheet" href="style.css" />
</head>

<body>
<?php
session_start();
$mysqli=mysqli_connect('localhost','root','','mission2.2');

if(isset($_POST['Submit'])) {	
	$nom = mysqli_real_escape_string($mysqli, $_POST['nom']);
	// checking empty fields
	if(empty($nom)) {
				
		if(empty($nom)) {
			echo "<font color='red'>Veuiller saisir un nom de salle.</font><br/>";
		}

		echo "<br/><a href='javascript:self.history.back();'>Retour</a>";
	

	} else { 	
		$result = mysqli_query($mysqli, "INSERT INTO salle(nom) VALUES('$nom')");

		echo "<font color='green'>Ajouter avec succès.";
		echo "<br/><a href='ListeSalle.php'>Voir la liste des salles</a>";
	}
}
?>
</body>
</html>