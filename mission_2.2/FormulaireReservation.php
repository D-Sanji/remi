<html>
<head>
	<title>Réserver Salle</title>
	<link rel="stylesheet" href="style.css" />
</head>

<body>
<header class="header">
    <h1>Réservation de salle</h1>
    <a href="FormulaireReservation.php" class="button">Réserver une salle</a>
    <a href="Deconnexion.php" class="button">Déconnexion</a><br/><br/>
</header>

	<form action="AjouterReservation.php" method="post" name="form1">
		<table width="25%" border="0">
			<tr> 
				<td class="form">Salle</td>
				<td><select name="salle" id="salle" style="width:160px" class="form">
 
<?php
$mysqli=mysqli_connect('localhost','root','','mission2.2');
$reponse = $mysqli->query('SELECT * FROM salle');
 
while ($donnees = mysqli_fetch_array($reponse)) {
?>

<option value="<?php echo $donnees['nom']; ?>"><?php echo $donnees['nom']; ?></option>

<?php
}
?>
				</td>
			</tr>
			<tr> 
				<td>Jour</td>
				<td><input type="date" name="jour" value="" min="2022-01-01" max="2022-12-31" class="form">
			</tr>
			<tr> 
				<td>Heure Debut</td>
				<td><input type="time" min="08:00" max="19:00" name="heuredebut"></td>
			</tr>
			<tr> 
				<td>Heure Fin</td>
				<td><input type="time" min="09:00" max="20:00" name="heurefin"></td>
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