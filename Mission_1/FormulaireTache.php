<html>
<head>
	<title>Ajouter Taches</title>
</head>

<body>
	<form action="AjouterTache.php" method="post" name="form1">
		<table width="25%" border="0">
			<tr> 
				<td>Nom Tache</td>
				<td><input type="text" name="name"></td>
			</tr>
			<tr> 
				<td>Etat</td>
				<td><input type="text" name="etat"></td>
			</tr>
			<tr> 
				<td>Niveau de Priorité</td>
				<td><input type="number" name="NivPrio"></td>
			</tr>
			<tr> 
				<td>Employé assigné à la tache</td>
				<td><input type="number" name="id_Employe"></td>
			</tr>
			<tr> 
				<td></td>
				<td><input type="submit" name="Submit" value="Add"></td>
			</tr>
		</table>
	</form>
</body>
</html>