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
	<header class="header">
		<h1>Réservation de taches</h1>
		<a href="Deconnexion.php" class="button">Déconnexion</a>
		<a href="FormulaireTache.php" class="button">Ajouter une tache</a><br/><br/>
		Vous êtes Administrateur
	</header>	

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
		echo "<td><a href=\"ModifPrio.php?id=$res[id]\">Modifier</a> | <a href=\"delete.php?id=$res[id]\" onClick=\"return confirm('Etes-vous sur de vouloir supprimer ?')\">Supprimer</a> | <a href=\"ModifEmp.php?id=$res[id]\">Modifier Employé</a></td>";		
	}
	?>
	</table>

<footer class="footer">
Créer par Rémi LIBESSART
</footer>
</body>
</html>