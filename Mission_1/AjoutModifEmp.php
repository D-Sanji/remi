<?php
session_start();
$mysqli=mysqli_connect('localhost','root','','mission_1');

if(isset($_POST['Submit'])) {	
	$id_Emp = mysqli_real_escape_string($mysqli, $_POST['id_Emp']);
	$id = $_POST['id'];
	// checking empty fields
	if(empty($id_Emp)) {
		echo "<font color='red'>Veuiller choisir un employé.</font><br/>";
		
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";

	} else { 
		$id_Employe = mysqli_query($mysqli, 'SELECT id FROM user WHERE Pseudo = $id_Emp ');
		$result = mysqli_query($mysqli, "UPDATE taches SET id_Employe = '$id_Employe' WHERE id = '$id'" );
		echo $id;
		echo $id_Emp;
		echo $id_Employe;
		//header('Location:EspaceAdmin.php');
	}


}
?>