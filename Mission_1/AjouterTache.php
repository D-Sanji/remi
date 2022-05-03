<html>
<head>
	<title>Ajouter Taches</title>
</head>

<body>
<?php
session_start();
$mysqli=mysqli_connect('localhost','root','','mission_1');

if(isset($_POST['Submit'])) {
			// checking empty fields
	if(empty($_POST['name']) || empty($_POST['NivPrio'])) {
				
		if(empty($_POST['name'])) {
			echo "<font color='red'>Veuiller saisir un nom de tache.</font><br/>";
		}
		
		if(empty($_POST['NivPrio'])) {
			echo "<font color='red'>Veuiller saisir un niveau de priorité.</font><br/>";
		}
		

		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	

	} else { 	
		$name = mysqli_real_escape_string($mysqli, $_POST['name']);
		$Etat = mysqli_real_escape_string($mysqli, $_POST['etat']);
		$NivPrio = mysqli_real_escape_string($mysqli, $_POST['NivPrio']);
		$id_Employe = mysqli_real_escape_string($mysqli, $_POST['id_Employe']);
		$Pseudo = $_SESSION['pseudo'];
		$res = mysqli_query($mysqli,"SELECT id FROM user WHERE Pseudo = '$Pseudo' ");
		$raw = mysqli_fetch_array($res);
		$id_Resp = mysqli_real_escape_string($mysqli, $raw['id']);
		
		$result = mysqli_query($mysqli, "INSERT INTO taches (`id`, `NomTache`, `Etat`, `NivPrio`, `id_Resp`, `id_Employe`) VALUES ($name, $Etat, $NivPrio, $id_Resp, $id_Employe)");
		
		echo "<font color='green'>Data added successfully.";
		echo "<br/><a href='index.php'>View Result</a>";
		echo $name;
		echo $Etat;
		echo $NivPrio;
		echo $id_Resp;
		echo $id_Employe;

	}
}
?>
</body>
</html>