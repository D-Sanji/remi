<?php
session_start();
$mysqli=mysqli_connect('localhost','root','','mission_1');

if(isset($_POST['Submit'])) {	
	$NivPrio = mysqli_real_escape_string($mysqli, $_POST['NivPrio']);
	$id = $_POST['id'];
	// checking empty fields
	if(empty($NivPrio)) {
		echo "<font color='red'>Veuiller saisir un niveau de priorité.</font><br/>";
		
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";

	} else { 
		$result = mysqli_query($mysqli, "UPDATE taches SET NivPrio = '$NivPrio' WHERE id = '$id'" );
		header('Location:EspaceAdmin.php');
	}


}
?>