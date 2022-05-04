<?php
session_start();
$mysqli=mysqli_connect('localhost','root','','mission2.2');

if(isset($_POST['Submit'])) {	
	$nom = mysqli_real_escape_string($mysqli, $_POST['nom']);
	$id = $_POST['id'];
	// checking empty fields
	if(empty($nom)) {
		echo "<font color='red'>Veuiller saisir un nom de salle.</font><br/>";
		
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";

	} else { 
		$result = mysqli_query($mysqli, "UPDATE salle SET nom = '$nom' WHERE id = '$id'" );
		header('Location:ListeSalle.php');
	}


}
?>