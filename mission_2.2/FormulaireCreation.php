<html>
<head>
	<title>Ajouter une salle</title>
	<link rel="stylesheet" href="style.css" />
</head>

<body>
<header class="header">
    <h1>Ajouter une salle</h1>
    <a href="ListeSalle.php" class="button">Liste des salles</a>
    <a href="Deconnexion.php" class="button">Déconnexion</a><br/><br/>
</header>

	<form action="AjouterSalle.php" method="post" name="form1">
		<table width="25%" border="0">
			<tr> 
				<td class="form">Nom de la salle</td>
				<td><input type="text" name="nom" id="nom">
				</td>
			</tr>
			<tr> 
				<td></td>
				<td><input type="submit" name="Submit" value="Ajouter"></td>
			</tr>
		</table>
	</form>
<footer class="footer">
Créer par Rémi LIBESSART
</footer>

</body>
</html>