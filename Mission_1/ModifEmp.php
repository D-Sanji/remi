<?php
$id=$_GET['id'];
?>

<html>
<head>
	<title>Modifier Employé</title>
	<link rel="stylesheet" href="style.css" />
</head>

<body>
	<form action="AjoutModifEmp.php" method="post" name="form1">
		<table width="25%" border="0">
			<tr> 
				<td>Numéro de la tâche</td>
				<td><input type="number" name="id" value="<?php echo $id ?>"></td>
			</tr>
			<tr> 
				<td>Modifier l'Employé</td>
				<td><select name="id_Emp" id="id_Emp" class="form">
				<?php
				$mysqli=mysqli_connect('localhost','root','','mission_1');
				$reponse = mysqli_query($mysqli, "SELECT * FROM user WHERE Role='employe'");
				while ($donnees = mysqli_fetch_array($reponse)) {
				?>

				<option value="<?php echo $donnees['Pseudo']; ?>"><?php echo $donnees['Pseudo']; ?></option>

				<?php
				}
				?>
				</td>
			</tr>
			<tr> 
				<td><input type="submit" name="Submit" value="Modifier"></td>
			</tr>
		</table>
	</form>
</body>
</html>