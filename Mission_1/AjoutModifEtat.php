<?php
session_start();
$mysqli=mysqli_connect('localhost','root','','mission_1');

if(isset($_POST['Submit'])) {	
	$etat = mysqli_real_escape_string($mysqli, $_POST['etat']);
	$id = $_POST['id'];
	// checking empty fields
	if(empty($etat)) {
		echo "<font color='red'>Veuiller saisir un niveau de priorité.</font><br/>";
		
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";

	} else { 
		$result = mysqli_query($mysqli, "UPDATE taches SET Etat = '$etat' WHERE id = '$id'" );
		header('Location:EspaceEmployé.php');
	}


}
?>