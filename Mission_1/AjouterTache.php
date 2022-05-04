<html>
<head>
	<title>Ajouter Taches</title>
	<link rel="stylesheet" href="style.css" />
</head>

<body>
<?php
session_start();
$mysqli=mysqli_connect('localhost','root','','mission_1');

if(isset($_POST['Submit'])) {
		$name = mysqli_real_escape_string($mysqli, $_POST['name']);
		$Etat = mysqli_real_escape_string($mysqli, $_POST['etat']);
		$NivPrio = mysqli_real_escape_string($mysqli, $_POST['NivPrio']);
		$id_Employe = mysqli_real_escape_string($mysqli, $_POST['id_Employe']);
		$Pseudo = $_SESSION['pseudo'];
		$res = mysqli_query($mysqli,"SELECT id FROM user WHERE Pseudo = '$Pseudo' ");
		$raw = mysqli_fetch_array($res);
		$id_Resp = mysqli_real_escape_string($mysqli, $raw['id']);
			
			// checking empty fields
	if(empty($name) || empty($NivPrio) || empty($Etat)) {
				
		if(empty($name)) {
			echo "<font color='red'>Veuiller saisir un nom de tache.</font><br/>";
		}
		
		if(empty($NivPrio)) {
			echo "<font color='red'>Veuiller saisir un niveau de priorité.</font><br/>";
		}

		if(empty($Etat)) {
			echo "<font color='red'>Veuiller saisir un état.</font><br/>";
		}

		echo "<br/><a href='javascript:self.history.back();'>Retour</a>";
	

	} else { 	
		
		$result = mysqli_query($mysqli, "INSERT INTO taches(NomTache, Etat, NivPrio, id_Resp, id_Employe) VALUES('$name', '$Etat', '$NivPrio', '$id_Resp', '$id_Employe')");
		
		//echo "<font color='green'>Data added successfully.";
		//echo "<br/><a href='index.php'>View Result</a>";
		//echo $name;
		//echo $Etat;
		//echo $NivPrio;
		//echo $id_Resp;
		//echo $id_Employe;

		$Pseudo = $_SESSION['pseudo'];
		$sql = mysqli_query($mysqli, "SELECT role FROM user WHERE Pseudo = '$Pseudo");

		if ($sql = "administrateur") {
			header("Location:Espaceadmin.php");
		} else {
			header("Location:EscapeUtilisateur");
		}

	}
}
?>
</body>
</html>