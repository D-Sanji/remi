<?php
$id=$_GET['id'];
?>

<html>
<head>
	<title>Modifier Etat</title>
	<link rel="stylesheet" href="style.css" />
</head>

<body>
	<form action="AjoutModifEtat.php" method="post" name="form1">
		<table width="25%" border="0">
			<tr> 
				<td>Numéro de la tâche</td>
				<td><input type="number" name="id" value="<?php echo $id ?>"></td>
			</tr>
			<tr> 
				<td>Modifier l'état de la tache </td>
				<td><input type="text" name="etat"></td>
			</tr>
			<tr> 
				<td><input type="submit" name="Submit" value="Add"></td>
			</tr>
		</table>
	</form>
</body>
</html>