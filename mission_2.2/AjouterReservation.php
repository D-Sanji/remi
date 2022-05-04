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
	$utilisateur = mysqli_real_escape_string($mysqli, $_SESSION['login']);
	$salle = mysqli_real_escape_string($mysqli, $_POST['salle']);
	$jour = mysqli_real_escape_string($mysqli, $_POST['jour']);
	$heuredebut = mysqli_real_escape_string($mysqli, $_POST['heuredebut']);
	$heurefin = mysqli_real_escape_string($mysqli, $_POST['heurefin']);

	// checking empty fields
	if(empty($salle) || empty($jour)  || empty($heuredebut) || empty($heurefin)) {
				
		if(empty($salle)) {
			echo "<font color='red'>Veuiller selectionner une salle.</font><br/>";
		}
		
		if(empty($jour)) {
			echo "<font color='red'>Veuiller saisir un jour.</font><br/>";
		}
		
		if(empty($heuredebut)) {
			echo "<font color='red'>Veuiller saisir une heure de début.</font><br/>";
		}

		if(empty($heurefin)) {
			echo "<font color='red'>Veuiller saisir une heure de fin.</font><br/>";
		}

		echo "<br/><a href='javascript:self.history.back();'>Retour</a>";
	

	} else { 	
		$result = mysqli_query($mysqli, "INSERT INTO reservation(jour,heuredebut,heurefin,id_salle,id_reserveur) VALUES('$jour','$heuredebut','$heurefin','$salle','$utilisateur')");

		echo "$jour";
		echo "$heuredebut";
		echo "<font color='green'>Ajouter avec succès.";
		echo "<br/><a href='planning.php'>Voir le planning</a>";
	}
}
?>
</body>
</html>