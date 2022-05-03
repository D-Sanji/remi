<?php
$mysqli=mysqli_connect('localhost','root','','mission_1');
$result = mysqli_query($mysqli, "SELECT * FROM taches ORDER BY id");
?>

<html>
<head>	
	<title>Espace Taches</title>
	<link rel="stylesheet" href="style.css" />
</head>

<body>
<a href="Deconnexion.php">Déconnexion</a><br/><br/>
<a href="FormulaireTache.php">Ajouter une tache</a><br/><br/>

	<table width='80%' border=0>

	<tr bgcolor='#CCCCCC'>
		<td>Numéro de tache</td>
		<td>Nom de tache</td>
		<td>Etat</td>
		<td>Niveau de priorité</td>
		<td>Numéro du responsable</td>
		<td>Numéro de l'employe</td>
		<td>Modification</td>
	</tr>
	
	<?php 
	while($res = mysqli_fetch_array($result)) { 		
		echo "<tr>";
		echo "<td>".$res['id']."</td>";
		echo "<td>".$res['NomTache']."</td>";
		echo "<td>".$res['Etat']."</td>";
		echo "<td>".$res['NivPrio']."</td>";	
		echo "<td>".$res['id_Resp']."</td>";		
		echo "<td>".$res['id_Employe']."</td>";
		echo "<td><a href=\"ModifPrio.php?id=$res[id]\">Edit</a> | <a href=\"delete.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";		
	}
	?>
	</table>
</body>
</html>