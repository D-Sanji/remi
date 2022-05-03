<?php
$id=$_GET['id'];
?>

<html>
<head>
	<title>Modifier Niveaux de Priorités</title>
	<link rel="stylesheet" href="style.css" />
</head>

<body>
	<form action="AjoutModifPrio.php" method="post" name="form1">
		<table width="25%" border="0">
			<tr> 
				<td>Numéro de la tâche</td>
				<td><input type="number" name="id" value="<?php echo $id ?>"></td>
			</tr>
			<tr> 
				<td>Modifier le niveau de priorités</td>
				<td><input type="number" name="NivPrio"></td>
			</tr>
			<tr> 
				<td><input type="submit" name="Submit" value="Add"></td>
			</tr>
		</table>
	</form>
</body>
</html>